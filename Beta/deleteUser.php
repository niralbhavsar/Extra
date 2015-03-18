<?php

require_once("scripts/db.php");
$result1 = (ExtraDB::getInstance()->get_user_by_user_id($_POST['user_id']));
$row1 = \mysqli_fetch_array($result1);
$username = $row1['username'];
$name = $row1['name'];
$email = $row1['email'];
mysqli_free_result($result1);



$message = $_POST['message'];


$to = $email;
$subject = "Extra! - Your account has been deleted.";
$body = "
<html>
<head>
<title>Extra! - Your account has been deleted.</title>
    <link href='sfsuswe.com/~s14g06/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
        <link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
        <link href='sfsuswe.com/~s14g06/styles.css' rel='stylesheet' type='text/css'>
</head>
<body>
<small>This is an automated message. do not reply</small>
<h1><span class='logoFont'>Extra!</span></h1>

<p>Hello, " . $name . ",\nWe are sorry to inform you that your account is no longer Active.<br>
    You will no longer be able to log in to your account, and your items have been removed.<br>
    Here is the message the moderator sent:<br><br>
            </p>
            <div class='panel panel-default'>
  <div class='panel-body'>
    " . $message . "
  </div>
</div>

        <p>Thank you for using Extra!</p>
        
</body>
</html>
";


$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: extra_mod@sfsuswe.com' . "\r\n" .
        'Reply-To: extra_mod@sfsuswe.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();


mail($to, $subject, $body, $headers);

ExtraDB::getInstance()->delete_user($_POST['user_id']);
header('Location: moderator2.php');
?>