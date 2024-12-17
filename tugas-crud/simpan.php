<?php
	include "koneksi.php";
	$action = $_GET['action'];
	$kode_fakultas = $_POST['kode_fakultas'];
	$nama_fakultas = $_POST['nama_fakultas'];
	$nama_dekan = $_POST['nama_dekan'];
	$alamat = $_POST['alamat'];
	switch($action)
	{
		case 'tambah' :
			mysqli_query($con,"insert into mst_fakultas values('$kode_fakultas','$nama_fakultas','$nama_dekan','$alamat')") or die("Salah SQL");
			break;
		case 'ubah' :
			mysqli_query($con,"update mst_fakultas set nama_fakultas = '$nama_fakultas',nama_dekan = '$nama_dekan', alamat = '$alamat'
						 where kode_fakultas = '$kode_fakultas'") or die("Salah SQL");
			break;
		case 'hapus' :
			$kode_fak = $_GET['kodefak'];
			mysqli_query($con,"delete from mst_fakultas where kode_fakultas = '$kode_fak'") or die("Salah SQL");
			break;
	}
	header("location:fakultas.php");
?>
