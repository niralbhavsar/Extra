<?php
  require_once("scripts/db.php");
  session_start();

  //if(isset($_POST['premium']) && $_POST['premium'] == '1') 
      //$premium = $_POST['premium'];
      
  $seller_id = $_SESSION['user_id'];
        $title = $_POST['post_title'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $condition = $_POST['condition'];
        $premium = $_POST['premium'];
        $file = ($_FILES['image']['tmp_name']);
        $image = ExtraDB::getInstance()->real_escape_string(file_get_contents($file));
//        $photo = base64_encode($_FILES['image']['tmp_name']);
        $category = $_POST['category'];
        //$sub_category = $_POST['sub_category'];
        ExtraDB::getInstance()->insert_item($seller_id, $title, $description, $condition, $image, $category, NULL, $price, $premium);
//        if (ExtraDB::getInstance()->insert_item(4, $title, $description, $condition, $image, $category, NULL, $price)) {
//            header('Location: itemSuccess.php' );
//        }
        
        
?>
