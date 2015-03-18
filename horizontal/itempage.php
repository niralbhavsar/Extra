<?php include('template/header.php'); ?>
<h1 class="page-header">Item Name</h1>



<div class="row">
    <div class="col-md-4"><img data-src="holder.js/400x400" alt="..."></div>            
    <div class="col-md-8">
        <h3>Description:</h3>
        <p>Hello! I am selling a 2013 Macbook Pro 15inch. I used this laptop in college and I am selling it because the company I work for gave me a new one.</p><br />
        <h4>Condition:</h4>
        <p><b>Brand New:</b> Unopened product still in plastic wrap/box</p><br />
        <h4>Location:</h4>
        <p>San Francisco</p><br>
        <!--<h4>Preferred Contact Method:</h4>
        <p><span class="glyphicon glyphicon-earphone"></span> 415-555-5555</p>
        <br />-->
        <a href="#" class="btn btn-primary btn btn-success btn-lg modal-title" data-toggle="modal" data-target="#buyModal">$120<br>Buy Now</a>
        <!-- <a href="#" class="btn btn-success btn-lg modal-title" id="regLabel" data-toggle="modal" data-target="#sellModal" role="button">$120<br>Buy Now</a>-->

    </div>
</div>
<br /><br />
<h2>Similar Items...</h2>

<div class="row">
    <div class="col-xs-6 col-md-3">
        <a href="itempage.php" class="thumbnail">
            <img data-src="holder.js/180x180" alt="...">
            <div class="caption">
                <h3>Item Name 1</h3>
            </div>
        </a>
    </div>
    <div class="col-xs-6 col-md-3">
        <a href="itempage.php" class="thumbnail">
            <img data-src="holder.js/180x180" alt="...">
            <div class="caption">
                <h3>Item Name 2</h3>
            </div>
        </a>
    </div>
    <div class="col-xs-6 col-md-3">
        <a href="itempage.php" class="thumbnail">
            <img data-src="holder.js/180x180" alt="...">
            <div class="caption">
                <h3>Item Name 3</h3>
            </div>
        </a>
    </div>


    <div   class="modal fade" id="buyModal" tabindex="-1" role="dialog" aria-labelledby="buyLabel" aria-hidden="true">
        <div  class="modal-dialog">
            <div  class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"  id="buyLabel">You're 1 Step Away! <span class='logoFont'>Extra!</span></h4>
                </div>
                <div  class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="name" class="col-sm-3">My Offer</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" placeholder="$120">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-3">Preferred Meeting Place</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="username" placeholder="San Francisco">
                            </div>
                        </div>

                        <hr>
                        <div class="form-group">
                            <label for="email" class="col-sm-3">Message</label>
                            <div class="col-sm-9">
                                <textarea rows="6" cols="60" data-rta="bold italic, ul ol" class="rta" id="ta_html" name="ta_html" placeholder="Add message here."></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="register">Send Email</button>
                </div>
            </div>
        </div>
    </div>

    <?php include('template/footer.php'); ?>
    <script src="http://imsky.github.com/holder/holder.js"></script>



</body>
</html>                    