<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Setting extends CI_Controller {

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

     	$result['setting']=$this->db->get_where('setting_table',array('id'=>'1'))->row();
     	$this->load->view('layout/admin/dashboard/header');
        $this->load->view('layout/admin/dashboard/sidebar');
     	$this->load->view('admin/setting/index',$result);
     	$this->load->view('layout/admin/dashboard/footer');

     }
     public function update()
     {
     	$data=array(
        'site_name'=>$this->input->post('name'),
        'email'=>$this->input->post('email'),
        'contact_no'=>$this->input->post('phone'),
        'fa_link'=>$this->input->post('facebook_link'),
        'tw_link'=>$this->input->post('twitter_link'),
        'li_link'=>$this->input->post('linkdin_link'),
        'insta_link'=>$this->input->post('instagram_link'),
        'address'=>$this->input->post('address'),
        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s'),
     	);
		if($_FILES['image']['name']!=''){
		$upload_dir= 'upload/';
		$temp_error = $_FILES['image']['error'];

		$file_name  = time().'_'.$_FILES['image']['name']; 
		$tmp_name   = $_FILES['image']['tmp_name'];
		$file_size  = $_FILES['image']['size'];

		move_uploaded_file($tmp_name,$upload_dir.$file_name);

		$fl_name=base_url().'upload/'.$file_name;
		$data['logo']=$fl_name;
		}

		$check=$this->db->get_where('setting_table',array('id'=>'1'))->row();
		if($check)
		{
			$this->db->where('id',1);
			$this->db->update('setting_table',$data);
		}else{
			$this->db->insert('setting_table',$data);
		}

     	$this->session->set_flashdata('success','Setting Updated Successfully!!');
     	redirect('adminfolder/setting');
     }
    
   
}
?>
