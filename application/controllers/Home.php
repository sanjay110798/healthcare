<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library("pagination");
		$this->load->database();
	}
	public function error()
	{
		$this->load->view('front/error404');
	}
     public function index()
     {
     	$this->load->view('layout/front/header');
     	$this->load->view('front/home');
     	$this->load->view('layout/front/footer');

     }
}
?>
