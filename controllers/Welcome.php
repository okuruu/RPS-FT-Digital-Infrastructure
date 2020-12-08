<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
		{
		parent::__construct();
		$this->load->database();
		$this->load->model('Form_Model');	
		}
	
	public function savedataSipil()
	{
	
		/*Check submit button */
		if($this->input->post('save'))
		{

			// Sek ngebug.
		
		} else
		{
		$kode_mk		=$this->input->post('kode_mk');
		$nama_mk		=$this->input->post('nama_mk');;
		$nim			=$this->input->post('nim');
		$email			=$this->input->post('email');
		$kelas			=$this->input->post('kelas');
		$x1				=$this->input->post('x1');
		$x2				=$this->input->post('x2');
		$x3				=$this->input->post('x3');
		$x4				=$this->input->post('x4');
		$x5				=$this->input->post('x5');
		$x6				=$this->input->post('x6');
		$x7				=$this->input->post('x7');
		$x8				=$this->input->post('x8');
		$x9				=$this->input->post('x9');
		$x10			=$this->input->post('x10');
		$x11			=$this->input->post('x11');
		$x12			=$this->input->post('x12');
		$saran			=$this->input->post('saran');
		
		$this->Form_Model->saverecords($kode_mk,$nama_mk,$nim,$email,$kelas,$x1,$x2,$x3,$x4,$x5,$x6,$x7,$x8,$x9,$x10,$x11,$x12,$saran);
		redirect('index.php?pesan=Terimakasih Telah Mengisi!', 'refresh');
		}
	}
	
	public function savedataElektro()
	{
	
		/*Check submit button */
		if($this->input->post('save'))
		{

			// Sek ngebug.
		
		} else
		{
		$kode_mk		=$this->input->post('kode_mk');
		$nama_mk		=$this->input->post('nama_mk');;
		$nim			=$this->input->post('nim');
		$email			=$this->input->post('email');
		$kelas			=$this->input->post('kelas');		
		$x1				=$this->input->post('x1');
		$x2				=$this->input->post('x2');
		$x3				=$this->input->post('x3');
		$x4				=$this->input->post('x4');
		$x5				=$this->input->post('x5');
		$x6				=$this->input->post('x6');
		$x7				=$this->input->post('x7');
		$x8				=$this->input->post('x8');
		$x9				=$this->input->post('x9');
		$x10			=$this->input->post('x10');
		$x11			=$this->input->post('x11');
		$x12			=$this->input->post('x12');
		$saran			=$this->input->post('saran');
		
		$this->Form_Model->saverecords($kode_mk,$nama_mk,$nim,$email,$kelas,$x1,$x2,$x3,$x4,$x5,$x6,$x7,$x8,$x9,$x10,$x11,$x12,$saran);	
		redirect('index.php?pesan=Terimakasih Telah Mengisi!', 'refresh');
		}
	}	
	
		public function savedataInformatika()
	{
	
		/*Check submit button */
		if($this->input->post('save'))
		{

			// Sek ngebug.
		
		} else
		{
		$kode_mk		=$this->input->post('kode_mk');
		$nama_mk		=$this->input->post('nama_mk');;
		$nim			=$this->input->post('nim');
		$email			=$this->input->post('email');
		$kelas			=$this->input->post('kelas');		
		$x1				=$this->input->post('x1');
		$x2				=$this->input->post('x2');
		$x3				=$this->input->post('x3');
		$x4				=$this->input->post('x4');
		$x5				=$this->input->post('x5');
		$x6				=$this->input->post('x6');
		$x7				=$this->input->post('x7');
		$x8				=$this->input->post('x8');
		$x9				=$this->input->post('x9');
		$x10			=$this->input->post('x10');
		$x11			=$this->input->post('x11');
		$x12			=$this->input->post('x12');
		$saran			=$this->input->post('saran');
		
		$this->Form_Model->saverecords($kode_mk,$nama_mk,$nim,$email,$kelas,$x1,$x2,$x3,$x4,$x5,$x6,$x7,$x8,$x9,$x10,$x11,$x12,$saran);	
		redirect('index.php?pesan=Terimakasih Telah Mengisi!', 'refresh');
		}
	}	

	public function savedataMesin()
	{
	
		/*Check submit button */
		if($this->input->post('save'))
		{

			// Sek ngebug.
		
		} else
		{
		$kode_mk		=$this->input->post('kode_mk');
		$nama_mk		=$this->input->post('nama_mk');;
		$nim			=$this->input->post('nim');
		$email			=$this->input->post('email');
		$kelas			=$this->input->post('kelas');		
		$x1				=$this->input->post('x1');
		$x2				=$this->input->post('x2');
		$x3				=$this->input->post('x3');
		$x4				=$this->input->post('x4');
		$x5				=$this->input->post('x5');
		$x6				=$this->input->post('x6');
		$x7				=$this->input->post('x7');
		$x8				=$this->input->post('x8');
		$x9				=$this->input->post('x9');
		$x10			=$this->input->post('x10');
		$x11			=$this->input->post('x11');
		$x12			=$this->input->post('x12');
		$saran			=$this->input->post('saran');
		
		$this->Form_Model->saverecords($kode_mk,$nama_mk,$nim,$email,$kelas,$x1,$x2,$x3,$x4,$x5,$x6,$x7,$x8,$x9,$x10,$x11,$x12,$saran);
		redirect('index.php?pesan=Terimakasih Telah Mengisi!', 'refresh');
		}
	}

	public function savedataIndustri()
	{
	
		/*Check submit button */
		if($this->input->post('save'))
		{

			// Sek ngebug.
		
		} else
		{
		$kode_mk		=$this->input->post('kode_mk');
		$nama_mk		=$this->input->post('nama_mk');;
		$nim			=$this->input->post('nim');
		$email			=$this->input->post('email');
		$kelas			=$this->input->post('kelas');		
		$x1				=$this->input->post('x1');
		$x2				=$this->input->post('x2');
		$x3				=$this->input->post('x3');
		$x4				=$this->input->post('x4');
		$x5				=$this->input->post('x5');
		$x6				=$this->input->post('x6');
		$x7				=$this->input->post('x7');
		$x8				=$this->input->post('x8');
		$x9				=$this->input->post('x9');
		$x10			=$this->input->post('x10');
		$x11			=$this->input->post('x11');
		$x12			=$this->input->post('x12');
		$saran			=$this->input->post('saran');
		
		$this->Form_Model->saverecords($kode_mk,$nama_mk,$nim,$email,$kelas,$x1,$x2,$x3,$x4,$x5,$x6,$x7,$x8,$x9,$x10,$x11,$x12,$saran);	
		redirect('index.php?pesan=Terimakasih Telah Mengisi!', 'refresh');
		}
	}

	public function savedataD3()
	{
	
		/*Check submit button */
		if($this->input->post('save'))
		{

			// Sek ngebug.
		
		} else
		{
		$kode_mk		=$this->input->post('kode_mk');
		$nama_mk		=$this->input->post('nama_mk');;
		$nim			=$this->input->post('nim');
		$email			=$this->input->post('email');
		$kelas			=$this->input->post('kelas');		
		$x1				=$this->input->post('x1');
		$x2				=$this->input->post('x2');
		$x3				=$this->input->post('x3');
		$x4				=$this->input->post('x4');
		$x5				=$this->input->post('x5');
		$x6				=$this->input->post('x6');
		$x7				=$this->input->post('x7');
		$x8				=$this->input->post('x8');
		$x9				=$this->input->post('x9');
		$x10			=$this->input->post('x10');
		$x11			=$this->input->post('x11');
		$x12			=$this->input->post('x12');
		$saran			=$this->input->post('saran');
		
		$this->Form_Model->saverecords($kode_mk,$nama_mk,$nim,$email,$kelas,$x1,$x2,$x3,$x4,$x5,$x6,$x7,$x8,$x9,$x10,$x11,$x12,$saran);	
		redirect('index.php?pesan=Terimakasih Telah Mengisi!', 'refresh');
		}
	}	
	
	public function index()
	{
		
			$this->load->view("_pieces/head.php");
			$this->load->view("_pieces/info.php");
			$this->load->view("_pieces/nav.php");
			$this->load->view("_pieces/desc.php");
			$this->load->view("_pieces/kategori.php");
			$this->load->view("_pieces/main.php");
			$this->load->view("_pieces/footer.php");
		}
			
	
	
}
