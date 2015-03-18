<?php
  require_once("scripts/db.php");
$result1 = (ExtraDB::getInstance()->get_user_by_user_id($_POST['seller_id']));
$row1 = \mysqli_fetch_array($result1);
$username = $row1['username'];
$name = $row1['name'];
$email = $row1['email'];
mysqli_free_result($result1);

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
$premium = $row['premium'];

mysqli_free_result($result);

$message = $_POST['message'];


$to = $email;
$subject = "Extra! - \"" . $title . "\" was approved for selling!";
$body = "
<html>
<head>
<title>Extra! - \"" . $title . "\" was approved for selling!</title>
    <link href='sfsuswe.com/~s14g06/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
        <link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
        <link href='sfsuswe.com/~s14g06/styles.css' rel='stylesheet' type='text/css'>
</head>
<body>
<small>This is an automated message. do not reply</small>
<h1><span class='logoFont'>Extra!</span></h1>
<p>Hello, " . $name . ",\nCONGRATULATIONS! your recent submission, \""
. $title . "\" Was approved for selling."; 
if($premium == 1) {
    $body = $body .  "<br>Your payment for posting has been charged $1.";
}
$body = $body . "<br>Here is the message the moderator sent about your item:
            </p>
            <div class='panel panel-default'>
  <div class='panel-body'>
    " . $message . "
  </div>
</div>
<p>Here is the item that was approved
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

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: extra_mod@sfsuswe.com' . "\r\n" .
        'Reply-To: extra_mod@sfsuswe.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();


mail($to, $subject, $body, $headers);

ExtraDB::getInstance()->approve_item($_POST['item_id']);
header('Location: moderator2.php');

?>