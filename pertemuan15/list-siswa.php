<!--
    Nama : Mochammad Faisal
    NIM  : 121203006
-->

<?php

include_once('incl/config.php');

$result = exec_query("Select * From calon_siswa order by id desc");
$total_record = mysqli_num_rows($result);

$i = 1;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar content goes here -->
    </div>

    <!-- Main content -->
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="form-daftar.php">Daftar Baru</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="list-siswa.php">Pendaftar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page content -->
        <div class="container">
            <h3>Siswa yang Sudah Mendaftar</h3>
            <h1>SMK Coding</h1>

            <?php
            if (isset($_GET['status'])) {
                if ($_GET['page'] == 'add') {
                    if ($_GET['status'] == 'sukses') {
                        echo '<div class="alert alert-success" role="alert">Pendaftaran Siswa Baru Berhasil!</div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Pendaftaran Siswa Baru Gagal!</div>';
                    }
                } else if ($_GET['page'] == 'edit') {
                    if ($_GET['status'] == 'sukses') {
                        echo '<div class="alert alert-success" role="alert">Update Data Siswa Berhasil!</div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Update Data Siswa Gagal!</div>';
                    }
                } else if ($_GET['page'] == 'delete') {
                    if ($_GET['status'] == 'sukses') {
                        echo '<div class="alert alert-success" role="alert">Hapus Data Siswa Berhasil!</div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Hapus Data Siswa Gagal!</div>';
                    }
                }
            }
            ?>

            <a href="form-daftar.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah Baru</a>

            <br>
            <br>

            <div class="table-resposive">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Sekolah Asal</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($new_data = mysqli_fetch_array($result)) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $new_data['nama']; ?></td>
                                <td><?= $new_data['alamat']; ?></td>
                                <td><?= $new_data['jenis_kelamin']; ?></td>
                                <td><?= $new_data['agama']; ?></td>
                                <td><?= $new_data['sekolah_asal']; ?></td>
                                <td><a href="form-edit.php?id=<?= $new_data['id']; ?>" class="btn btn-primary"><i class="fa-solid fa-pencil"></i> Edit</a> | <a href="javascript:void(0);" onclick="del_confirm('<?= $new_data['id']; ?>', '<?= $new_data['nama']; ?>')" class="btn btn-danger"><i class="fa-solid fa-xmark"></i> Delete</a></td>
                            </tr>
                        <?php $i++;
                        endwhile; ?>
                    </tbody>
                </table>
            </div>

            <p>Total : <?= $total_record; ?></p>

        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<script>
    function del_confirm(id, nama) {
        var confirm_prompt = confirm("Apakah Anda yakin akan menghapus data : " + nama + " ?");
        let text;
        if (confirm_prompt == true) {
            location.href = 'hapus.php?id=' + id;
        }
    }
</script>