<!--
    Nama : Mochammad Faisal
    NIM  : 121203006
-->

<?php

include_once('incl/config.php');

$result = exec_query("Select * From calon_siswa where id=" . $_GET['id']);

while ($new_data = mysqli_fetch_array($result)) {
    $nama = $new_data['nama'];
    $alamat = $new_data['alamat'];
    $jk = $new_data['jenis_kelamin'];
    $agama = $new_data['agama'];
    $sekolah = $new_data['sekolah_asal'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
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
                            <a class="nav-link active" href="form-daftar.php">Daftar Baru</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="list-siswa.php">Pendaftar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page content -->
        <div class="container">
            <h3>Formulir Pendaftaran Siswa Baru</h3>

            <form action="proses-edit.php" method="post" class="form-control">
                <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
                <div class="row">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?= $nama; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?= $alamat; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" <?= ($jk == 'Laki-laki' ? 'checked' : ''); ?>>
                            <label class="form-check-label" for="jenis_kelamin">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" <?= ($jk == 'Perempuan' ? 'checked' : ''); ?>>
                            <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-check-label" for="agama">Agama</label>
                        <select class="form-select" aria-label="Agama" name="agama">
                            <option value="Islam" <?= ($agama == 'Islam' ? 'selected' : ''); ?>>Islam</option>
                            <option value="Kristen" <?= ($agama == 'Kristen' ? 'selected' : ''); ?>>Kristen</option>
                            <option value="Hindu" <?= ($agama == 'Hindu' ? 'selected' : ''); ?>>Hindu</option>
                            <option value="Budha" <?= ($agama == 'Budha' ? 'selected' : ''); ?>>Budha</option>
                            <option value="Atheis" <?= ($agama == 'Atheis' ? 'selected' : ''); ?>>Atheis</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Sekolah Asal</label>
                        <input type="text" class="form-control" name="sekolah_asal" placeholder="Sekolah Asal" value="<?= $sekolah; ?>">
                    </div>

                    <div class="mb-3">
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                    </div>
                </div>
            </form>

        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>