<?php

include_once('incl/config.php');

$id = $_GET['id'];

$result = exec_query("Delete From calon_siswa where id=" . $id);

if ($result) {
    $status = 'sukses';
} else {
    $status = 'gagal';
}

header('Location: list-siswa.php?page=delete&status=' . $status);
