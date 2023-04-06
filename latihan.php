<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>

<body>
    <form action="" method="POST">
        <p>
            <label>Masukkan Bilangan 1: </label>
            <input type="number" name="bil1" placeholder="Bilangan 1 " required>
        </p>
        <p>
            <label>Masukkan Bilangan 2: </label>
            <input type="number" name="bil2" placeholder="Bilangan 2 " required>
        </p>
        <p>
            <input type="submit" name="tambah" value="+">
            <input type="submit" name="kurang" value="-">
            <input type="submit" name="kali" value="*">
            <input type="submit" name="bagi" value="/">
            <input type="submit" name="xreset" value="Reset">
        </p>
    </form>
</body>

</html>

<?php

if (isset($_POST['tambah'])) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $hasil = $bil1 + $bil2;
    echo "<h2>Hasil dari $bil1 + $bil2 = $hasil</h2>";
}
if (isset($_POST['kurang'])) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $hasil = $bil1 - $bil2;
    echo "<h2>Hasil dari $bil1 - $bil2 = $hasil</h2>";
}
if (isset($_POST['kali'])) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $hasil = $bil1 * $bil2;
    echo "<h2>Hasil dari $bil1 * $bil2 = $hasil</h2>";
}
if (isset($_POST['bagi'])) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $hasil = $bil1 / $bil2;
    echo "<h2>Hasil dari $bil1 / $bil2 = $hasil</h2>";
}
