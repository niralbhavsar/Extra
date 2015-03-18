<?php
require_once("scripts/db.php");
//$logonSuccess = false;
//
//// verify user's credentials
//if ($_SERVER['REQUEST_METHOD'] == "POST") {
//    $logonSuccess = (ExtraDB::getInstance()->verify_mod_credentials($_POST['email'], $_POST['password']));
//    if ($logonSuccess == true) {
//        session_start();
//        $_SESSION['user'] = $_POST['user'];
//        //echo "<script> function(); </script>";
//        //header('Location: editWishList.php');
//        exit;
//    }
//}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Extra!</title>
        <meta name="description" content ="Extra! is your best source to buy and sell used goods online. 
              Online Classifieds brought to you from your favorite newspaper. 
              SFSU Software Engineering Project Spring 2014 for demonstration purposes only.
              ">


        <!-- Bootstrap -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- more styles -->
        <link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
        <link href="../styles.css" rel="stylesheet" type="text/css">

        <!-- FAVICON -->
        <link rel="shortcut icon" href="../images/favicon3.ico" type="image/x-icon">
        <link rel="icon" href="../images/favicon3.ico" type="image/x-icon">

        <!-- GOOGLE ANALYTICS--> 
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-49861612-1', 'sfsuswe.com');
            ga('send', 'pageview');
        </script>
    </head>

    <body>
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Extra!</a>
                </div>
                <div class="navbar-collapse collapse">
                    <p class="navbar-text text-center">SFSU Software Engineering Project<br />CSC640/848 Spring 2014 <br />For Demonstration Purposes Only</p>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="main">
                <h1 class="page-header">Moderator Page</h1>
                <div class="row">
                    <div class="container col-sm-6 col-sm-offset-3">

                        <form class="form-signin" role="form" action="moderator2.php" method="POST">
                            <h2 class="form-signin-heading">Moderator sign in</h2>
                            <input name="username" type="text" class="form-control" placeholder="Username" required autofocus>
                            <br>
                            <input name="password" type="password" class="form-control" placeholder="Password" required>
                            <!--                            <label class="checkbox">
                                                            <input type="checkbox" value="remember-me"> Remember me
                                                        </label>-->
                            <br>
                            <input type="submit" name="signin" class="btn btn-lg btn-primary btn-block" value="Sign in">
                            <!--<a href="moderator2.php" class="btn btn-lg btn-primary btn-block" role="button">Sign in</a>-->
                        </form>

                    </div> <!-- /container -->
                </div>

            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../bootstrap/js/bootstrap.min.js"></script>

        <script>
            //place your own scripts here
        </script>
    </body>
</html>