<?php
// error_reporting(E_ERROR | E_PARSE);

// isi nama host, username mysql, dan password mysql anda

$hostname = 'localhost';
$username = 'root';
$password = 'mysql';
$database = 'pendaftaran_siswa';

// koneksi ke service mysql
$koneksi = mysqli_connect($hostname, $username, $password, $database);
if (!$koneksi) {
    die("Koneksi ke service mysqli gagal. Error : " . mysqli_connect_error());
}


function exec_query($query) {
    global $koneksi;
    $data = mysqli_query($koneksi, $query);
    return $data;
}

// echo "Koneksi ke service mysqli berhasil";
// mysqli_close($koneksi);
