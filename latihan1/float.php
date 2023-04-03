<?php


$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia)/3;


echo "Matematika : {$nilaiMatematika} <br>";
echo "IPA : {$nilaiIPA} <br>";
echo "Bahasa Indonesia : {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata : ".$rataRata."<br>";

var_dump($rataRata);