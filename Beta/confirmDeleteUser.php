<?php
require_once("scripts/db.php");
$logonSuccess = false;

// verify user's credentials
session_start();
if (!isset($_SESSION['username'])) {
//    $pass = md5($_POST['password']);
//    $logonSuccess = (ExtraDB::getInstance()->verify_mod_credentials($_POST['username'], $pass));
//    if ($logonSuccess == true) {
//        session_start();
//        $_SESSION['username'] = $_POST['username'];
//        //echo "<script> function(); </script>";
//        //header('Location: editWishList.php');
////        exit;
//    } else {
//        header('Location: moderator.php');
//    }
//} else {
    header('Location: moderator.php');
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
                    <a class="navbar-brand" href="moderator2.php">Extra!</a>
                </div>
                <div class="navbar-collapse collapse">
                    <p class="navbar-text text-center">SFSU Software Engineering Project<br />CSC640/848 Spring 2014 <br />For Demonstration Purposes Only</p>
                    <!--                    <div class="navbar-right">
                                            <h4 class="navbar-text">
                                                Signed in as: <?php echo $_SESSION['username']; ?>
                                            </h4>
                                        </div>-->
                    <div class="form-group navbar-right">
                        <h4 class="navbar-text text-center">Welcome <span class='logoFont'>Extra!</span> Moderator: <?php echo $_SESSION['username']; ?> <br>
                            <a href="modsignout.php" class="btn btn-danger btn-sm" id="signout">Sign Out</a>
                        </h4>
                    </div>
                    <!--                    <a href="sellPage.php" class="btn btn-success navbar-btn" id="signin" role="button">Sell!</a>-->

                    <!--                    <div id="user1">
                                            <form class="navbar-form navbar-right" role="form">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Email" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" placeholder="Password" class="form-control">
                                                </div>
                                                <br>
                                                <div class="form-group text-right">
                                                    <a href="#" class="btn btn-success" id="signin">Sign in</a>
                                                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#regModal">Register</a>
                                                </div>
                    
                    
                                            </form>
                                        </div>
                    
                                        <div id="user2" class="navbar-form navbar-right">hidden until sign in is clicked
                                            <div class="form-group">
                                                <img src="images/user_image.jpg" alt="Your Image" class="img-circle" height="75" width="75">
                                            </div>
                                            <div class="form-group">
                                                <p class="navbar-text text-center">Welcome <span class='logoFont'>Extra!</span> Contributor: <b>Test_user</b> <br />
                                                    <a href="myextra.php" class="btn btn-info btn-sm">my <span class='logoFont'>Extra!</span></a>
                                                    <a href="#" class="btn btn-danger btn-sm" id="signout">Sign Out</a>
                                                </p>
                                            </div>
                                        </div>-->

                </div><!--/.navbar-collapse -->
            </div>
        </div>
        <div class="container-fluid">
            <div class="main">
                <div class="row">
                    <h3 class="page-header">Confirm User Deletion</h3>

                    <div class="col-sm-6">
                        <?php
                        require_once("scripts/db.php");
//        $result = (ExtraDB::getInstance()->get_user_by_user_id($_POST['user_id']));
//        $row = mysqli_fetch_array($result);
//        $image = base64_encode($row['image']);
//        $title = $row['title'];
//        $description = $row['description'];
//        $date = $row['date'];
//        $price = $row['price'];
//        $item_id = $row['item_id'];
//        $seller_id = $row['seller_id'];
//        $category = $row['category'];
//        mysqli_free_result($result);
                        $user_id = $_POST['userid'];
                        $result = (ExtraDB::getInstance()->get_user_by_user_id($user_id));
                        $row = mysqli_fetch_array($result);
                        $username = $row['username'];
                        $name = $row['name'];
                        $email = $row['email'];
                        mysqli_free_result($result);
                        ?>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tr>
                                    <td><b>Username:</b></td><td><?php echo $username; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Name:</b></td><td><?php echo $name; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Email:</b></td><td><?php echo $email; ?></td>
                                </tr>

                            </table>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <form name="deleteUser" action="deleteUser.php" method="POST">
                            <input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id; ?>"/>

                            <textarea rows="6" cols="60" class="form-control" id="message" name="message" placeholder="Why is this user being deleted?"></textarea>
                            <br>
                            <input type="submit" id="Delete" name="Delete" class="btn btn-lg btn-danger" value="Delete User">
                        </form>
                    </div>
                </div>
                <h2>Recent Items by this user...</h2>




                <div class = "row">
                    <?php
                    $result2 = (ExtraDB::getInstance()->get_items_by_user_id($user_id));
                    $i = 0;
                    while ($row2 = mysqli_fetch_array($result2)):
                        if (++$i > 4) {
                            break;
                        }
                        $title2 = $row2['title'];
                        $image2 = base64_encode($row2['image']);
                        $price2 = $row2['price'];
                        $item_id2 = $row2['item_id'];
                        ?>
                        <div class = "col-xs-6 col-md-3">
                            <div class="thumbnail" height="100" width="100">
                                <!--<form action="itempage.php" method="POST">-->
                                <!--<a href="javascript:;" onclick="parentNode.submit();" class="thumbnail" height="100" width="100">-->
                                <img src="data:image/jpeg;base64,<?php echo $image2; ?>" class="img-rounded img_thumb" height="200" width="200" alt="<?php echo $title2; ?>"/>
                                <!--</a>-->
                                <!--<input type="hidden" name="item_id" value="<?php echo $item_id2; ?>" />-->
                                <!--</form>-->

                                <div class="caption">
                                    <?php
                                    echo $title2;
                                    echo " $";
                                    echo $price2;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    ?>
                </div>


            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
