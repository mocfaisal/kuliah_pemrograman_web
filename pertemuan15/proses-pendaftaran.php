<!--
    Nama : Mochammad Faisal
    NIM  : 121203006
-->

<?php

include_once('incl/config.php');

if (isset($_POST['daftar'])) {

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    $result = exec_query("Insert into calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) values ('$nama', '$alamat', '$jk', '$agama', '$sekolah') ");

    if ($result) {
        $status = 'sukses';
    } else {
        $status = 'gagal';
    }

    header('Location: list-siswa.php?page=add&status=' . $status);
} else {
    die('Akses Dilarang...');
}

?>