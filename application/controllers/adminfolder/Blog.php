<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Blog extends CI_Controller {

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
     	$result['blog']=$this->db->get_where('blog_tbl')->result();
     	$this->load->view('layout/admin/dashboard/header');
      $this->load->view('layout/admin/dashboard/sidebar');
     	$this->load->view('admin/blog/index',$result);
     	$this->load->view('layout/admin/dashboard/footer');

     }
     public function add()
     {
     	
     	$this->load->view('layout/admin/dashboard/header');
        $this->load->view('layout/admin/dashboard/sidebar');
     	$this->load->view('admin/blog/add');
     	$this->load->view('layout/admin/dashboard/footer');

     }
      public function edit($id)
     {
     	$this->db->order_by('id','desc');
     	$result['blog']=$this->db->get_where('blog_tbl',array('id'=>$id))->row();
     	$this->load->view('layout/admin/dashboard/header');
        $this->load->view('layout/admin/dashboard/sidebar');
     	$this->load->view('admin/blog/edit',$result);
     	$this->load->view('layout/admin/dashboard/footer');

     }

     public function insert()
     {
     	
		$user=array(
        'title'=>$this->input->post('title'),
        'user_id'=>$this->session->userdata('login_id'),
        'description'=>$this->input->post('description'),
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
		$user['image']=$fl_name;
		}
     	$this->db->insert('blog_tbl',$user);
     	$this->session->set_flashdata('success','Blog Added Successfully!!','refresh');

     	redirect('adminfolder/blog');
     }
     public function update($id)
     {
     
		$user=array(
        'title'=>$this->input->post('title'),
        'description'=>$this->input->post('description'),
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
		$user['image']=$fl_name;
		}
		
     	$this->db->where('id',$id);
     	$this->db->update('blog_tbl',$user);
     	$this->session->set_flashdata('success','Blog Edited Successfully!!','refresh');

     	redirect('adminfolder/blog');
     }

     public function delete($id)
     {
      $this->db->delete('blog_tbl',array('id'=>$id));
      $this->session->set_flashdata('warning','Blog Deleted Successfully!!','refresh');

      redirect('adminfolder/blog');
     }
   
}
?>
