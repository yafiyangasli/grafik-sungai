<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download_data extends CI_Controller {

	public function index(){
		$data['harian']=$this->db->get('harian')->result_array();
		$this->load->view('download/index',$data);
	}
}