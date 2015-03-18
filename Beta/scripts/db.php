<?php

/*
 * Use this class for accessing the database
 * THIS LINE IS REQUIRED: require_once("scripts/db.php");
 * see the wishlist application for usage
 * ex: ExtraDB::getInstance()->function_name(parameters);
 * 
 * 
 * HERE ARE THE FUNCTIONS THAT YOU CAN USE
 * 
 * to get the user id of a user based on username
 * get_user_id_by_username($username)
 * 
 * to get the user id of a user based on email
 * get_user_id_by_email($email)
 * 
 * returns all items by a certain seller
 * get_items_by_user_id($seller_id)
 * 
 * create a new user account
 * create_user($username, $password, $email, $name)
 * 
 * used for user login
 * verify_user_credentials($username, $password)
 * 
 * seller_id, title, description, condition, image, category, sub_category, price, date, approved
 * insert_item($sellerID, $title, $description, $condition, $image, $category, $sub_category, $price, $premium)
 * 
 * returns all items by category
 * get_items_by_category($category)
 * 
 * returns all items by subcategory
 * get_items_by_subcategory($subcategory)
 * 
 * returns all unapproved items
 * get_unapproved_items()
 * 
 * get all information for a single item
 * get_item_by_item_id($itemID)
 * 
 * delete an item
 * delete_item($itemID)
 * 
 * used for moderator login
 * verify_mod_credentials($username, $password)
 * 
 * returns all contitions
 * get_conditions()
 * 
 * returns all categories
 * get_categories()
 * 
 * returns all sub categories of a given parent category
 * get_sub_categories($parent_id)
 * 
 * returns all approved items
 * get_approved_items()
 * 
 * approves an item
 * approve_item($item_id)
 * 
 * unapproves an item
 * unapprove_item($item_id)
 * 
 * suspends a user
 * suspend_user($user_id)
 * 
 * unsuspends a user
 * unsuspend_user($user_id)
 * 
 * get all user information
 * get_user_by_user_id($user_id)
 * 
 * get category id of a given category
 * get_cat_id_by_name($name)
 * 
 * TO BE ADDED
 * 
 * 
 */

class ExtraDB extends mysqli {

    // single instance of self shared among all instances
    private static $instance = null;
    // db connection config vars
    private $user = "s14g06";
    private $pass = "Magic6";
    private $dbName = "student_s14g06";
    private $dbHost = "sfsuswe.com"; 
    private $con = null;

