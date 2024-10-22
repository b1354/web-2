<?php
    include "koneksi.php";
    $sql_jurusan = "select * from mst_jurusan";
    $qjur = mysqli_query($con,$sql_jurusan);
    echo "
	<h2>Data JURUSAN</h2>
	<table colspan='5' border='1'>
	<tr>
	   <th>No</th>
	   <th>Kode Jurusan</th>
	   <th>Nama Jurusan</th>
	   <th>Ketua Jurusan</th>
	</tr>";
	$nomor = 0;
	while ($tjur = mysqli_fetch_array($qjur))
	{
	    $nomor++;
	    echo "<tr>
		   <td>$nomor</td>
		   <td>$tjur[kode_jurusan]</td>
		   <td>$tjur[nama_jurusan]</td>
		   <td>$tjur[nama_kajur]</td>
		</tr>";
	}
    echo "</table>";	
?>
