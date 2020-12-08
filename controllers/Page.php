<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Page extends MY_Controller {
  
	function __construct(){
		parent::__construct();
		$this->load->library('upload');
		$this->load->model('UserModel');
	}
  
  public function welcome(){
    $this->load->view('welcome.php');
  }
  
  function proses()
	{
		$config['upload_path']          = './berkas_matkul/';
		$config['allowed_types']        = 'docx|doc|xls|xlsx|ppt|pptx|pdf';
		$config['max_size']             = 100000000000;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('berkas'))
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('Page/welcome`', $error);
		}
		else
		{
			$data['nama_berkas'] = $this->upload->data("file_name");
			$data['matkul'] = $this->input->post('kode_mk');
			$this->db->insert('rps_berkas',$data);
			$this->session->set_flashdata('something', 'Data Berhasil Diupload!');
			redirect('Page/welcome');
		}
	}
  
}