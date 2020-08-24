<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$data['active']='Beranda';
		$this->load->view('home/index',$data);
	}

	public function downloadData(){
		$data['harian']=$this->db->get('harian')->result_array();
		$this->load->view('dataDownload',$data);
	}

}