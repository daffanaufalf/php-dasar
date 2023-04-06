<?php
$nilai = -100;

if ($nilai >= 85 && $nilai <= 100) {
    $grade = "A";
} elseif ($nilai >= 75 && $nilai < 85) {
    $grade = "B";
} elseif ($nilai >= 60 && $nilai < 75) {
    $grade = "C";
} elseif ($nilai >= 50 && $nilai < 60) {
    $grade = "D";
} elseif ($nilai >= 0 && $nilai < 50) {
    $grade = "E";
} else {
    $grade = "Nilai tidak valid";
}

echo "Nilai Anda: $nilai <br>";
echo "Grade: $grade";
