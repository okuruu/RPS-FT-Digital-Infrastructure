<?php
class Form_Model extends CI_Model {
	
	/*Insert*/
	function saverecords($kode_mk,$nama_mk,$nim,$email,$kelas,$x1,$x2,$x3,$x4,$x5,$x6,$x7,$x8,$x9,$x10,$x11,$x12,$saran)
	{

	$query="insert into eval (kode_mk,pengampu,nim,email,kelas,x1,x2,x3,x4,x5,x6,x7,x8,x9,x10,x11,x12,saran) values
	('$kode_mk','$nama_mk','$nim','$email','$kelas','$x1','$x2','$x3','$x4','$x5','$x6','$x7','$x8','$x9','$x10','$x11','$x12','$saran')";
	
	$this->db->query($query);
	}
}
?>