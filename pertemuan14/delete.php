<?php

include_once('incl/config.php');

$id = $_GET['id'];

$result = exec_query("Delete From users where id=" . $id);

if ($result) {
    echo "Delete User successfully. Redirecting...";
    header('location: index.php');
} else {
    echo "Delete User failed!";
}

?>