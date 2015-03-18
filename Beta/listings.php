<?php include('template/header.php'); ?>
<?php ($name = ExtraDB::getInstance()->get_cat_by_id($_GET['id'])); ?>



<h1 class="page-header"><?php echo $name; ?>.</h1>
<div class="row">
    <?php
    require_once("scripts/db.php");
//    $name = $_GET['name'];

    $result = (ExtraDB::getInstance()->get_items_by_category($name));
//    if (!$res) {
//        echo "<div class='alert alert-danger'><b>Sorry, no items were found in this category</b></div>";
//        include('template/footer.php');
//        echo "</body></head>";
//        exit();
//    }
    while ($row = mysqli_fetch_array($result)):
        $image = $row['image'];
//        $image = base64_encode($row['image']);
        $title = $row['title'];
        $description = $row['description'];
        $date = $row['date'];
        $price = $row['price'];
        $item_id = $row['item_id'];
        $premium = $row['premium'];

        if ($premium == 1):
            ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail" >
                    <form action="itempage.php" method="GET" >
                        <a href="javascript:;" onclick="parentNode.submit();" class="thumbnail backcolor" style="display:inline-block;height:310px;width:300px;" >
                            <img src="scripts/image.php?id=<?php echo $item_id; ?>&amp;size=300" class="img-rounded  backcolor" alt="<?php echo $title; ?>"/>
                            <!--<img src="data:image/jpeg;base64,<?php // echo $image;     ?>" class="img-rounded img_thumb" alt="<?php echo $title; ?>"/>-->
                        </a>
                        <input type="hidden" name="item_id" value="<?php echo $item_id; ?>" /> 
                    </form>
                    <div class="caption">
                        <form action="itempage.php" method="GET">
                            <h4><?php echo $title; ?></h4><br>
                            <button type="submit" class="btn btn-success" name="price" ><span class='glyphicon glyphicon-usd'></span><?php echo $price; ?></button>
                            <input type="hidden" name="item_id" value="<?php echo $item_id; ?>" /> 
                        </form>
                    </div>
                </div>
            </div>
            <?php
        endif;
    endwhile;
    ?>
</div>

<div class="row">
    <?php
    require_once("scripts/db.php");
//    $name = $_GET['name'];

    $result = (ExtraDB::getInstance()->get_items_by_category($name));
//    if (!$res) {
//        echo "<div class='alert alert-danger'><b>Sorry, no items were found in this category</b></div>";
//        include('template/footer.php');
//        echo "</body></head>";
//        exit();
//    }
    while ($row = mysqli_fetch_array($result)):
        $image = $row['image'];
//        $image = base64_encode($row['image']);
        $title = $row['title'];
        $description = $row['description'];
        $date = $row['date'];
        $price = $row['price'];
        $item_id = $row['item_id'];
        $premium = $row['premium'];

        if ($premium == 0):
            ?>
            <div class="col-sm-3 col-md-1.5">
                <div class="thumbnail" >
                     <form action="itempage.php" method="GET">
                        <a href="javascript:;" onclick="parentNode.submit();" class="thumbnail" style="display:inline-block;height:210px;width:210px;">
                            <img src="scripts/image.php?id=<?php echo $item_id; ?>&amp;size=200" class="img-rounded" alt="<?php echo $title; ?>"/>
                            <!--<img src="data:image/jpeg;base64,<?php // echo $image;     ?>" class="img-rounded img_thumb" alt="<?php echo $title; ?>"/>-->
                        </a>
                        <input type="hidden" name="item_id" value="<?php echo $item_id; ?>" /> 
                    </form>
                    <div class="caption">
                        <form action="itempage.php" method="GET">
                            <h4><?php echo $title; ?></h4><br>
                            <button type="submit" class="btn btn-success" name="price" ><span class='glyphicon glyphicon-usd'></span><?php echo $price; ?></button>
                            <input type="hidden" name="item_id" value="<?php echo $item_id; ?>" /> 
                        </form>
                    </div>
                </div>
            </div>
            <?php
        endif;
    endwhile;
    ?>
</div>

<!--    <img data-src="holder.js/140x140" alt='Thumbnail' class="img-thumbnail img-responsive"/>-->

<script src="http://imsky.github.com/holder/holder.js"></script>

<?php include('template/footer.php'); ?>
<script>
                    $(function() {
                        $("#cat<?php echo $_GET['id']; ?>").addClass("active");
                    });
</script>
</body>
</html>
