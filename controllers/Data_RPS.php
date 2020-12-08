<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Data_RPS extends CI_Controller {
  
	function __construct(){
		parent::__construct();
	}
  
  public function index(){
		$data['berkas'] = $this->db->get('rps_berkas');
		$this->load->view('public/data_rps',$data);
  }
  
}