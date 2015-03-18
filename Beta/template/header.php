<?php
//require_once("session.php");
require_once("scripts/db.php");
session_start();

//registration
if (isset($_POST['password1'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $name = $_POST['name'];
    ExtraDB::getInstance()->create_user($username, $password, $email, $name);
}

//login
$loginSuccess = false;
if (!isset($_SESSION['username'])) {

//verify user's credentials
    // if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['username'])) {
        $loginSuccess = (ExtraDB::getInstance()->verify_user_credentials($_POST['username'], md5($_POST['password'])));
        if ($loginSuccess == true) {
//echo "user credentials verified";
//die();

            $_SESSION['username'] = $_POST['username'];
            $_SESSION['user_id'] = ExtraDB::getInstance()->get_user_id_by_username($_POST['username']);
            $row = mysqli_fetch_array(ExtraDB::getInstance()->get_user_by_user_id($_SESSION['user_id']));
            $_SESSION['name'] = $row['name'];
//echo "<script> function(); </script>";
//header('Location: editWishList.php');
//exit;
        }
    }
}
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
        <script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
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
                    <a href="about.php" title="Find out more about the Project Contributers"><p class="navbar-text text-center">SFSU Software Engineering Project<br />CSC640/848 Spring 2014 <br />For Demonstration Purposes Only</p></a>
                    <!--                    <a href="sellPage.php" class="btn btn-success navbar-btn" id="signin" role="button">Sell!</a>-->

                    <?php if (!isset($_SESSION['username'])) : ?>

                        <div id = "default">
                            <form action = "<?php $_SERVER['PHP_SELF']; ?>" method = "POST" class = "navbar-form navbar-right" role = "form">
                                <div class = "form-group">
                                    <input type = "text" name = "username" placeholder = "Username" class = "form-control" />
                                </div>
                                <div class = "form-group">
                                    <input type = "password" name = "password" placeholder = "Password" class = "form-control" />
                                </div>
                                <div class = "form-group text-right">
                                    <button type = "submit" name = "login" class = "btn btn-success" id = "signin">Sign in</button>
                                    <a href = "#" class = "btn btn-primary" data-toggle = "modal" data-target = "#regModal">Register</a>
                                </div>
                                <br>

                                <?php if (isset($_POST['username'])) : ?>
                                    <span class="text-danger">invalid username or password! Please try again.</span>
                                <?php endif; ?>





                            </form>
                        </div>
                    <?php else:
                        ?>

                        <div id="signedin" class="navbar-form navbar-right"><!--hidden until sign in is clicked-->
                            <div class="form-group">
                                <!--<img src="images/user_image.jpg" alt="Your Image" class="img-circle" height="75" width="75">-->
                            </div>
                            <div class="form-group">
                                <p class="navbar-text text-center">Welcome <!--<span class='logoFont'>Extra!</span> Contributor:--> <b><?php echo $_SESSION['name'] ?></b> <br />
                                    <!-- <a href="myextra.php" class="btn btn-info btn-sm">my <span class='logoFont'>Extra!</span></a> -->
                                    <a href="usersignout.php" class="btn btn-danger btn-sm" id="signout">Sign Out</a>
                                </p>
                            </div>
                            
                        </div>

                    <?php endif; ?>
                    <!--<a style="position:fixed;right:80px;top:10px;" href="about.php"class="btn btn-link" id="signout">About</a>-->


                    
                    

                </div><!--/.navbar-collapse -->
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <a href="sellPage.php" class="btn btn-success navbar-btn" role="button">Sell on <span class="logoFont">Extra!</span></a>
                    <ul class="nav nav-pills nav-stacked">
                        <?php
                        require_once("scripts/db.php");
                        $cat_res = ExtraDB::getInstance()->get_categories();
                        while ($row = mysqli_fetch_array($cat_res)):
                            $name = $row['name'];
                            $id = $row['id'];
                            ?>
                            <li id="cat<?php echo $id; ?>">
                                <a href="listings.php?id=<?php echo $id; ?>"><?php echo $name; ?></a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>

                <div  id="contentdiv" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

