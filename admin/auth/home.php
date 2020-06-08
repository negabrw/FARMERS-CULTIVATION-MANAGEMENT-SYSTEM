<?php
//echo $_SESSION['user_name'];
date_default_timezone_set('Asia/Dhaka');
//weekly
$currentDateTime = date("Y-m-d H:i:s");
$currentDate = date("Y-m-d");
$yesterday = date('Y-m-d', strtotime("-1 day"));
$tomorrow = date('Y-m-d H:i:s', strtotime("+1 day"));
$weekly = date('Y-m-d', strtotime("-7 day"));

//error_reporting(0);
ob_start();
$uType = $_SESSION['user_type'];
$uId = $_SESSION['admin_id'];
$uName = $_SESSION['user_name'];



include "inc/header.php";
include "inc/top_nav.php";
include "inc/side_nav.php";
include "inc/content.php";
include "inc/footer.php";
ob_flush();
?>