<?php
error_reporting(E_ERROR | E_PARSE);

// isi nama host, username mysql, dan password mysql anda

$hostname = 'localhost';
$username = 'root';
$password = 'mysql';
$database = 'crud_db';

// koneksi ke service mysql
$host_cond = mysqli_connect($hostname, $username, $password, $database);
if (!$host_cond) {
    die("Koneksi ke service mysqli gagal. Error : " . mysqli_connect_error());
}
echo "Koneksi ke service mysqli berhasil";
mysqli_close($host_cond);
