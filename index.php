<?php
ob_start();
error_reporting(0);
include "db_conn.php";
include "inc/header.php";
include "inc/nav.php";
include "inc/body.php";
include "inc/footer.php";
ob_flush();

?>