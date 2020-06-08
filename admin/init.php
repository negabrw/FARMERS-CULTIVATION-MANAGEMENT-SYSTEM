<?php

$pageTitle = "Welcome to Admin.";
$copyright = "Copyright BD HUT Bangladesh.";
$loginName = "admin";

date_default_timezone_set('Asia/Dhaka');
$dateTime = date('Y-m-d h:i:s', time());
$date = date('Y-m-d', time());


define('TIME', time());
define('CURRENT_DATE_TIME', $dateTime);
define('CURRENT_DATE', $date);
define('SHOW_ERROR_LINE', 'Yes'); //when "Yes" then show error line
define('SITE_NAME', 'BD HUTS');
define('DEVELOPER_PASSWORD', 'ha#aba@a,la^95');
define('SUPERADMIN_USER', 1);
define('MODULE_URL', 'route');
define('CURRENT_PAGE_LOC', 'route_pages');
define('CLASS_FILE', 'classes');
define('INCLUDE_FOLDER', 'include_files');
define('NUMERIC_INPUT', 'onkeypress="return isNumberKey(event)"');
define('ROOT_PATH', __DIR__);
define('GET', $_GET);

define("DB_HOST", "localhost");
define("DB_NAME", "agriculture_db");
define("DB_USER", "root");
define("DB_PASS", "");





?>