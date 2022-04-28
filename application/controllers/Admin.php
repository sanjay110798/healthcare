<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library("pagination");
		$this->load->database();
	}
     public function login()
     {
     	$this->load->view('layout/admin/login/header');
     	$this->load->view('admin/login');
     	$this->load->view('layout/admin/login/footer');

     }
      public function credientialcheck()
     {
     	
     	$checkUser=$this->db->get_where('users',array('email'=>$this->input->post('email')))->row();
     	if($checkUser)
     	{
			if($this->input->post('password')==$checkUser->password)
			{
            $this->session->set_flashdata('success','Login Successfully!!','refresh');
             $this->session->set_userdata('login_id',$checkUser->id);
			redirect('dashboard');
			}else{
            $this->session->set_flashdata('error','Password Did Not Match!!','refresh');
     		redirect('admin/login');
			}
     		
     	}else{
           $this->session->set_flashdata('error','Crediential Did Not Match!!','refresh');
     	   redirect('admin/login');
     	}

     }
}
?>
