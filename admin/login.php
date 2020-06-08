<?php

//phpinfo();
/*
session_start();
require_once 'db/dbconfig.php';
require_once 'db/db_config.php';

if(isset($_POST['login']))
{
	$uname = $_POST['username'];
	$upass = $_POST['password'];
	$pass = md5($upass);		
	if($user->login($uname,$pass))
	{
		
			$user->redirect('home.php');
		
	}
	else
	{
		$error = "User Name or Password did not match !";
	}	
}
*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $pageTitle; ?></title>

    <!-- Bootstrap -->
    <link href="login_css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="login_css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="login_css/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="login_css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
   <!-- <link href="build/css/custom.min.css" rel="stylesheet">-->
     <link href="login_css/custom.css" rel="stylesheet">
     <script src="login_jquery/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){$(".hideit").click(function(){$(this).hide(600);});});
            var SITE_URL='<?=URL?>';
        </script>
  </head>

  <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <div class="separator">
                        <h1><img src="images/skydive_logo.png" alt="Logo"/></h1>
                    </div>
                    <section class="login_content">
                        <form action="" method="POST">
                            <h1>Login Form</h1>
                            <?php //show_msg();?>
                            <div>
                                <!--<input type="text" class="form-control" placeholder="Username" required="" />-->
                                <input class="form-control" required autofocus placeholder="User name" name="username" type="text">
                            </div>
                            <div>
                                <!--                                <input type="password" class="form-control" placeholder="Password" required="" />-->
                                <input class="form-control" name="password" placeholder="Password" required type="password" > 
                            </div>
                            <div>
                                <input type="submit" name="login" value="Log In" class="btn btn-default submit">
                            </div>
                            <div class="clearfix"></div>

                        </form>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>