    //This method must be static, and must return an instance of the object if the object
    //does not already exist.
    public static function getInstance() {
        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    // The clone and wakeup methods prevents external instantiation of copies of the Singleton class,
    // thus eliminating the possibility of duplicate objects.
    public function __clone() {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }

    public function __wakeup() {
        trigger_error('Deserializing is not allowed.', E_USER_ERROR);
    }

    // private constructor
    private function __construct() {
        parent::__construct($this->dbHost, $this->user, $this->pass, $this->dbName);
        if (mysqli_connect_error()) {
            exit('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
        parent::set_charset('utf-8');
    }

    //to get the user id of a user based on username
    public function get_user_id_by_username($username) {
        $username = $this->real_escape_string($username);
        $query = $this->query("SELECT user_id FROM users WHERE username = '"
                . $username . "'");

        if ($query->num_rows > 0) {
            $row = $query->fetch_row();
            return $row[0];
        } else
            return null;
    }

    //to get the user id of a user based on email
    public function get_user_id_by_email($email) {
        $email = $this->real_escape_string($email);
        $query = $this->query("SELECT user_id FROM users WHERE email = '"
                . $email . "'");

        if ($query->num_rows > 0) {
            $row = $query->fetch_row();
            return $row[0];
        } else
            return null;
    }

    //returns all items by a certain seller
    public function get_items_by_user_id($seller_id) {
        $seller_id = $this->real_escape_string($seller_id);
        return $this->query("SELECT * FROM `items` WHERE `seller_id`='" . $seller_id . "' order by `date` desc");
    }

    //returns all items by category
    public function get_items_by_category($category) {
        $category = $this->real_escape_string($category);
        return $this->query("SELECT * FROM `items` WHERE `category`='" . $category . "' AND `approved` order by `premium` desc, `date` desc");
//                        . " SELECT * "
//                        . " FROM items WHERE category= " . $category
//                        . " AND approved order by premium desc, date desc");
    }


    //returns all items by subcategory
    public function get_items_by_subcategory($subcategory) {
        $subcategory = $this->real_escape_string($subcategory);
        return $this->query(""
                        . "SELECT * "
                        . "FROM `items` WHERE `sub_category`='" . $subcategory
                        . "' AND `approved` order by `premium` desc, `date` desc");
    }

    //returns all unapproved items
    public function get_unapproved_items() {
        return $this->query("SELECT * FROM `items` where NOT `approved`  order by `premium` desc, `date`");
    }

    //create a new user account
    public function create_user($username, $password, $email, $name) {
        $username = $this->real_escape_string($username);
        $password = $this->real_escape_string($password);
        $email = $this->real_escape_string($email);
        $name = $this->real_escape_string($name);
        $query = "INSERT INTO `users` (`username`, `password`, `email`, `name`) VALUES ('" . $username
                . "', '" . $password
                . "', '" . $email
                . "', '" . $name . "')";
        return $this->query($query);
    }

    //used for user login
    public function verify_user_credentials($username, $password) {
        $username = $this->real_escape_string($username);
        $password = $this->real_escape_string($password);
        $result = $this->query("SELECT 1 FROM `users` WHERE `username` = '"
                . $username . "' AND `password` = '" . $password . "'");
        return $result->data_seek(0);
    }

    //seller_id, title, description, condition, image, category, sub_category, price, date, approved
    public function insert_item($sellerID, $title, $description, $condition, $image, $category, $sub_category, $price, $premium) {
        $sellerID = $this->real_escape_string($sellerID);
        $title = $this->real_escape_string($title);
        $description = $this->real_escape_string($description);
        $condition = $this->real_escape_string($condition);
        //image escape string done in the sellItem.php
        //$image = $this->real_escape_string(file_get_contents($image));
        $category = $this->real_escape_string($category);
        $price = $this->real_escape_string($price);
        $premium = $this->real_escape_string($premium);
        
        $query = "INSERT INTO items (`seller_id`, `title`, `description`, `condition`, `image`, `category`, `price`, `premium`, `approved`) "
                . " VALUES('" . $sellerID
                . "' , '" . $title
                . "' , '" . $description
                . "' , '" . $condition
                . "' , '" . $image
                . "' , '" . $category
                //still need to get sub_category through AJAX
//                . "' , '" . $sub_category
                . "' , '" . $price
                . "' , '" . $premium
                . "' , '0')";

        //for error testing. keeping if needed later
        if ($this->query($query)) {
            $item_id = $this->insert_id;
//            echo $item_id;
//            header('Location: itemSuccess.php?user_id='.$sellerID.'&title='.$title.'&description='.$description.'&condition='.$condition.'&image='.$image.'&price='.$price);
            header('Location: itemSuccess.php?item_id='.$item_id);

//                echo " true ";
        }else{
                echo " false ";
                printf(" Error message: %s",$this->error);
        }
    }


    //get all information for a single item
    public function get_item_by_item_id($itemID) {
        return $this->query("SELECT * FROM items WHERE item_id = '" . $itemID . "'");
    }

    //delete an item
    public function delete_item($itemID) {
        $this->query("DELETE FROM items WHERE item_id = '" . $itemID . "'");
    }

    //used for moderator login
    public function verify_mod_credentials($username, $password) {
        $username = $this->real_escape_string($username);
        $password = $this->real_escape_string($password);
        $result = $this->query("SELECT 1 FROM moderator WHERE username = '"
                . $username . "' AND password = '" . $password . "'");
        return $result->data_seek(0);
    }

    //returns all contitions
    public function get_conditions() {
        return $this->query("SELECT * FROM conditions order by id");
    }

    //returns all categories
    public function get_categories() {
        return $this->query("SELECT * FROM categories order by id");
    }

    //returns all sub categories of a given parent category
    public function get_sub_categories($parent_id) {
        $parent_id = $this->real_escape_string($parent_id);
        return $this->query("SELECT * FROM sub_cat WHERE parent_id = '"
                        . $parent_id . "' order by id ");
    }

    //returns all approved items
    public function get_approved_items() {
        return $this->query("SELECT * FROM `items` where `approved`  order by `premium`, `date`");
    }

    //returns all users
    public function get_all_users() {
        return $this->query("SELECT * FROM users order by user_id");
    }

    // approves an item
    public function approve_item($item_id) {
        // $item_id = $this->real_escape_string($item_id);
        $this->query("UPDATE `items` SET `approved` = 1 WHERE `item_id` = '" . $item_id . "'");
    }

    // unapproves an item
    public function unapprove_item($item_id) {
        $item_id = $this->real_escape_string($item_id);
        $this->query("UPDATE items SET approved=0 WHERE item_id = '" . $item_id . "'");
    }

    //delete a user
    public function delete_user($userID) {
        $this->query("DELETE FROM `users` WHERE `user_id` = '" . $userID . "'");
    }

    //get all user information
    public function get_user_by_user_id($user_id) {
        //$user_id = $this->real_escape_string($user_id);
        return $this->query("SELECT * FROM users WHERE user_id = '" . $user_id . "'");
    }

    //get category id of a given category
    public function get_cat_by_id($id) {
        $query = $this->query("SELECT `name` FROM `categories` WHERE id = '" . $id . "'");
        if ($query->num_rows > 0) {
            $row = $query->fetch_row();
            return $row[0];
        } else
            return null;
    }
    
    public function get_image_by_item_id($item_id) {
        $query = $this->query("SELECT `image` FROM `items` WHERE `item_id` = '" . $item_id . "'");
        if ($query->num_rows > 0) {
            $row = $query->fetch_row();
            return $row[0];
        } else
            return null;
    }
    
}

?>