<?php include('template/header.php'); ?>
<?php
require_once("scripts/db.php");
$item_id = $_GET['item_id'];

$result = (ExtraDB::getInstance()->get_item_by_item_id($item_id));
$row = mysqli_fetch_array($result);
$image = base64_encode($row['image']);
$title = $row['title'];
$description = $row['description'];
$date = $row['date'];
$price = $row['price'];
$condition = $row['condition'];
$seller_id = $row['seller_id'];
$category = $row['category'];
mysqli_free_result($result);
$result1 = (ExtraDB::getInstance()->get_user_by_user_id($seller_id));
$row1 = mysqli_fetch_array($result1);
$seller = $row1['username'];
mysqli_free_result($result1);
?>
<h1 class = "page-header"><?php echo $title; ?></h1>



<div class = "row">
    <div class = "col-sm-6">
        <a href="scripts/image.php?id=<?php echo $item_id; ?>" >
<!--            <img src="data:image/jpeg;base64,<?php echo $image; ?>" class="img-rounded premium_thumb" alt="<?php echo $title; ?>"/>-->
            <img src="scripts/image.php?id=<?php echo $item_id; ?>&amp;size=450" class="img-rounded" alt="<?php echo $title; ?>"/>

        </a>
    </div>
    <div class = "col-sm-6">
        <h3>Description:</h3>
        <p><?php echo $description; ?></p><br />
        <h4>Condition:</h4>
        <p><?php echo $condition; ?></p><br />
        <h4>Seller:</h4>
        <p><?php echo $seller; ?></p><br />

        <?php
        if (!isset($_SESSION['username'])) {
            echo "<p class=\"text-danger\">You must be signed in to buy an item</p>";
        }
        ?>

        <a href = "#" class = "btn btn-primary btn btn-success btn-lg modal-title" <?php if (!isset($_SESSION['username'])) {
            echo "disabled=\"disabled\"";
        } ?> data-toggle = "modal" data-target = "#buyModal"><span class="glyphicon glyphicon-usd"></span><?php echo $price; ?><br>Buy Now</a>
        <!--<a href = "#" class = "btn btn-success btn-lg modal-title" id = "regLabel" data-toggle = "modal" data-target = "#sellModal" role = "button">$120<br>Buy Now</a> -->

    </div>
</div>
<br /><br />
<h2>Similar Items...</h2>




<div class = "row">
    <?php
    $result2 = (ExtraDB::getInstance()->get_items_by_category($category));
    $i = 0;
    while ($row2 = mysqli_fetch_array($result2)):
        
        $title2 = $row2['title'];
        $image2 = base64_encode($row2['image']);
        $price2 = $row2['price'];
        $item_id2 = $row2['item_id'];
        if ($item_id2 != $item_id):
            if (++$i > 4) {
            break;
        }
            ?>
            <div class = "col-sm-3 col-md-1.5">
                <div class="thumbnail" >
                    <form action="itempage.php" method="GET">
                        <a href="javascript:;" onclick="parentNode.submit();" class="thumbnail" style="display:inline-block;height:210px;width:210px;">
        <!--                            <img src="data:image/jpeg;base64,<?php echo $image2; ?>" class="img-rounded img_thumb" alt="<?php echo $title2; ?>"/>-->
                            <img src="scripts/image.php?id=<?php echo $item_id2; ?>&amp;size=200" class="img-rounded" alt="<?php echo $title2; ?>"/>

                        </a>
                        <input type="hidden" name="item_id" value="<?php echo $item_id2; ?>" />
                    </form>

                    <div class="caption">
                        <form action="itempage.php" method="GET">
                            <h4><?php echo $title2; ?></h4><br>
                            <button type="submit" class="btn btn-success" ><span class='glyphicon glyphicon-usd'></span><?php echo $price2; ?></button>
                            <input type="hidden" name="item_id" value="<?php echo $item_id2; ?>" /> 
                        </form>
                    </div>
                </div>
            </div>
        <?php
    endif;
endwhile;
?>
    <!--    <div class = "col-xs-6 col-md-3">
            <a href = "itempage.php" class = "thumbnail">
                <img data-src = "holder.js/180x180" alt = "...">
                <div class = "caption">
                    <h3>Item Name 2</h3>
                </div>
            </a>
        </div>
        <div class = "col-xs-6 col-md-3">
            <a href = "itempage.php" class = "thumbnail">
                <img data-src = "holder.js/180x180" alt = "...">
                <div class = "caption">
                    <h3>Item Name 3</h3>
                </div>
            </a>
        </div>-->
</div>


<div class = "modal fade" id = "buyModal" tabindex = "-1" role = "dialog" aria-labelledby = "buyLabel" aria-hidden = "true">
    <div class = "modal-dialog">
        <div class = "modal-content">
            <form class="form-horizontal" role="form" action="buyitem.php" method="POST">

                <div class = "modal-header">
                    <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">&times;
                    </button>
                    <h4 class = "modal-title" id = "buyLabel">You're 1 Step Away! <span class='logoFont'>Extra!</span></h4>
                </div>
                <div  class="modal-body">
                    <div class="form-group">
                        <div class="col-sm-3">My Offer</div>
                        <div class="col-sm-9">
                            <input type="number" min="0.01" max="999999.99" step="0.01" class="form-control" id="price" name="price" placeholder="$<?php echo $price; ?>" required>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">Preferred Meeting Place</div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="place" name="place" placeholder="San Francisco" required>
                        </div>
                    </div>

                    <hr>
                    <div class="form-group">
                        <div class="col-sm-3">Message</div>
                        <div class="col-sm-9">
                            <textarea rows="6" cols="60" data-rta="bold italic, ul ol" class="rta" id="message" name="message" placeholder="Add message here." required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="item_id" value="<?php echo $item_id?>">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="sendEmail">Send Email</button>
                </div>
            </form>

        </div>
    </div>
</div>

<?php include('template/footer.php'); ?>
<script src="http://imsky.github.com/holder/holder.js"></script>



</body>
</html>                    