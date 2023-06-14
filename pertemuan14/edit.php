<!--
    Nama : Mochammad Faisal
    NIM  : 121203006
-->

<?php

include_once('incl/config.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $result = exec_query("Update users set name = '$name', email='$email', mobile='$mobile' where id='$id' ");

    if ($result) {
        echo "Update User successfully. Redirecting...";
        header('location: index.php');
    } else {
        echo "Update User failed!";
    }
}

$result = exec_query("Select * From users where id=" . $_GET['id']);

while ($new_data = mysqli_fetch_array($result)) {
    $id = $new_data['id'];
    $name = $new_data['name'];
    $email = $new_data['email'];
    $mobile = $new_data['mobile'];
}

?>

<!DOCTYPE html>

<html>

<head>
    <title>Edit Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <a href="index.php" class="btn btn-primary">Home</a>
    <br>
    <br>

    <form action="edit.php" method="post" name="form1" class="form-control">
        <input type="hidden" name="id" value="<?= $_GET['id']; ?>">

        <div class="row">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name" value="<?= $name; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="email" value="<?= $email; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="text" class="form-control" name="mobile" placeholder="mobile" value="<?= $mobile; ?>">
            </div>

            <div class="mb-3">
                <input type="submit" name="submit" value="Update" class="btn btn-primary">
            </div>
        </div>
    </form>

</body>

</html>