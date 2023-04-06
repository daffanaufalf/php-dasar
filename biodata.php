<?php
// Tipe data char (karakter)
$jenis_kelamin = 'L';

// Tipe data string (teks)
$nama_lengkap = "Daffa Naufal Fajriansyah";

// Tipe data integer
$umur = 19;

// Tipe data float
$berat_badan = 50.5;

// Tipe data boolean
$menikah = false;

if ($menikah) {
    $status = "True";
} else {
    $status = "False";
}

echo "Nama: $nama_lengkap <br>";
echo "Jenis Kelamin: $jenis_kelamin <br>";
echo "Umur: $umur tahun<br>";
echo "Berat Badan: $berat_badan kg<br>";
echo "Menikah: $status<br>";
