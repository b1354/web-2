<?php
include 'koneksi.php';

$query = "SELECT a.bay_nim, a.bay_nama, a.bay_kodejurusan, b.bay_namajurusan 
            FROM bay_mstmahasiswa a, bay_mstjurusan b 
            WHERE a.bay_kodejurusan = b.bay_kodejurusan";
$data_arr = mysqli_query($conn, $query);
$index = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        table {
            
        }
    </style>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <h4>Universitas Nasional Pasim</h4>
    <hr>
    <table colspan='5' border='1'>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>Jurusan</th>
        </tr>   
        <?php while($hasil = mysqli_fetch_array($data_arr)):?>
        <?php 
            switch ($hasil['bay_namajurusan']) {
                case 'S1 Manajemen':
                case 'S1 Akuntansi':
                    $style = "blue";
                    break;
                case 'S1 Teknik Informatika':
                case 'D3 Manajemen Informatika':
                    $style = "yellow";
                    break;
                case 'S1 Sastra Jepang':
                case 'D3 Bahasa Inggris':
                    $style = "green";
                    break;
                case 'S1 Psikologi':
                    $style = "purple";
                    break;
                case 'S1 Teknik Industri':
                    $style = "cyan";
                default:
                    $style = "white";
                    break;
            }
        ?>

        <tr style="background-color: <?=$style ?>">
           <td><?=$hasil['bay_nim'] ?></td>
           <td><?=$hasil['bay_nama'] ?></td>
           <td><?=$hasil['bay_namajurusan'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>