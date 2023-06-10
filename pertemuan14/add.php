<!--
    Nama : Mochammad Faisal
    NIM  : 121203006
-->

<?php

include_once('incl/config.php');

?>

<!DOCTYPE html>

<html>

<head>
    <title>Add Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <a href="index.php" class="btn btn-primary">Home</a>

    <form action="add.php" method="post" name="form1" class="form-control">
        <div class="row">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="email">
            </div>

            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="text" class="form-control" name="mobile" placeholder="mobile">
            </div>

            <div class="mb-3">
                <input type="submit" name="submit" value="Add" class="btn btn-primary">
            </div>
        </div>
    </form>

</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $result = exec_query("Insert into users (name, email, mobile) values ('$name', '$email', '$mobile') ");

    if ($result) {
        echo "User added successfully. <a href='index.php'>View Users</a>";
    } else {
        echo "Add User failed!";
    }
}


?>