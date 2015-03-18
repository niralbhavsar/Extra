<?php include('template/header.php'); ?>


                    <h1 class="page-header">Sell - Post a new item on the  <span class='logoFont'>Extra!</span> classifieds </h1>

                    <div class="row">
                        <div class="col-sm-3"><!--left col-->
                            <div class="form-group">
                                <label for="exampleInputFile"><h4>Please upload of a picture of your product</h4></label>
                                <p class="help-block">*Note - Help keep your classifieds clean and accurate by uploading a actual photo of your product. Generic pictures taken from the internet will not be excepted.</p>
                                <input type='file' onchange="readURL(this);" />
                                <img id="blah" data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI2VlZSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjEwMCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEzcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L3N2Zz4=" style="width: 200px; height: 200px;" />
                            </div>
                            <div class="form-group">
                                <label for="price"><h4>Asking Price</h4></label>
                                <input type="text" class="form-control" name="price" id="first_name" placeholder="$120" title="Enter the price of your product!">
                            </div>

                        </div>

                        <div class="col-sm-9">

                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#sell" data-toggle="tab">Sell on <span class='logoFont'>Extra!</span> </a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="sell">

                                    <form class="form" action="##" method="post" id="registrationForm">
                                        <div class="form-group">

                                            <div class="col-xs-6">
                                                <label for="first_name"><h4>Posting title</h4></label>
                                                <input type="text" class="form-control" name="post_title" id="first_name" placeholder="Macbook Pro 15in Retina" title="Enter the name of your product!">
                                            </div>
                                        </div>
                                        <br><br>
                                        <div  class="form-group">

                                            <div class="col-sm-9">

                                                <label><h4>Select the condition of your product!</h4></label>

                                                <select class="form-control">
                                                    <option>Brand New: Unopened product still in plastic wrap/box</option>
                                                    <option>Excellent: Opened product but not used. NO damage or wear and tear</option>
                                                    <option>Good: Signs of use and/or damage</option>
                                                    <option>Fair: Extensive signs of use and/or damage. Does not include broken or missing pieces, scratches, or cracks</option>
                                                    <option>Bad: Extensive signs of use and/or damage. Includes broken or missing pieces, scratches, or cracks</option>

                                                </select>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-group">

                                            <div class="col-sm-9">
                                                <label for="last_name"><h4>Location</h4></label>
                                                <input type="text" class="form-control" name="location" id="last_name" placeholder="San Fracisco" title="Enter location of your product!">
                                            </div>
                                        </div>


                                        <div class="form-group">

                                            <div class="col-sm-9">
                                                <label style="" for="last_name"><h4>Please comment on your product. Descriptions are very important, please be accurate!</h4></label>
                                                <textarea rows="6" cols="60" data-rta="bold italic, ul ol" class="rta" id="ta_html" name="ta_html" placeholder="Hello! I am selling a 2013 Macbook Pro 15inch. I used this laptop in college and I am selling it because the company I work for gave me a new one."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <br>
                                                    <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Post to classifieds!</button>
                                                    <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                                </div>
                                            </div>
                                    </form>




                                    <!-- <div class="tab-pane" id="messages">
                                    
                                      <div class="control-group">
                                  <label class="control-label" for="ta_html"></label>
                                  <div class="controls">
                                    -->

                                </div> <!-- controls -->

                            </div><!--/tab-pane-->


                        </div><!--/tab-pane-->




                        <br>
                        <br>
                        <br>
                        <br>

                    </div><!--/tab-pane-->

                </div><!--/tab-content-->

            

   
     <?php include('template/footer.php'); ?>
            
<script>
$(function(){

   $("#myextra").addClass("active");

}); 

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
            }
</script>
</body>
</html>
