<?php
if(isset($_GET['nama']) and isset($_GET['tempatlhr']) and isset($_GET['tgllahir']) and isset($_GET['gender']) and isset($_GET['email'])and isset($_GET['hobi']) and isset($_GET['email']) and isset($_GET['alamat']) and isset($_GET['foto'])){

	$nama = $_GET['nama'];
	$tempatlhr = $_GET['tempatlhr'];
	$tanggallhr = $_GET['tanggallhr'];
	$gender = $_GET['gender'];
	$agama = $_GET['agama']
	$tlp = $_GET['tlp'];
	$email = $_GET['email'];
	$hobi = $_GET['hobi'];
	$alamat = $_GET['alamat'];
	$foto = $_GET['foto'];
}
	if (empty($nama) or empty($tempatlhr) or empty($tanggalhr) or empty($gender) or empty($agama) or empty($tlp) or empty($email) or empty($alamat) or empty($hobi) or empty($foto) ){
		echo "<script> alert ('Periksa kembali kelengkapan data anda dan Mohon untuk mengisi semua data anda..')</script>";
	}
	else{
		include('tugas3hasil.php');
	}
?>