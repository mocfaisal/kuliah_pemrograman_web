<?php
error_reporting(E_ERROR | E_PARSE);

// isi nama host, username mysql, dan password mysql anda

$host = 'localhost';
$username = 'root';
$password = 'mysql';
$database = 'konekdb';

// koneksi ke service mysql
$host_cond = mysql_connect($host, $username, $password);
if ($host_cond) {
    echo "Koneksi ke service mysql berhasil";
} else {
    echo "Koneksi ke service mysql gagal";
}

echo '<br>';

// nama database
$db = mysql_select_db($database);

if ($db) {
    echo "Database berhasil konek";
} else {
    echo "Database gagal konek";
}
