<?php include('template/header.php'); ?>

<h1 class="page-header"><?php echo $_POST['name1'];?></h1>
<div class="row">
    <?php
    require_once("scripts/db.php");
    $name1 = $_POST['name1'];
//    if (!$result) {
//        echo "<div class='alert alert-danger'><b>Sorry, no items were found in this category</b></div>";
//        include('template/footer.php');
//        echo "</body></head>";
//        exit();
//    }
    $result = (ExtraDB::getInstance()->get_items_by_subcategory($name1));
    while ($row = mysqli_fetch_array($result)):
        $image = base64_encode($row['image']);
        $title = $row['title'];
        $description = $row['description'];
        $date = $row['date'];
        $price = $row['price'];
        $item_id = $row['item_id'];
        ?>
        <div class="col-sm-6 col-md-4">

            <div class="thumbnail" height="100" width="100">
                <form action="itempage.php" method="POST">
                    <a href="javascript:;" onclick="parentNode.submit();" class="thumbnail" height="100" width="100">
                        <img src="data:image/jpeg;base64,<?php echo $image; ?>" class="img-rounded" height="200" width="200" alt="<?php echo $title; ?>"/>
                    </a>
                    <input type="hidden" name="item_id" value="<?php echo $item_id; ?>" /> 
                </form>

                <div class="caption">
                    <?php echo $title;
                    echo " $";
                    echo $price; ?>
                </div>
            </div>
        </div><?php endwhile; ?>
</div>



<div class="row">


</div>






<!--    <img data-src="holder.js/140x140" alt='Thumbnail' class="img-thumbnail img-responsive"/>-->

<script src="http://imsky.github.com/holder/holder.js"></script>

<?php include('template/footer.php'); ?>
<script>
//    $(function() {
//
//        $("#arts").addClass("active");
//
//    });
</script>
</body>
</html>