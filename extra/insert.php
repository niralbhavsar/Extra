<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Extra! - insert a new item</title>
        <meta name="description" content ="Extra! is your best source to buy and sell used goods online. 
              Online Classifieds brought to you from your favorite newspaper. 
              SFSU Software Engineering Project Spring 2014 for demonstration purposes only.
              ">
        <link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        
        <style>
            h1{font-family: 'Special Elite', cursive;
               font-size: 40px;
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
        <link rel="shortcut icon" href="images/favicon3.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon3.ico" type="image/x-icon">
    </head>
    <body>
        <h1>Extra!</h1>
        <form action="success.php" method="post" enctype="multipart/form-data">
            <label for="title">Title:</label><br /> 
            <input type="text" name="title"><br />
            
            <label for="desc">Description:</label><br /> 
            <textarea rows="4" cols="50" name="desc"></textarea><br />
            
            <label for="price">Price:</label><br /> 
            <input type="text" name="price"><br />
            
            <label for="image">Image:</label>
            <input type="file" name="image" id="image"><br>
            
            <input type="submit" value="submit"><br />

        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
