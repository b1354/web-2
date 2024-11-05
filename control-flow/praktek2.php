<?php
	$grade = $_GET['grade'];
	switch ($grade)
	{
		case "A" : $bobot = 4; break;
		case "B" : $bobot = 3; break;
		case "C" : $bobot = 2; break;
		case "D" : $bobot = 1; break;
		default  : $bobot = 0; break;
	}
	echo "Nilai Grade anda = $grade, Bobot Nilai Menjadi = $bobot";
?>
