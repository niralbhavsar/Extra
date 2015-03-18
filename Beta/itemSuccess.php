<?php
include('template/header.php');
//    ? user_id = '.$sellerID.', title = '.$title.', description = '.$description.', condition='.$condition.', image='.$image.', price='.$price.''
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
?>

<!-- Note1 Modal -->
<!-- Modal -->
<div  class="modal fade" id="note1" tabindex="-1" role="dialog" data-show="ture" aria-labelledby="regLabel" aria-hidden="true" alert alert-success>
    <div  class="modal-dialog">
        <div  class="modal-content">
            <div class="modal-header">
                <strong>Your item has been submitted to the <span class='logoFont'>Extra!</span> classifieds!</strong>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                A moderator will now review your item to verify that it is accurate and appropriate.<br>
                You will be contacted when a moderator has reviewed your item.
            </div>
            <div class="modal-body"><strong>This is what your item page will look like if approved:</strong></div>
        </div>
    </div>
</div>

<!--<h1 class="page-header">
    Example: (Waiting for approval)
</h1>-->

<!--div class="row">
    <div class="col-sm-6 alert alert-success">
        A moderator will now review your item to verify that it is accurate and appropriate.<br>
        You will be contacted when a moderator has reviewed your item.<br>
        <strong>This is what your item page will look like if approved:</strong>
    </div>
    <div class="col-sm-6 alert alert-success">
        <a href="sellpage.php" class="alert-link">Sell Another Item</a>
    </div>
</div-->

<!--this is a progress bar, it's just for fun-->
<!--<div class="progress progress-striped active">

    <div class="progress-bar progress-bar-success" style="width: 35%">
        <span class="sr-only">35% Complete (success)</span>
    </div>
    <div class="progress-bar progress-bar-warning" style="width: 20%">
        <span class="sr-only">20% Complete (warning)</span>
    </div>
    <div class="progress-bar progress-bar-danger" style="width: 10%">
        <span class="sr-only">10% Complete (danger)</span>
    </div>
</div>-->


<div class = "row"><h1 class="page-header"><?php echo $title ?></h1>
    <div class = "col-sm-6">
        <a href="scripts/image.php?id=<?php echo $item_id; ?>" >
<!--            <img src="data:image/jpeg;base64,<?php echo $image; ?>" class="img-rounded premium_thumb" alt="<?php echo $title; ?>"/>-->
            <img src="scripts/image.php?id=<?php echo $item_id; ?>&size=450" class="img-rounded" alt="<?php echo $title; ?>"/>

        </a>
        <div class="alert alert-info">
            This is a preview of your item.<br>Waiting moderator Approval
        </div>
    </div>
    <div class = "col-sm-6">
        <h3>Description:</h3>
        <p><?php echo $description; ?></p><br />
        <h4>Condition:</h4>
        <p><?php echo $condition; ?></p><br />
        <h4>Seller:</h4>
        <p><?php echo $seller; ?></p><br />
        <a href = "#" class = "btn btn-primary btn btn-success btn-lg"><span class="glyphicon glyphicon-usd"></span><?php echo $price; ?><br>Buy Now</a>
    </div>
</div>

<?php include('template/footer.php'); ?>

<script type="text/javascript">
    $(window).load(function() {
        $('#note1').modal('show');
    });
</script>
</body>
</html>