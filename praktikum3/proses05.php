
<?php
if (isset($_POST['Login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "achmatim" && $password == "123") {
        echo "<h2>Login Berhasil</h2>";
    } else {
        echo "<h2>Login Gagal</h2>";
    }
}
?>