<?php
$con = mysqli_connect('localhost', 'root', '','agriculture_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
?>