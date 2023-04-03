<?php

$date = date('D');

switch ($date) {
    case 'Sun':
        $hari = "Minggu";
        break;
    case 'Mon':
        $hari = "Senin";
        break;
    case 'Tue':
        $hari = "Selasa";
        break;
    case 'Wed':
        $hari = "Rabu";
        break;
    case 'Thu':
        $hari = "Kamis";
        break;
    case 'Fri':
        $hari = "Jum'at";
        break;
    case 'Sat':
        $hari = "Sabtu";
        break;

    default:
        $hari = "Kiamat";
        break;
}

echo "Hari ini hari <b>$hari</b>";
