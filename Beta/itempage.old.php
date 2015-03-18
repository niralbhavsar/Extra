<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Extra! - Item Page</title>
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
                    <div id="user1">
                        <form class="navbar-form navbar-right" role="form">
                            <div class="form-group">
                                <input type="text" placeholder="Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" class="form-control">
                            </div>

                            <div class="form-group">
                                <a href="#" class="btn btn-success" id="signin">Sign in</a>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#regModal">Register</a>
                            </div>


                        </form>

                        <p class="navbar-text navbar-right">To Sell an item, you must be signed in</p>
                    </div>

                    <div id="user2" class="navbar-form navbar-right row"><!--hidden until sign in is clicked-->
                        <div class="form-group">
                            <img src="images/user_image.jpg" alt="Your Image" class="img-circle" height="75" width="75">
                        </div>
                        <div class="form-group">
                            <p class="navbar-text text-center"><span class='logoFont'>Extra!</span> Contributor: <b>Test_user</b> <br />
                                <a href="#" class="btn btn-danger btn-sm" id="signout">sign out</a>
                            </p>
                        </div>
                        <div class="form-group">
                            <a href="sellPage.php" class="btn btn-success btn-lg" role="button"> SELL! </a>
                        </div>
                    </div>

                </div><!--/.navbar-collapse -->
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li class="active"><a href="index.php">Front Page</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Arts and Entertainment<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="listings.php">All</a></li>
                                <li class="divider"></li>
                                <li><a href="listings.php">Art</a></li>
                                <li><a href="listings.php">Tickets</a></li>
                                <li><a href="listings.php">Instruments</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Books and Media<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="listings.php">All</a></li>
                                <li class="divider"></li>
                                <li><a href="listings.php">DVD's</a></li>
                                <li><a href="listings.php">CD's</a></li>
                                <li><a href="listings.php">Cassettes</a></li>
                                <li><a href="listings.php">Records</a></li>
                                <li><a href="listings.php">Books</a></li>
                                <li><a href="listings.php">Comics</a></li>
                                <li><a href="listings.php">Video Games</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Home and Garden<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="listings.php">All</a></li>
                                <li class="divider"></li>
                                <li><a href="listings.php">Furniture</a></li>
                                <li><a href="listings.php">Linens</a></li>
                                <li><a href="listings.php">Appliances</a></li>
                            </ul></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Fashion<b class="caret"></b></a><ul class="dropdown-menu">
                                <li><a href="listings.php">All</a></li>
                                <li class="divider"></li>
                                <li><a href="listings.php">Clothes</a></li>
                                <li><a href="listings.php">Jewelry</a></li>
                                <li><a href="listings.php">Bags</a></li>
                                <li><a href="listings.php">Accessories</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Sports<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="listings.php">All</a></li>
                                <li class="divider"></li>
                                <li><a href="listings.php">Tickets</a></li>
                                <li><a href="listings.php">Equipment</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Technology<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="listings.php">All</a></li>
                                <li class="divider"></li>
                                <li><a href="listings.php">Computers</a></li>
                                <li><a href="listings.php">Cell Phones</a></li>
                                <li><a href="listings.php">Cameras</a></li>
                                <li><a href="listings.php">Other Electronics</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Travel<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="listings.php">All</a></li>
                                <li class="divider"></li>
                                <li><a href="listings.php">Camping Gear</a></li>
                                <li><a href="listings.php">RV's</a></li>
                                <li><a href="listings.php">Maps</a></li>
                                <li><a href="listings.php">Scuba Gear</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav nav-sidebar">
                        <li class="divider"></li>
                        <li><a href="myextra.php">My  <span class='logoFont'>Extra!</span></a></li>
                        <li><a href="editorials.php">Editorials (Forum)</a></li>
                    </ul>
                </div>
                <!--
                |
                |
                CONTENT GOES HERE!
                |
                |
                -->
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h1 class="page-header">Beautiful Painting</h1>
                    <!--
                    |
                    |
                    CONTENT GOES HERE!
                    |
                    |
                    -->
        <style>
            img {max-height: 300px;  max-width: 300px; height:auto; width: auto;}
        </style>
                    
                    <div class="row">
                        <div class="col-md-4"><img src="images/painting.jpg" class="img-rounded" style="max-height: 400px;  max-width: 400px; height:auto; width: auto;" /></div>            
                        <div class="col-md-8">
                            <h3>Description:</h3>
                            <p>A still life painting of fruits and stuff. </p> <br />
                            <h4>Condition:</h4>
                            <p>New</p>
                            <a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target="#sellModal" role="button">$1000000<br>Buy Now</a>
                        </div>
                    </div>
                    <br /><br />
                    <h2>Similar Items...</h2>
                    
                    <div class="row">
                        <div class="col-md-4"><a href="itempage.php"><img src="images/macbook.jpg" class="img-rounded thumbnail" /><br />Macbook Pro</a></div>
                        <div class="col-md-4"><a href="itempage.php"><img src="images/bmwmotorcycle.jpg" class="img-rounded thumbnail" /><br />BMW Motorcycle</a></div>
                        <div class="col-md-4"><a href="itempage.php"><img src="images/datastructs.jpg" class="img-rounded thumbnail" /><br />Data Structures Book</a></div>
                    </div>
                    <!-- CONTENT END -->



                </div>
            </div>
        </div>

        <!-- Register Modal -->
        <!-- Modal -->
        <div   class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="regLabel" aria-hidden="true">
            <div  class="modal-dialog">
                <div  class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"  id="regLabel">Register for <span class='logoFont'>Extra!</span></h4>
                    </div>
                    <div  class="modal-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="name" class="col-sm-3">Your Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" placeholder="Your First and Last Names">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username" class="col-sm-3">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="username" placeholder="A public Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-3">Email address</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-sm-3">Phone Number</label>
                                <div class="col-sm-9">
                                    <input type="tel" class="form-control" id="phone" placeholder="Enter phone number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password1" class="col-sm-3">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password1" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password2" class="col-sm-3"> Confirm Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password2" placeholder="Password">
                                </div>
                            </div>
                            <div  class="form-group">
                                <label for="contact" class="col-sm-3">Preferred Contact Method</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <option>Email</option>
                                        <option>Phone</option>
                                        <option>SMS Text Message</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="register">Register</button>
                    </div>
                </div>
            </div>
        </div>




        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script>
            $("#signin").click(function() {
                $("#user1").hide();
                $("#user2").show();
            });
            $("#register").click(function() {
                $("#user1").hide();
                $("#user2").show();
            });
            $("#signout").click(function() {
                $("#user2").hide();
                $("#user1").show();
            });
        </script>
    </body>
</html>
