<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Authentication extends CI_Controller {

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
  $this->load->view('layout/front/header');
  $this->load->view('front/login');
  $this->load->view('layout/front/footer');

}
public function register()
{
  $this->load->view('layout/front/header');
  $this->load->view('front/register');
  $this->load->view('layout/front/footer');

}
public function forgotpassword()
{
  $this->load->view('layout/front/header');
  $this->load->view('front/forgotpassword');
  $this->load->view('layout/front/footer');

}

public function registerInformation()
{
  
  $checkUser=$this->db->get_where('users',array('email'=>$this->input->post('email')))->row();
  if($checkUser)
  {
   $this->session->set_flashdata('error','User Already Exsist!!','refresh');
   redirect('authentication/register');
 }
 if($this->input->post('password')!=$this->input->post('retype_password'))
 {
   $this->session->set_flashdata('warning','Password And Retype Password Did Not Match!!','refresh');
   redirect('authentication/register');
 }
 $user=array(
   'name'=>$this->input->post('name'),
   'email'=>$this->input->post('email'),
   'password'=>$this->input->post('password'),
   'role_id'=>'3',
   'latitude'=>$this->input->post('latitude'),
   'longitude'=>$this->input->post('longitude'),
   'created_at'=>date('Y-m-d H:i:s'),
   'updated_at'=>date('Y-m-d H:i:s')
 );
 $this->db->insert('users',$user);
 $this->session->set_flashdata('success','You Registered Successfully!!','refresh');

 redirect('authentication');
}
public function recoverPassword()
{
  $user=array(
    'email'=>$this->input->post('email'),
  );
  $checkUser=$this->db->get_where('users',array('email'=>$this->input->post('email')))->row();
  if($checkUser)
  {

   $this->load->view('layout/front/header');
   $this->load->view('front/recoverpassword',$user);
   $this->load->view('layout/front/footer');
 }
 else{
  $this->session->set_flashdata('error','User Not Found!!','refresh');
  redirect('authentication/forgotpassword');
}

}
public function changepassword()
{
  $user=array(
    'email'=>$this->input->post('email'),
  );
  if($this->input->post('password')!=$this->input->post('confirm_password'))
  {
   $this->session->set_flashdata('warning','Password And Confirm Password Did Not Match!!','refresh');
   $this->load->view('layout/front/header');
   $this->load->view('front/recoverpassword',$user);
   $this->load->view('layout/front/footer');
 }else{
   $this->db->set('password',$this->input->post('password'));
   $this->db->where('email',$this->input->post('email'));
   $this->db->update('users');

   $this->session->set_flashdata('success','Password Reset Successfully!!','refresh');
   redirect('authentication');
 }
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
    redirect('profile');
  }else{
    $this->session->set_flashdata('error','Password Did Not Match!!','refresh');
    redirect('authentication');
  }
  
}else{
 $this->session->set_flashdata('error','Crediential Did Not Match!!','refresh');
 redirect('authentication');
}

}
public function logout()
{
  session_destroy();
  redirect('/');
}
}
?>
