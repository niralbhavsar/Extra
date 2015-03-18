<?php

require_once 'db.php';
$db = ExtraDB::getInstance();
$image = $db->get_image_by_item_id($_GET['id']);

$img = new Imagick();
$img->readimageblob($image);
if (isset($_GET['size'])) {
    $img->thumbnailimage($_GET['size'], $_GET['size'], true);
}

if ($img->getformat() == "jpeg") {
    header('Content-type: image/jpeg');
} elseif ($img->getformat() == "png") {
    header('Content-type: image/png');
} else {
    header('Content-type: image/gif');
}

echo $img;
$img->destroy();
?>

