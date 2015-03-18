<?php
include('template/header.php');

require_once("scripts/db.php");
?>

<h1 class="page-header">Sell - Post a new item on the  <span class='logoFont'>Extra!</span> classifieds</h1> 
<?php
if (!isset($_SESSION['username'])) {
    echo "<h3 class=\"text-danger\">Please sign in to sell an item. Not registered?  <a href = \"#\"  data-toggle = \"modal\" data-target = \"#regModal\">Click here to register.</a>
 </h3>";
}
?>  


<form class="form" action="sellItem.php" method="post" id="sellForm" name="sellForm" enctype="multipart/form-data">
    <div class="row">
        <div class="col-sm-3"><!--left col-->
            <div class="form-group">
                <h4>Image<span class="text-danger">*</span></h4>
                <input type='file' onchange="readURL(this);" name="image" required />
                <img id="blah" data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI2VlZSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjEwMCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEzcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L3N2Zz4=" style="width: 200px; height: 200px;" />
                <small class="help-block"><strong>Note!!</strong> - Help keep your classifieds clean and accurate by uploading a actual photo of your product. Generic pictures taken from the Internet will not be accepted.</small>
            </div>
            <div class="form-group">
                <h4>Asking Price<span class="text-danger">*</span></h4>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
                    <input class="form-control" name="price" id="price" placeholder="0.00" title="Enter the price of your product!" type="number" min="0.01" max="999999.99" step="0.01" required>
                </div>
            </div>


        </div>

        <div class="col-sm-9">
            <div class="form-group">

                <div class="col-xs-6">
                    <h4>Title<span class="text-danger">*</span></h4>
                    <input type="text" class="form-control" name="post_title" id="post_title" placeholder="Enter the name of your product!" title="Enter the name of your product!" required>
                </div>
            </div>
            <br><br>
            <div  class="form-group">

                <div class="col-sm-9">

                    <h4>Condition<span class="text-danger">*</span></h4>
                    <input type="hidden" name="condition">
                    <select class="form-control" name="condition" required>
                        <option selected value="" disabled> - Condition - </option>
                        <?php
                        $result2 = (ExtraDB::getInstance()->get_conditions());
                        while ($row2 = mysqli_fetch_array($result2)) :
                            ?> 
                            <option value="<?php echo $row2['condition']; ?>"><?php echo $row2['condition'] . ": " . $row2['description']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>
            <br>
            <div  class="form-group">
                <div class="col-sm-9">
                    <h4>Category<span class="text-danger">*</span></h4>
                    <input type="hidden" name="category">
                    <select class="form-control" name="category" required>
                        <option selected value="" disabled> - Category - </option>
                        <?php
                        $result3 = (ExtraDB::getInstance()->get_categories());
                        while ($row3 = mysqli_fetch_array($result3)) :
                            ?>
                            <option value="<?php echo $row3['name']; ?>"><?php echo $row3['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>
            <br>

            <!--                    <div class="form-group">
            
                                    <div class="col-sm-9">
                                        <label for="location"><h4>Location<span class="text-danger">*</span></h4></label>
                                        <input type="text" class="form-control" name="location" id="location" placeholder="Enter location of your product!" title="Enter location of your product!">
                                    </div>
                                </div>-->


            <div class="form-group">

                <div class="col-sm-7">
                    <h4>Description<span class="text-danger">*</span></h4>
                    <textarea name="description"  id="description" rows="6" cols="80" placeholder="Please comment on your product. Descriptions are very important, please be accurate!" required></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9">

                    <div class="checkbox">
                        <input type="checkbox" name="premium" id="premium" value="1" onClick="getPayment();">
                        <h4>Premium</h4>
                        <small class="help-block">Premium items are shown ahead of non-premium items ($1)</small>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9" id="paymentinfo">
                    <h4>Payment<span class="text-danger">*</span></h4> 
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></span>
                        <input type="text" class="form-control" name="payment" id="payment" pattern="[0-9]{4}[-]?[0-9]{4}[-]?[0-9]{4}[-]?[0-9]{4}" placeholder="0000-0000-0000-0000" title="">
                    </div>
                    <small class="help-block">For Demonstration only do not enter real payment information</small>
                </div>
            </div>

            <!--display get payment-->
            <script type="text/javascript">
                            var qty = document.getElementById("paymentinfo");
                            qty.style.display = 'none';</script>            

            <div class="form-group">
                <div class="form-group">
                    <div class="col-xs-12">
                        <br>
                        <p  class="text-danger">*Required</p>
                        <?php
                        if (!isset($_SESSION['username'])) {
                            echo "<p   class=\"text-danger\">You must be signed in to post your item </p>";
                        }
                        ?>
                        <button class="btn btn-lg btn-success" type="submit" <?php
                        if (!isset($_SESSION['username'])) {
                            echo "disabled=\"disabled\"";
                        }
                        ?>><i class="glyphicon glyphicon-ok-sign"></i> Post to <span class="logoFont">Extra!</span></button>
                        <button class="btn btn-lg col-xs-offset-5" type="reset" onClick="resetImg();"><i class="glyphicon glyphicon-repeat"></i> Reset</button>

                    </div>
                </div>
            </div> <!-- controls -->
        </div><!--/tab-pane-->
    </div><!--/tab-pane-->
</form>





<?php include('template/footer.php'); ?>

<?php
// <!--dont display form if not logged in-->
if (!isset($_SESSION['username'])) {
    echo "<script type=\"text/javascript\">\n";
    echo "  var qty = document.getElementById(\"sellForm\");\n";
    echo "  qty.style.display = 'none'; \n";
    echo "</script> \n";
}
?> 

<script type="text/javascript">
                            function getPayment() {
                            var checkbox = document.getElementById("premium");
                                    var qty = document.getElementById("paymentinfo");
                                    if (checkbox.checked == true){
                            qty.style.display = 'block';
                                    $('#payment').prop("required", true);
                            } else if (checkbox.checked == false) {
                            qty.style.display = 'none'; //or inline
                                    $('#payment').prop("required", false);
                            }
                            };</script>

<script>
            function readURL(input) {
            if (input.files && input.files[0]) {
            var reader = new FileReader();
                    reader.onload = function(e) {
            $('#blah')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(200);
            };
                    reader.readAsDataURL(input.files[0]);
            }
            };</script>
<script>
            //reset preview image upon reset button click
                    function resetImg() {
//        document.getElementById("blah").src="http://imsky.github.com/holder/holder.js/200x200";
                    document.getElementById("blah").src = "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI2VlZSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjEwMCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEzcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L3N2Zz4=";
                    };</script>
<!--<script src="http://imsky.github.com/holder/holder.js"></script>-->
<script>
//
//                    $(function() {
//            jQuery.validator.setDefaults({
//            debug: true,
//                    success: "valid"
//                    submitHandler: function(#sellForm) {
//            $(form).ajaxSubmit();
//            }
//            });
//                    $('#sellForm').validate({// initialize the plugin
//            rules: {
//            post_image: {
//            required: true,
//                    extension: //"jpg|jpeg|png"
//                    accept: //image/*
//            },
//                    price: {
//            required: true,
//                    number: true,
//                    range: [0.01, 999999.99]
//            },
//                    post_title: {
//            required: true,
//                    rangelength: [5, 50]
//            },
//                    condition: {
//            required: true
//            },
//                    category: {
//            required: true
//            },
//                    subcategory: {
//            required: true
//            },
//                    description: {
//            required: true,
//                    rangelength: [10, 500]
//            }
//            },
//                    messages:
//            {
//            post_image: {
//            required: "you must have an image",
//                    extension: "allowed image types are .jpg, .jpeg, .gif, .png",
//                    accept: "file must be an image"
//            },
//                    price: {
//            required: "You must enter a price",
//                    number: "Price must be a number",
//                    range: "price must be more than zero and less than 1million"
//            },
//                    post_title: {
//            required: "Your item must have a title",
//                    rangelength: "Title must be between 5 and 50 characters"
//            },
//                    condition: {
//            required: "you must select a condition"
//            },
//                    category: {
//            required: "you must select a category"
//            },
//                    subcategory: {
//            required: "you must select a subcategory"
//            },
//                    description: {
//            required: "please describe your item",
//                    rangelength: "description must be between 10 and 500 characters"
//            }
//            }
////            submitHandler: function(form) {
////            form.submit();
////            }
//            });
//            });
</script>

</body>
</html>
