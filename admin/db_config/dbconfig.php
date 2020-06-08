<?php

$DB_host = DB_HOST;
$DB_user = DB_USER;
$DB_pass = DB_PASS;
$DB_name = DB_NAME;

try {
    $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}", $DB_user, $DB_pass);
    $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $e->getMessage();
}

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
