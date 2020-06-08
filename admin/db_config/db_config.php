<?php
//include "init.php";
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
?>