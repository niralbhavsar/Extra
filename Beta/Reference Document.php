
/* 
 * MAIL FUNCTION
 * This a working snippet using the php mail() function.
 */

<?php
$to      = 's14g06list@sfsuswe.com';
$subject = 'Test Subject';
$message = 'hello world';
$headers = 'From: nbhavs@sfsuswe.com' . "\r\n" .
    'Reply-To: nbhavs@sfsuswe.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
