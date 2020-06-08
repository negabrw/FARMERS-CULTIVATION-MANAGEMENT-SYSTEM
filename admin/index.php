<?php

ob_start();

session_start();
include "init.php";
require_once("db_config/dbconfig.php");
//require_once("db_config/db_config.php");
require_once("db_config/Login.php");
require_once("db_config/checkClass.php");

$login = new Login();

if ($login->isUserLoggedIn() == true) {
    include("auth/home.php");
} else {
    include("views/not_logged_in.php");
}

ob_flush();
?>