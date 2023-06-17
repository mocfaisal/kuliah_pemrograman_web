<!--
    Nama : Mochammad Faisal
    NIM  : 121203006
-->

<?php

include_once('incl/config.php');

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    $result = exec_query("Update calon_siswa set nama = '$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah' where id='$id' ");

    if ($result) {
        $status = 'sukses';
    } else {
        $status = 'gagal';
    }

    header('Location: list-siswa.php?page=edit&status=' . $status);
} else {
    die('Akses Dilarang...');
}
