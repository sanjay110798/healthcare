<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Dashboard extends CI_Controller {

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
      $this->load->view('layout/admin/dashboard/header');
      $this->load->view('layout/admin/dashboard/sidebar');
      $this->load->view('admin/dashboard');
      $this->load->view('layout/admin/dashboard/footer');

  }
  public function profile()
  {
    $user=$this->db->get_where('users',array('id'=>$this->session->userdata('login_id')))->row();
    $result['user']=$user;
    $this->load->view('layout/admin/dashboard/header');
    $this->load->view('layout/admin/dashboard/sidebar');
    $this->load->view('admin/profile',$result);
    $this->load->view('layout/admin/dashboard/footer');

}
public function updateprofile()
{
    $data=array(
    'name'=>$this->input->post('name'),
    'email'=>$this->input->post('email'),
    'phone'=>$this->input->post('phone'),
    'address'=>$this->input->post('address'),
    'dob'=>$this->input->post('dob'),
    );
    if($_FILES['image']['name']!=''){
    $upload_dir= 'upload/';
    $temp_error = $_FILES['image']['error'];

    $file_name  = time().'_'.$_FILES['image']['name']; 
    $tmp_name   = $_FILES['image']['tmp_name'];
    $file_size  = $_FILES['image']['size'];

    move_uploaded_file($tmp_name,$upload_dir.$file_name);
    
    $fl_name=base_url().'upload/'.$file_name;
    $data['profile_image']=$fl_name;
    }
    $this->db->where('id',$this->session->userdata('login_id'));
    $this->db->update('users',$data);
    $this->session->set_flashdata('success','Update Successfully!!','refresh');
    redirect('dashboard/profile');
}
public function updatepassword()
{
    $user=$this->db->get_where('users',array('id'=>$this->session->userdata('login_id')))->row();
    if($user->password==$this->input->post('old_password'))
    {
        if($this->input->post('new_password')==$this->input->post('con_password'))
       {
        $data=array(
        'password'=>$this->input->post('new_password'),
        );
        $this->db->where('id',$this->session->userdata('login_id'));
        $this->db->update('users',$data);
        $this->session->set_flashdata('success','Update Successfully!!','refresh');
       }else{
        $this->session->set_flashdata('error','New password And Confirm Password Did Not Match!!','refresh');
       }
    }else{
         $this->session->set_flashdata('error','Old Password Did Not Match!!','refresh');
    }
    
    redirect('dashboard/profile');
}
public function logout()
{
    session_destroy();
    redirect('/');
}
}
?>
