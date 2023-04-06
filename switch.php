<?php
$day = date("D");
switch ($day) {
    case "Sun":
        echo "Hari Minggu <br>";
        break;
    case "Mon":
        echo "Hari Senin <br>";
        break;
    case "Tue":
        echo "Hari Selasa <br>";
        break;
    case "Wed":
        echo "Hari Rabu <br>";
        break;
    case "Thu":
        echo "Hari Kamis <br>";
        break;
    case "Fri":
        echo "Hari Jumat <br>";
        break;
    case "Sat":
        echo "Hari Sabtu <br>";
        break;
    default:
        echo "Hari kiamat <br>";
}

echo $day;
