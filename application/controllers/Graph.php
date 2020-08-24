<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Graph extends CI_Controller {

	public function harian(){
		$data['active']='Grafik Harian';
		$data['harian']=$this->db->get('harian')->result_array();
		$this->load->view('graph/harian',$data);
	}

	public function mingguan(){
		$data['active']='Grafik Mingguan';
		$this->load->view('graph/mingguan',$data);
	}

	public function bulanan(){
		$data['active']='Grafik Bulanan';
		$data['export']=$this->db->get_where('sales_summary',['tipe' => 'Export'])->row_array();
		$data['local']=$this->db->get_where('sales_summary',['tipe' => 'Local'])->row_array();
		$this->load->view('graph/bulanan',$data);
	}

	public function tahunan(){
		$data['active']='Grafik tahunan';
		$this->load->view('graph/tahunan',$data);
	}

}