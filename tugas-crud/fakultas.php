<?php
	include "koneksi.php";
	$action = @$_GET['action'];
?>

<?php if ($action == 'tambah'):?>
<!-- Get Method -->
<h3>Tambah Data</h3>
<form name='tambahfakultas' method='post' action='simpan.php?action=tambah'>
    <table border='0'>
        <tr>
            <td>KODE FAKULTAS</td>
            <td><input name='kode_fakultas' type='text' size='15'></td>
        </tr>
        <tr>
            <td>NAMA FAKULTAS</td>
            <td><input name='nama_fakultas' type='text' size='50'></td>
        </tr>
        <tr>
            <td>NAMA DEKAN</td>
            <td><input name='nama_dekan' type='text' size='50'></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input name='alamat' type='text' size='50'></td>
        </tr>
        <tr>
            <td colspan='2' align='right'><input type='submit' value='simpan'>
                <input type='button' value='Kembali' onClick='history.back()'>
            </td>
        </tr>
</form>
<!-- Get Method -->

<?php elseif ($action == 'ubah'):?>
    <!-- Update Method -->
    <h3>UBAH DATA</h3>
    <?php 
        $kodeFak = $_GET["kodefak"];
        $query = "SELECT * FROM mst_fakultas WHERE kode_fakultas = $kodeFak";

        $qfak = mysqli_query($con,$query);
        $data = mysqli_fetch_assoc($qfak);
    ?>
    <form name='updatefakultas' method='post' action='simpan.php?action=ubah'>
    <table border='0'>
        <tr>
            <td>KODE FAKULTAS</td>
            <td><input name='kode_fakultas' type='text' size='15' value="<?=$data["kode_fakultas"]?>"></td>
        </tr>
        <tr>
            <td>NAMA FAKULTAS</td>
            <td><input name='nama_fakultas' type='text' size='50' value="<?=$data["nama_fakultas"]?>"></td>
        </tr>
        <tr>
            <td>NAMA DEKAN</td>
            <td><input name='nama_dekan' type='text' size='50' value="<?=$data["nama_dekan"]?>"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input name='alamat' type='text' size='50' value="<?=$data["alamat"]?>"></td>
        </tr>
        <tr>
            <td colspan='2' align='right'><input type='submit' value='simpan'>
                <input type='button' value='Kembali' onClick='history.back()'>
            </td>
        </tr>
</form>
<!-- Update Method -->

<?php else: ?>
<!-- Select Method -->
<?php $qfak = mysqli_query($con,"select * from mst_fakultas"); ?>
<h2>Data Fakultas</h2>
<table colspan='5' border='1'>
    <tr>
        <th>No</th>
        <th>Kode Fakultas</th>
        <th>Nama Fakultas</th>
        <th>Nama Dekan</th>
        <th>Alamat</th>
        <th><a href='fakultas.php?action=tambah'>TAMBAH</a></th>
    </tr>
    <?php $nomor = 0; ?>
    
    <?php while ($tfak = mysqli_fetch_array($qfak)): ?>
    <?php $nomor++; ?>
    <tr>
        <td><?=$nomor?></td>
        <td><?=$tfak["kode_fakultas"]?></td>
        <td><?=$tfak["nama_fakultas"]?></td>
        <td><?=$tfak["nama_dekan"]?></td>
        <td><?=$tfak["alamat"]?></td>
        <td>
            <a href='fakultas.php?action=ubah&kodefak=<?=$tfak["kode_fakultas"]?>'>UBAH</a>
            <a href='simpan.php?action=hapus&kodefak=<?=$tfak["kode_fakultas"]?>'>HAPUS</a>
        </td>
    </tr>
    <?php endwhile ?>
</table>
<!-- Select Method -->
<?php endif ?>