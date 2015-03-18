<?php include('template/header.php'); ?>
<!--<h1 class="page-header"><span class='logoFont'>Extra! Extra! Online buying and selling just got better!</span> </h1>
<style>

    .bg {
        background-image:url('indexpic.jpg');
        background-color:#cccccc;
        min-height: 100%;
    }

    #columns {
        width: 600px;

    }

    #columns .column {
        position: relative;
        width: 46%;
        padding: 1%;
    }

    #columns .left {
        float: left;
    }

    #columns .right {
        float: right;
    }

    .back

</style>-->

<!--<div class="container">-->

    <!--     Example row of columns 
        <div class="row">
            <div class="col-sm-9">
    
                <h2>Moderation</h2>
                <p>Extra! provides a moderated online classified for the selling and buying of used goods. All posts are screened for authenticity, making your searches more accurate.  </p>
    
                <hr>
                
                <h2>Buy</h2>
                <p>Browse by category by clicking a category on the left. Easily see what other members have posted for sale and contact them to make a deal.</p>
                <p> <a href="#" class="btn btn-success" data-toggle="modal" data-target="#regModal2">Buy Now!</a></p>
                
                <hr>
                <h2>Sell</h2>
                <p>Quickly post your items online and be notified when someone wants your item by clicking the Sell on <span class="logoFont">Extra!</span> button. </p>
                <p><a href="#" class="btn btn-success" data-toggle="modal" data-target="#regModal2">Sell Now!</a></p>
    
            </div>
        </div>-->

    <div id="carousel-example-captions" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-captions" data-slide-to="0" class=""></li>
            <li data-target="#carousel-example-captions" data-slide-to="1" class="active"></li>
            <li data-target="#carousel-example-captions" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="item">
<!--      <img data-src="holder.js/500x300" alt="...">-->
                <img src="images/magnifying-photo.jpg" style="max-width: 100%" alt="sunset">
                <div class="carousel-caption">
                    <h2><span class='logoFont' style='color:#428bca; font-size:2.5em'>Moderation</span></h2>
                    <p><span class='logoFont' style='color:#428bca; font-size:2em'>Extra! provides a moderated online classified for the selling and buying of used goods. All posts are screened for authenticity, making your searches more accurate.</span> </p>
                </div>
            </div>
            <div class="item active">
<!--      <img data-src="holder.js/500x300" alt="...">-->
                <img src="images/boxes.jpg" style="max-width: 100%" alt="sunset">
                <div class="carousel-caption">
                    <?php echo $randnum=rand(1, 8);
                          $listing= "listings.php?id=";
                            ?>
                   <a href='<?php echo $listing.$randnum;?>' > <h2><span class='logoFont' style='font-size:2.5em'>Buy</span></h2></a>
                    <p><span class='logoFont' style='color:#428bca; font-size:2em;'> Browse by category by clicking a category on the left. Easily see what other members have posted for sale and contact them to make a deal.</span></p>

                </div>
            </div>
            <div class="item">
<!--      <img data-src="holder.js/500x300" alt="...">-->
                <img src="images/cash_out.jpg" style="max-width: 100%" alt="sunset">
                <div class="carousel-caption">
                    <a href="sellPage.php"> <h2><span class='logoFont' style='font-size:2.5em'>Sell</span></h2></a>
                    <p><span class='logoFont' style='color:#428bca; font-size:2em;'>Quickly post your items online and be notified when someone wants your item by clicking the "Sell on Extra!" button. </span></p>

                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>



<!--</div>-->

<?php include('template/footer.php'); ?>

<script src="http://imsky.github.com/holder/holder.js"></script>

</body>
</html>
