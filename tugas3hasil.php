<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	body{
		font-family: times new roman;
	}
	table{
		border-top-left-radius: 10px;
		border-top-right-radius: 10px;
		border-bottom-left-radius: 10px;
		border-bottom-right-radius: 10px;
		border-color: black;
	}
</style>
<body>
<?php
	$nama = $_GET['nama'];
	$tempatlhr = $_GET['tempatlhr'];
	$tanggallhr = $_GET['tanggallhr'];
	$gender = $_GET['gender'];
	$agama = $_GET['agama'];
	$tlp = $_GET['tlp'];
	$email = $_GET['email'];
	$hobi = $_GET['hobi'];
	$alamat = $_GET['alamat'];
	$foto = $_GET['foto'];
?>
<table width="400" cellpadding="8" cellspacing="3" bgcolor=#83B3AB align="center" >
	<tr>
		<h1><center>B I O D A T A</center></h1>
	</tr>
	<tr>
		<td colspan="2" align="center"><img src="<?php echo $foto ?>" width="100"></td>
	</tr>
			
	<tr>
		<td width="200">Nama</td>
		<td><?php echo $nama?></td>
	</tr>
	<tr>
		<td width="200">Tempat Lahir</td>
		<td><?php echo $tempatlhr?></td>
	</tr>
	<tr>
		<td width="200">Tanggal Lahir</td>
		<td><?php echo $tanggallhr?></td>
	</tr>
	<tr>
		<td width="200">Jenis Kelamin</td>
		<td><?php echo $gender?></td>
	</tr>
	<tr>
		<td width="200">Agama</td>
		<td><?php echo $agama?></td>
	</tr>
	<tr>
		<td width="200">Telepon</td>
		<td><?php echo $tlp?></td>
	</tr>
	<tr>
		<td width="200">Email</td>
		<td><?php echo $email?></td>
	</tr>
	<tr>
		<td width="200">Hobi</td>
		<td><?php echo $hobi?></td>
	</tr>
	<tr>
		<td width="200">Alamat</td>
		<td><?php echo $alamat?></td>
	</tr>
	
</table>
</body>
</html>
