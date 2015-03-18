<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Extra! - Your Online Newspaper Classifieds</title>
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
        <div class="container">

            <h1>Extra!</h1>
            <a href="insert.php"><input type="button" value="Create New Item"></a>
            <table>
                <tr>
                    <th>image</th><th>title</th><th>description</th><th>date</th><th>price</th>
                </tr>

                <?php
                // Create connection
                $con = mysqli_connect('sfsuswe.com', 's14g06', 'Magic6', 'student_s14g06');
// Check connection
                if (mysqli_connect_errno($con)) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $result = mysqli_query($con, "SELECT * FROM `items` where `approved`  order by `premium` desc, `date` desc");

                echo "<tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<td>";
                    //               $im = imagecreatefromstring($row['image']);
                    echo '<a href="data:image/jpeg;base64,'
                    . base64_encode($row['image'])
                    . '"><img src="data:image/jpeg;base64,'
                    . base64_encode($row['image'])
                    . '" height="100" width="100" alt="'
                    . $row['title']
                    . '"/></a>';
                    //              echo '<a href="'$im'"><img src="'$im'" height="100"width="100"alt="'$row['title']'"/></a>';
                    echo "</td><td>";
                    echo $row['title'];
                    echo "</td><td>";
                    echo $row['description'];
                    echo "</td><td>";
                    echo $row['date'];
                    echo "</td><td>";
                    echo "$" . $row['price'];
                    echo "</td></tr>";
                }
                //echo "</table>";

                mysqli_close($con);
                ?>
            </table>
        </div>

 
    </body>
</html>
