<?php
    $mtk = 70;
    $indo = 100;
    $ipa = 80;
    $pkn = 60;
    $total = $mtk + $indo + $ipa + $pkn;
    $rataRata = $total / 4;
?>

<p>Laporan Daftar Nilai</p>
<p>Nilai Matematika: <?=$mtk?></p>
<p>Nilai Bahasa Indonesia: <?=$indo?></p>
<p>Nilai IPA: <?=$ipa?></p>
<p>Nilai PKN: <?=$pkn?></p>
<p>--------------------------------</p>
<p>Total Nilai <?=$total?></p>
<p>Rata-Rata<?=$rataRata?></p>