<?php 
if(isset($_POST["panjang"]) && isset($_POST["lebar"])) {
    $panjang = $_POST["panjang"];
    $lebar = $_POST["lebar"];

    $result = $panjang * $lebar;
}
?>

<h1>Program Menghitung luas persegi panjang</h1>

<form action="" method="post">
    <label for="panjang">Masukan Panjang</label> <br>
    <input type="text" id="panjang" name="panjang"> <br>
    <label for="lebar">Masukan lebar</label> <br>
    <input type="text" id="lebar" name="lebar"> <br>
    <br>
    <input type="submit" value="Hitung">

    <?php if(isset($result)): ?>
    <p>hasilnya adalah <?=$result?> </p>
    <?php endif; ?>
</form>