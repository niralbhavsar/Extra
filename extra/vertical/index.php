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
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">

        <style>
            h1{font-family: 'Special Elite', cursive;
               font-size: 40px;
            }
            table{font-family: 'News Cycle', sans-serif;
                  background-color:lightgray ;
                  border-collapse:collapse;
                  width:80%;
                  margin: auto;
            }
            body {background-color:#3e8ee0;}
            img {max-height: 150px;  max-width: 150px; height:auto; width: auto;}
        </style>
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
        <div class="table-responsive">

            <h1>Extra!</h1>
            <a href="insert.php"><input type="button" value="Create New Item" class="btn btn-success btn-lg"></a>
            <a href="register.php"><input type="button" value="Create New User" class="btn btn-default btn-lg"></a>
            <a href="login.html"><input type="button" value="Login" class="btn btn-success btn-lg"></a>
            <br /><br />
            <table class="table table-hover">
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
                    . '" class="img-rounded" alt="'
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

        <p>Hello!!!!</p>
    </body>
</html>
