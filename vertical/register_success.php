<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
<!--        <meta http-equiv="refresh" content="1; url=index.php" />-->
        <title>Extra! - User created</title>
        <meta name="description" content ="Extra! is your best source to buy and sell used goods online. 
              Online Classifieds brought to you from your favorite newspaper. 
              SFSU Software Engineering Project Spring 2014 for demonstration purposes only.
              ">
        <link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
        
        <style>
            h1{font-family: 'Special Elite', cursive;
               font-size: 40px;
            }
            h3{font-family: 'Special Elite', cursive;
               font-size: 20px;
            }
            table{font-family: 'News Cycle', sans-serif;
                  background-color:lightgray ;
                  border-collapse:collapse;
                  width:90%;
                  margin: auto;
            }
            table,th, td{border: 1px solid black; padding:5px;}
            body {background-color:#3e8ee0;}
            
        </style>
        <link rel="shortcut icon" href="../images/favicon3.ico" type="image/x-icon">
        <link rel="icon" href="../images/favicon3.ico" type="image/x-icon">
    </head>
    <body>
        <h1>Extra!</h1>
        <?php

// Create connection

                $con = mysqli_connect('sfsuswe.com', 's14g06', 'Magic6', 'student_s14g06');
// Check connection
                if (mysqli_connect_errno($con)) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                
                $sql = "INSERT INTO users (username, password, email, name) VALUES('$_POST[username]','$_POST[password]','$_POST[email]','$_POST[name]')";

                if (!mysqli_query($con, $sql)) {
                    echo "<h3>FAILURE!</h3>";
                    die('Error: ' . mysqli_error($con));
                }
                else{
                    echo "<h3>SUCCESS</h3>";
                }

                mysqli_close($con);
//            }
//        }
        ?>
        <a href="index.php" class="btn btn-default btn-lg">home</a>
    </body>
</html>
