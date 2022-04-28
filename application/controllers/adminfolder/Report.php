<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Report extends CI_Controller {

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
     	$result['report']=$this->db->get_where('invoice_report')->result();
     	$this->load->view('layout/admin/dashboard/header');
        $this->load->view('layout/admin/dashboard/sidebar');
     	$this->load->view('admin/report/index',$result);
     	$this->load->view('layout/admin/dashboard/footer');

     }
     public function delete($id)
     {
     	$this->db->delete('invoice_report',array('id'=>$id))->row();
     	$this->session->set_flashdata('warning','Report Deleted Successfully!!');
     	redirect('adminfolder/report');
     }
    
   
}
?>
