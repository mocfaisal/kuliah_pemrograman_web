<!--
    Nama : Mochammad Faisal
    NIM  : 121203006
-->

<!DOCTYPE html>

<html>

<head>
    <title>Tutorial Cara Membuat Login dengan PHP & MySQLi</title>
</head>

<body>
    <h3>Form Login - Tutorial Login dengan PHP & MySQLi</h3>

    <!-- Notifikasi -->
    <?php

    if (isset($_GET['pesan'])) {
        $msg = $_GET['pesan'];
        $msg_txt = '';

        if ($msg == 'gagal') {
            $msg_txt = 'Login gagal! username dan password salah!';
        } else if ($msg == 'logout') {
            $msg_txt = 'Anda telah berhasil logout';
        } else if ($msg == 'belum_login') {
            $msg_txt = 'Anda harus login untuk mengakses halaman admin';
        }

        echo $msg_txt;
    }

    ?>

    <br>

    <form action="login.php" method="post">

        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Password"></td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>


    </form>

</body>

</html>