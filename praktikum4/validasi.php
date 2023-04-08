<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quiz</title>
</head>

<body>
    <form action="" method="post" name="input">
        <h2>PHP Form Validation</h2>

        <span style="color:red;">* Required Field</span><br>

        Name : <input type="text" name="name" required><span style="color:red;"> *</span><br>
        E-mail : <input type="email" name="email" required><span style="color:red;"> *</span><br>
        Website : <input type="text" name="website"><br>
        Comment :
        <textarea name="comment" cols="40" rows="5"></textarea>
        <br>
        Gender :
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Male"> Male <br>
        <input type="submit" name="Submit" value="Submit">
    </form>
</body>

</html>

<?php

if (isset($_POST['Submit'])) {
    if (isset($_POST['name'])) {
        echo 'Name : ' . $_POST['name'] . '<br>';
    }
    if (isset($_POST['email'])) {
        echo 'Email : ' . $_POST['email'] . '<br>';
    }
    if (isset($_POST['website'])) {
        echo 'Website : ' . $_POST['website'] . '<br>';
    }
    if (isset($_POST['comment'])) {
        echo 'Comment : ' . nl2br($_POST['comment']) . '<br>';
    }
    if (isset($_POST['gender'])) {
        echo 'Gender : ' . $_POST['gender'] . '<br>';
    }
}
