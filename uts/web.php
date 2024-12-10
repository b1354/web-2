<?php
include "koneksi.php";

$query = "SELECT * FROM bay_mstbarang, bay_trxpenjualan WHERE bay_mstbarang.bay_kodebarang = bay_trxpenjualan.bay_kodebarang";

$raw_data = mysqli_query($conn, $query);
$no = 0;
$total = 0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayu Rizki</title>
</head>
<body>
    <table border=1>
        <tr style="background-color: yellow; font-size: 20px;">
            <th>No</th>
            <th>Tanggal</th>
            <th>ID</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga Satuan</th>
            <th>Jumlah Harga</th>
        </tr>
        <?php while($data = mysqli_fetch_array($raw_data)):?>
        <?php 
            $no++;
            $jumlahHarga = $data['bay_harga'] * $data['bay_jumlah'];
            $total += $jumlahHarga;
        ?>
        <tr>
            <td><?= $no?></td>
            <td><?= $data['tanggal']?></td>
            <td><?= $data['bay_idpenjualan']?></td>
            <td><?= $data['bay_namabarang']?></td>
            <td><?= $data['bay_kodebarang']?></td>
            <td><?= $data['bay_jumlah']?></td>
            <td><?= $data['bay_harga']?></td>
            <td><?= $jumlahHarga?></td>
        </tr>
        <?php endwhile ?>
        <tr style="background-color: gray">
            <td colspan=7>Jumlah</td>
            <td><?=$total?></td>
        </tr>
    </table>
</body>
</html>