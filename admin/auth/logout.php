<?php
ob_start();
	session_start();
		
		$_SESSION['admin_id ']	    = "";
		$_SESSION['user_name']	    = "";
		$_SESSION['password'] 		= "";
		session_destroy();
	header("Location: index.php");
ob_flush();

?>
