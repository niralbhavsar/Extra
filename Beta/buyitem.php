<?php

require_once("scripts/db.php");
session_start();


//buyer info
$result2 = (ExtraDB::getInstance()->get_user_by_user_id($_SESSION['user_id']));
$row2 = \mysqli_fetch_array($result2);
$username2 = $row2['username'];
$email2 = $row2['email'];
mysqli_free_result($result2);

$result = (ExtraDB::getInstance()->get_item_by_item_id($_POST['item_id']));
$row = \mysqli_fetch_array($result);
$image = base64_encode($row['image']);
$title = $row['title'];
$description = $row['description'];
$date = $row['date'];
$price = $row['price'];
$item_id = $row['item_id'];
$seller_id = $row['seller_id'];
$category = $row['category'];
mysqli_free_result($result);

//seller info
$result1 = (ExtraDB::getInstance()->get_user_by_user_id($seller_id));
$row1 = \mysqli_fetch_array($result1);
$username = $row1['username'];
$name = $row1['name'];
$email = $row1['email'];
//$email = "aleck7298@gmail.com";
mysqli_free_result($result1);

$place = $_POST['place'];
$message = $_POST['message'];
$price_buyer = $_POST['price'];


$to = $email;
$subject = "Extra! - I would like to buy \"" . $title . "\".";
$body = "
<html>
<head>
<title>Extra! - I would like to buy \"" . $title . "\"..</title>
    <link href='http://sfsuswe.com/~s14g06/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
        <link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
        <link href='http://sfsuswe.com/~s14g06/styles.css' rel='stylesheet' type='text/css'>
</head>
<body>
<h1><span class='logoFont'>Extra!</span></h1>
<p>Hello, " . $name . ",<br>I am an Extra! user, and my username is ".$username2.".<br>"
        . "I am interested in your item \""
        . $title . "\"<br>I am willing to pay $ ".$price_buyer." for it. <br>"
        . "Here is my preferred meeting place: ".$place."<br>"
        . "I have included the following message:<br>
            <p>" . $message . "</p>
            
<p>Here is the item I am interested in:
<div class='table-responsive'>
            <table class='table table-hover'>
                
                <tr>
                    <td><b>Title:</b></td><td>" . $title . "</td>
                </tr>
                <tr>
                    <td><b>Price:</b></td><td>$" . $price . "</td>
                </tr>
                <tr>
                    <td><b>Category:</b></td><td>" . $category . "</td>
                </tr>
                <tr>
                    <td><b>Date:</b></td><td>" . $date . "</td>
                </tr>
                <td><b>Image:</b></td>
                <td>
                    
                    <img src='sfsuswe.com/~s14g06/Beta/scripts/image.php?id=" . $item_id . "&amp;size=300' alt='" . $title . "' />                    
                    
                </td>
                <tr>
                    <td><b>Description:</b></td><td>" . $description ."</td>
                </tr>
            </table>
        </div>
        <p>Thank you for using Extra!</p>
</body>
</html>
";

//"Hello, " . $name . ",\nWe are sorry to inform you that your recent posting \""
//        . $title . "\" Was not approved.\nYour payment was not charged.\nHere is the message the moderator sent about your item:\n\n\t"
//        . $message . "\n\n"
//        . "This is the item that was not approved:\n\n"
//        . $title . "\n"
//        . "Thank you for using Extra!";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: " . $email2 . "\r\n" .
        "Reply-To: " . $email2 . "\r\n" .
        "X-Mailer: PHP/" . phpversion();


mail($to, $subject, $body, $headers);

//Neet to link back to the itempage
//header('Location: itempage.php');

echo "<script>alert(\"Your Message was sent to the seller.\")</script>";
$redirect = "Location: itempage.php?item_id=".$item_id."";
header('Location: itempage.php?item_id='.urlencode($item_id));
?>