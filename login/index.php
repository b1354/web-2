<?php
session_start();
require "koneksi.php";

if (empty($_SESSION['nama_user123']) and empty($_SESSION['kata_kunci123'])) {
    header("location:login.php");
}
echo "<a href='logout.php'>Keluar dari Aplikasi</a>";

$qgallery = mysqli_query($con, "select * from t_gallery order by tanggal_update desc");

echo "<title>Gallery Photo</title>";
echo "<h1 align='center'>Gallery Photo</h1>";

if (isset($_GET['err'])) {
    $err = $_GET['err'];
} else {
    $err = "";
}

switch ($err) {
    case 1:$pesan = "Tidak Ada File Gambar yang dikirim";
        break;
    case 2:$pesan = "Ukuran File Gambar Lebih Besar dari 1 MB";
        break;
    default:$pesan = "";
}

echo "<h3 align='center'><font color='red'>$pesan</font></h3><hr>";
echo "<form action='proses.php?aksi=baru' method='POST' enctype='multipart/form-data'>";
echo "<table align='center'>
	<tr>
		<td>Judul Gambar</td>
		<td><input type='text' name='judul_gambar'></td>
	</tr>
	<tr>
		<td>File Gambar</td>
		<td><input type='file' name='file_gambar'></td>
	</tr>
	<tr>
		<td>Description</td>
		<td><textarea name='description'></textarea></td>
	</tr>
	<tr>
		<td colspan='2' align='center'><input type='submit' value='KIRIM'></td>
	</tr>
	</table>";
echo "<table width='800' cellpadding='15' align='center'>";
$kolom = 0;
echo "<tr>";
while ($tgallery = mysqli_fetch_array($qgallery)) {
    if ($kolom >= 3) {$kolom = 0;
        echo "</tr><tr>";}
    echo "<td align='center'>
<a href='proses.php?aksi=hapus&kode=$tgallery[kode]&filegambar=$tgallery[file_gambar]'
					title='Hapus Gambar'>[X]</a><br>
<a href='gambar/$tgallery[file_gambar]' target='_blank'>
					<img src='gambar/$tgallery[file_gambar]' width='100' height='100' title='$tgallery[description]'>
					</a> <br>$tgallery[judul_gambar]</td>";
    $kolom++;
}
echo "</tr>";
