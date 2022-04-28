<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Pharmacy extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library("pagination");
		$this->load->database();
	}
     public function index()
     {
     	$this->db->order_by('id','desc');
     	$result['pharmacy']=$this->db->get_where('users',array('role_id'=>4))->result();
     	$this->load->view('layout/admin/dashboard/header');
      $this->load->view('layout/admin/dashboard/sidebar');
     	$this->load->view('admin/pharmacy/index',$result);
     	$this->load->view('layout/admin/dashboard/footer');

     }
     public function add()
     {
     	
     	$this->load->view('layout/admin/dashboard/header');
      $this->load->view('layout/admin/dashboard/sidebar');
     	$this->load->view('admin/pharmacy/add');
     	$this->load->view('layout/admin/dashboard/footer');

     }
      public function edit($id)
     {
     	$this->db->order_by('id','desc');
     	$result['pharmacy']=$this->db->get_where('users',array('id'=>$id))->row();
     	$this->load->view('layout/admin/dashboard/header');
      $this->load->view('layout/admin/dashboard/sidebar');
     	$this->load->view('admin/pharmacy/edit',$result);
     	$this->load->view('layout/admin/dashboard/footer');

     }

     public function insert()
     {
     	$checkUser=$this->db->get_where('users',array('email'=>$this->input->post('email')))->row();
     	if($checkUser)
     	{
     		$this->session->set_flashdata('error','User Already Exsist!!','refresh');
     		redirect('adminfolder/pharmacy/add');
     	}
     	if($this->input->post('password')!=$this->input->post('retype_password'))
     	{
     		$this->session->set_flashdata('warning','Password And Retype Password Did Not Match!!','refresh');
     		redirect('adminfolder/pharmacy/add');
     	}
		$queryString = http_build_query([
		'access_key' => '74cc3c06e41e45735687178334aa0962',
		'query' => $this->input->post('address'),
		'output' => 'json',
		'limit' => 1,
		]);

		$ch = curl_init(sprintf('%s?%s', 'http://api.positionstack.com/v1/forward', $queryString));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$json = curl_exec($ch);

		curl_close($ch);

		$apiResult = json_decode($json, true);

		$user=array(
        'name'=>$this->input->post('name'),
        'email'=>$this->input->post('email'),
        'phone'=>$this->input->post('phone'),
        'password'=>$this->input->post('password'),
        'address'=>$this->input->post('address'),
        'address2'=>$this->input->post('address2'),
        'gender'=>$this->input->post('gender'),
        'country'=>$this->input->post('country'),
        'state'=>$this->input->post('state'),
        'city'=>$this->input->post('city'),
        'postal_code'=>$this->input->post('postal_code'),
        'role_id'=>'4',
        'latitude'=>$apiResult['data'][0][latitude],
        'longitude'=>$apiResult['data'][0][longitude],
        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s')
     	);
		if($_FILES['image']['name']!=''){
		$upload_dir= 'upload/';
		$temp_error = $_FILES['image']['error'];

		$file_name  = time().'_'.$_FILES['image']['name']; 
		$tmp_name   = $_FILES['image']['tmp_name'];
		$file_size  = $_FILES['image']['size'];

		move_uploaded_file($tmp_name,$upload_dir.$file_name);

		$fl_name=base_url().'upload/'.$file_name;
		$user['profile_image']=$fl_name;
		}
     	$this->db->insert('users',$user);
     	$this->session->set_flashdata('success','Pharmacy Added Successfully!!','refresh');

     	redirect('adminfolder/pharmacy');
     }
     public function update($id)
     {
     	$checkUser=$this->db->get_where('users',array('email'=>$this->input->post('email'),'id !='=>$id))->row();
     	if($checkUser)
     	{
     		$this->session->set_flashdata('error','User Already Exsist!!','refresh');
     		redirect('adminfolder/pharmacy/edit/'.$id);
     	}
     	
		$queryString = http_build_query([
		'access_key' => '74cc3c06e41e45735687178334aa0962',
		'query' => $this->input->post('address'),
		'output' => 'json',
		'limit' => 1,
		]);

		$ch = curl_init(sprintf('%s?%s', 'http://api.positionstack.com/v1/forward', $queryString));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$json = curl_exec($ch);

		curl_close($ch);

		$apiResult = json_decode($json, true);

		$user=array(
        'name'=>$this->input->post('name'),
        'email'=>$this->input->post('email'),
        'phone'=>$this->input->post('phone'),
        'password'=>$this->input->post('password'),
        'address'=>$this->input->post('address'),
        'address2'=>$this->input->post('address2'),
        'gender'=>$this->input->post('gender'),
        'country'=>$this->input->post('country'),
        'state'=>$this->input->post('state'),
        'city'=>$this->input->post('city'),
        'postal_code'=>$this->input->post('postal_code'),
        'role_id'=>'4',
        'latitude'=>$apiResult['data'][0][latitude],
        'longitude'=>$apiResult['data'][0][longitude],
        'updated_at'=>date('Y-m-d H:i:s')
     	);
		if($_FILES['image']['name']!=''){
		$upload_dir= 'upload/';
		$temp_error = $_FILES['image']['error'];

		$file_name  = time().'_'.$_FILES['image']['name']; 
		$tmp_name   = $_FILES['image']['tmp_name'];
		$file_size  = $_FILES['image']['size'];

		move_uploaded_file($tmp_name,$upload_dir.$file_name);

		$fl_name=base_url().'upload/'.$file_name;
		$user['profile_image']=$fl_name;
		}
		if($this->input->post('password')!='')
     	{
     	$user['password']=$this->input->post('password');
     	}
     	$this->db->where('id',$id);
     	$this->db->update('users',$user);
     	$this->session->set_flashdata('success','Pharmacy Edited Successfully!!','refresh');

     	redirect('adminfolder/pharmacy');
     }

     public function delete($id)
     {
      $this->db->delete('users',array('id'=>$id));
      $this->session->set_flashdata('warning','Pharmacy Deleted Successfully!!','refresh');

      redirect('adminfolder/pharmacy');
     }
   
}
?>
