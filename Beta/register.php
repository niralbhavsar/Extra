<?php
  require_once("scripts/db.php");

        $username = $_POST['username'];
        $password = md5($_POST['password1']);
        $email = $_POST['email'];
        $name = $_POST['name'];
        
        ExtraDB::getInstance()->create_user($username, $password, $email, $name);
//        if (ExtraDB::getInstance()->insert_item(4, $title, $description, $condition, $image, $category, NULL, $price)) {
//            header('Location: itemSuccess.php' );
//        }
        
?>