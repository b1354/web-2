<?php
	$nilai = $_GET['nilai'];
	if (($nilai >= 90) and ($nilai <= 100))
		{   $grade = "A"; } 
	elseif (($nilai >= 80) and ($nilai <= 80))
		{   $grade = "B"; }
	elseif (($nilai >= 70) and ($nilai <= 70))
		{   $grade = "C"; }
	elseif (($nilai >= 60) and ($nilai <= 60))
		{   $grade = "D"; }
	else { $grade = "E"; }
	echo "Nilai Angka = $nilai  Nilai Grade = $grade";
?>
