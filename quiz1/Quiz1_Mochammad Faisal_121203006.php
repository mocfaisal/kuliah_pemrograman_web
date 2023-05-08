<html>
<form action="" method="post">
    <label for="">Masukkan NIP Pegawai : </label>
    <input type="text" name="nip_pegawai">
    <br>

    <label for="">Masukkan Nama Pegawai : </label>
    <input type="text" name="nm_pegawai">
    <br>

    <label for="">Masukkan Gaji Pokok* : </label>
    <input type="number" name="gaji_pokok" required>
    <br>

    <label for="">Masukkan Bonus* : </label>
    <input type="number" name="bonus" required>
    <br>

    <input type="submit" value="Submit" name="submit">
</form>

</html>

<?php

/**
 *
 * Created by Mochammad Faisal
 * Created at 2023-05-06 08:57:11
 * Updated at 2023-05-06 10:11:52
 *
 */


$divider = "========================================";
$def_nip = 100111;
$def_nm_pegawai = 'Mochammad Faisal';

function format_rupiah($nominal) {
    return 'Rp. ' . number_format($nominal, 0, ',', '.') . ',-';
}

if (isset($_POST['submit'])) {

    $nip = $_POST['nip_pegawai'] ?? $def_nip ?: $def_nip;
    $nm_pegawai = $_POST['nm_pegawai'] ?? $def_nm_pegawai ?: $def_nm_pegawai;

    $gaji_pokok = $_POST['gaji_pokok'] ?? 0 ?: 0;
    $bonus = $_POST['bonus'] ?? 0 ?: 0;

    // Tunjangan 5% dari gaji pokok
    $tunjangan = (5 / 100) * $gaji_pokok;

    // Pajak 10% dari gaji
    $pajak = (10 / 100) * $gaji_pokok;

    $gaji_bersih = $gaji_pokok + $bonus + $tunjangan - $pajak;

    echo $divider . '<br>';
    echo 'NIP = ' . $nip . '<br>';
    echo 'Nama Pegawai = ' . $nm_pegawai . '<br>';
    echo $divider . '<br>';
    echo 'Gaji Pokok = ' . format_rupiah($gaji_pokok) . '<br>';
    echo 'Bonus = ' . format_rupiah($bonus) . '<br>';
    echo 'Tunjangan = ' . format_rupiah($tunjangan) . '<br>';
    echo 'Pajak = ' . format_rupiah($pajak) . '<br>';
    echo $divider . '<br>';
    echo 'Gaji yang harus dibayarkan = ' . format_rupiah($gaji_bersih) . '<br>';
}

?>