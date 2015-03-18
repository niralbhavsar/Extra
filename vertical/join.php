
<?php

//        if (isset($_FILES['image'])) {
//            if ($_FILES['image']['error'] == 0) {

ob_start(); // ensures anything dumped out will be caught
$url = 'index.php';

// Create connection
$con = mysqli_connect('sfsuswe.com', 's14g06', 'Magic6', 'student_s14g06');

// Check connection
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$image = $con->real_escape_string(file_get_contents($_FILES ['image']['tmp_name']));
$title = $_POST[title];
$desc = $_POST[desc];
$price = $_POST[price];

$sql = "INSERT INTO items (seller_id,title, description, image, price, approved) VALUES(1,'$title','$desc','$image','$price',1)";

if (!mysqli_query($con, $sql)) {
    echo "<h3>FAILURE!</h3>";
    die('Error: ' . mysqli_error($con));
}

mysqli_close($con);

//clear output buffer
while (ob_get_status()) {
    ob_end_clean();
}
// no redirect
header("Location: $url");

?>
      