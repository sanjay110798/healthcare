<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Profile extends CI_Controller {

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
        $user=$this->db->get_where('users',array('id'=>$this->session->userdata('login_id')))->row();
        $result['user']=$user;
     	  $this->load->view('layout/front/header');
        if($user->role_id=='2')
        {
        $this->load->view('front/doctorprofile',$result);
        }else if($user->role_id=='3')
        {
        $this->load->view('front/profile',$result);
        }else{
        $this->load->view('front/madicalprofile',$result);
        }
        $this->load->view('layout/front/footer');

     }

     public function setting()
     {
        $user=$this->db->get_where('users',array('id'=>$this->session->userdata('login_id')))->row();
        $result['user']=$user;
        $this->load->view('layout/front/header');
        if($user->role_id=='2')
        {
        $this->load->view('front/doctorprofilesetting',$result);
        }else if($user->role_id=='3')
        {
        $this->load->view('front/profilesetting',$result);
        }else{
        $this->load->view('front/madicalprofilesetting',$result);
        }
        $this->load->view('layout/front/footer');

     }
     public function changepassword()
     {
      $user=$this->db->get_where('users',array('id'=>$this->session->userdata('login_id')))->row();
      $result['user']=$user;

      if($_POST)
      {
         if($this->input->post('old_pass')!=$user->password)
         {
            $this->session->set_flashdata('error','Old Password Did Not Match!!','refresh');
            redirect('profile/changepassword');
         }
         if($this->input->post('new_pass')!=$this->input->post('con_pass'))
         {
            $this->session->set_flashdata('error','Password and Confirm Password Did Not Match!!','refresh');
            redirect('profile/changepassword');
         }

         $this->db->set('password',$this->input->post('new_pass'));
         $this->db->where('id',$user->id);
         $this->db->update('users');
         
         $this->session->set_flashdata('success','Password Changed Successfully!!','refresh');
            redirect('profile/changepassword');

      }
      $this->load->view('layout/front/header');
      $this->load->view('front/changepassword',$result);
      $this->load->view('layout/front/footer');
     }

}
?>
