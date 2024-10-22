<?php
// Menampilkan data fakultas
	include "koneksi.php";
	$sql_fakultas = "select * from mst_fakultas";
	$qfak = mysqli_query($con,$sql_fakultas);
	echo "
	    <h2>Data Fakultas</h2>
	    <table colspan='5' border='1'>
	    <tr>
	       <th>No</th>
	       <th>Kode Fakultas</th>
	       <th>Nama Fakultas</th>
	       <th>Nama Dekan</th>
	       <th>Alamat</th>
	    </tr>";
	$nomor = 0;
	while ($tfak = mysqli_fetch_array($qfak))
	{
	    $nomor++;
	    echo "<tr>
	       <td>$nomor</td>
	       <td>$tfak[kode_fakultas]</td>
	       <td>$tfak[nama_fakultas]</td>
	       <td>$tfak[nama_dekan]</td>
	       <td>$tfak[alamat]</td>
	    </tr>";
	}
	echo "</table>";
?>
