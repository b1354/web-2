<?php
	session_start();
	require "koneksi.php";
	$nama_user = $_POST['nama_user'];
	$kata_kunci = $_POST['kata_kunci'];
	$qcekdata = mysqli_query($con,"select * from mst_profile where nama_user = '$nama_user' and kata_kunci = '$kata_kunci'");
	$ada = mysqli_num_rows($qcekdata);
	if ($ada > 0)
	{
		$tdata = mysqli_fetch_array($qcekdata);
		$_SESSION['nama_user123'] = $tdata['nama_user'];
		$_SESSION['kata_kunci123'] = $tdata['kata_kunci'];
		$_SESSION['nama_lengkap'] = $tdata['nama_lengkap'];
		header("location:index.php");
	} else
	{
		header("location:login.php");
	}
?>
