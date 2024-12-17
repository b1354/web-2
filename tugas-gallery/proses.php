<?php
require "koneksi.php";
$judul_gambar = $_POST['judul_gambar'];
$description = $_POST['description'];
$file_gambar = $_FILES['file_gambar']['name'];
$lokasi = $_FILES['file_gambar']['tmp_name'];
$ukuran = $_FILES['file_gambar']['size'];
$aksi = $_GET['aksi'];

switch($aksi)
{
	case 'baru' : 
		if (!empty($file_gambar))
		{
			if ($ukuran <= 1000000)
			{
				mysqli_query($con,"insert into t_gallery(judul_gambar, file_gambar,description) value ('$judul_gambar','$file_gambar','$description')");
				move_uploaded_file($lokasi,"gambar/$file_gambar"); 
			} else
			{
				$kodeerror = 2;
			}
		} else
		{
			$kodeerror = 1;
		}
		break;
			  
	case 'hapus' :
		$kode = $_GET['kode'];
		$filegambar = $_GET['filegambar'];
		mysqli_query($con,"delete from t_gallery where kode = $kode");
		unlink("gambar/$filegambar");
		break;			
	}
		
	header("location:index.php?err=$kodeerror");
?>
