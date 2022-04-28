<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Doctor extends CI_Controller {

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
     	$this->load->view('doctor/login');
     	$this->load->view('layout/admin/login/footer');

     }
     public function register()
     {
     	$this->load->view('layout/admin/login/header');
     	$this->load->view('doctor/register');
     	$this->load->view('layout/admin/login/footer');

     }
     public function forgot()
     {
     	$this->load->view('layout/admin/login/header');
     	$this->load->view('doctor/forgot');
     	$this->load->view('layout/admin/login/footer');

     }
     public function registerInformation()
     {
     	
     	$checkUser=$this->db->get_where('users',array('email'=>$this->input->post('email')))->row();
     	if($checkUser)
     	{
     		$this->session->set_flashdata('error','User Already Exsist!!','refresh');
     		redirect('doctor/register');
     	}
     	if($this->input->post('password')!=$this->input->post('retype_password'))
     	{
     		$this->session->set_flashdata('warning','Password And Retype Password Did Not Match!!','refresh');
     		redirect('doctor/register');
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
        'role_id'=>'2',
        'latitude'=>$apiResult['data'][0][latitude],
        'longitude'=>$apiResult['data'][0][longitude],
        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s')
     	);
     	$this->db->insert('users',$user);
     	$this->session->set_flashdata('success','You Registered Successfully!!','refresh');

     	redirect('doctor/login');
     }
     public function recoverPassword()
     {
     	$user=array(
        'email'=>$this->input->post('email'),
     	);
     	$checkUser=$this->db->get_where('users',array('email'=>$this->input->post('email')))->row();
     	if($checkUser)
     	{
     		$this->load->view('layout/admin/login/header');
     	    $this->load->view('doctor/recoverpassword',$user);
     	    $this->load->view('layout/admin/login/footer');
     		
     	}
     	else{
     	    $this->session->set_flashdata('error','User Not Found!!','refresh');
     		redirect('doctor/forgot');
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
     		$this->load->view('layout/admin/login/header');
     	    $this->load->view('doctor/recoverpassword',$user);
     	    $this->load->view('layout/admin/login/footer');
     	}else{
     		$this->db->set('password',$this->input->post('password'));
     		$this->db->where('email',$this->input->post('email'));
     		$this->db->update('users');

     		$this->session->set_flashdata('success','Password Reset Successfully!!','refresh');
     		redirect('doctor/login');
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
     		redirect('doctor/login');
			}
     		
     	}else{
           $this->session->set_flashdata('error','Crediential Did Not Match!!','refresh');
     	   redirect('doctor/login');
     	}

     }
}
?>
