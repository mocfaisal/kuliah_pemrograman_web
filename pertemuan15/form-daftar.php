<!--
    Nama : Mochammad Faisal
    NIM  : 121203006
-->

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

            <form action="proses-pendaftaran.php" method="post" class="form-control">
                <div class="row">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
                            <label class="form-check-label" for="jenis_kelamin">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                            <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-check-label" for="agama">Agama</label>
                        <select class="form-select" aria-label="Agama" name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Atheis">Atheis</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Sekolah Asal</label>
                        <input type="text" class="form-control" name="sekolah_asal" placeholder="Sekolah Asal">
                    </div>

                    <div class="mb-3">
                        <input type="submit" name="daftar" value="Daftar" class="btn btn-primary">
                    </div>
                </div>
            </form>

        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>