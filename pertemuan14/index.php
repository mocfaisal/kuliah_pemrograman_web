<!--
    Nama : Mochammad Faisal
    NIM  : 121203006
-->

<?php

include_once('incl/config.php');

$result = exec_query("Select * From users order by id desc");
$i =1;

?>

<!DOCTYPE html>

<html>

<head>
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <a href="add.php" class="btn btn-primary">Add New User</a>

    <div class="table-resposive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($new_data = mysqli_fetch_array($result)) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $new_data['name']; ?></td>
                        <td><?= $new_data['mobile']; ?></td>
                        <td><?= $new_data['email']; ?></td>
                        <td><a href="edit.php?id=<?= $new_data['id']; ?>" class="btn btn-primary">Edit</a> | <a href="delete.php?id=<?= $new_data['id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php $i++; endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>