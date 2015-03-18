<?php include('template/header.php'); ?>
<h1 class="page-header"><span class='logoFont'>Extra! Extra! Online buying and selling just got better!</span> </h1>
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

</style>

<div class="container">

    <!-- Example row of columns -->
    <div class="row">
        <div class="col-sm-9">

            <h2>Moderation</h2>
            <p>Extra! provides a moderated online classified for the selling and buying of used goods. All posts are screened for authenticity, making your searches more accurate.  </p>

            <hr>
            <h2>Sell</h2>
            <p>Quickly post your items online and be notified when someone wants your item. </p>
            <p> 
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#regModal2">Sell Now!</a></p>

            <hr>
            <h2>Buy</h2>
            <p>Browse by category. Easily see what other members have posted for sale and contact them to make a deal.</p>
            <p> <a href="#" class="btn btn-success" data-toggle="modal" data-target="#regModal2">Buy Now!</a></p>

        </div>
    </div>




</div>

<?php include('template/footer.php'); ?>
<script> 
    $(function() {
        $("#index").addClass("active");
        $("#contentdiv").addClass("bg");
    });
</script>
</body>
</html>
