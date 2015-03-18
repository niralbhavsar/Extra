<?php include('template/header.php'); ?>


<h1 class="page-header"><span class='logoFont'>My Extra!</span></h1>


<!-- Nav tabs -->
<ul class="nav nav-tabs">
    <li class="active"><a href="#manage" data-toggle="tab">Manage</a></li>
    <li><a href="#profile" data-toggle="tab">Profile</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="manage">
        <!-- Nested Columns -->

        <div class="row">
            <div class="col-md-6">
                <!--left column -->

                <!-- Media List -->
                <div class="list-group">
                    <a href="#" id="link1" class="list-group-item">
                        <div class="media">
                            <img class="media-object pull-left" src="holder.js/64x64" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">1988 BMW Motorcycle</h4>
                                <table style="width:300px">
                                    <tr>
                                        <td>Price:</td>
                                        <td>$1000</td>
                                    </tr>
                                    <tr>
                                        <td>Condition:</td>
                                        <td>New</td>
                                    </tr>
                                    <tr>
                                        <td>Section:</td>
                                        <td>Travel->Motorcycles</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </a>
                    <a href="#" id="link2" class="list-group-item">
                        <div class="media">
                            <img class="media-object pull-left" src="holder.js/64x64" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Item2 Title</h4>
                                <table style="width:300px">
                                    <tr>
                                        <td>Price:</td>
                                        <td>$50</td>
                                    </tr>
                                    <tr>
                                        <td>Condition:</td>
                                        <td>New</td>
                                    </tr>
                                    <tr>
                                        <td>Section:</td>
                                        <td>Section->Subsection</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </a>
                    

                </div>                           

                <button type="button">
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
                <button type="button">
                    <span class="glyphicon glyphicon-minus"></span>
                </button>
            </div>
            <div class="col-md-6">

                <!-- right column -->
                <div id="info1">

                    <!-- Begin content from SellPage.php -->
                    <div class="form-group">
                        <label for="exampleInputFile">Manage the picture of your product</label>
                        <p class="help-block">*Note - Help keep your classifieds clean and accurate by uploading a actual photo of your product. Generic pictures taken from the Internet will not be accepted.</p>
                        <input type='file' onchange="readURL(this);" />
                        <img id="blah" data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI2VlZSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjEwMCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEzcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L3N2Zz4=" style="width: 200px; height: 200px;" />
                    </div>
                    <div class="form-group">
                        <label for="price"><h4> <strong>Asking Price </strong></h4></label>
                        <input type="text" class="form-control" name="price" id="first_name" placeholder="$1000" title="Enter the price of your product!">
                    </div>
                    <form class="form" action="##" method="post" id="registrationForm">
                        <div class="form-group">
                            <label for="first_name"><h4>Posting title</h4></label>
                            <input type="text" class="form-control" name="post_title" id="first_name" placeholder="1988 BMW Motorcyle" title="Enter the name of your product!">
                        </div>
                        <br><br>
                        <div  class="form-group">
                            <label><h4>Select the condition of your product!</h4></label>
                            <select class="form-control">
                                <option>Brand New: Unopened product still in plastic wrap/box</option>
                                <option>Excellent: Opened product but not used. NO damage or wear and tear</option>
                                <option>Good: Signs of use and/or damage</option>
                                <option>Fair: Extensive signs of use and/or damage. Does not include broken or missing pieces, scratches, or cracks</option>
                                <option>Bad: Extensive signs of use and/or damage. Includes broken or missing pieces, scratches, or cracks</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="last_name"><h4>Location</h4></label>
                            <input type="text" class="form-control" name="location" id="last_name" placeholder="San Fracisco" title="Enter location of your product!">

                        </div>
                        <div class="form-group">
                            <label style="" for="last_name"><h4>Please comment on your product. Descriptions are very important, please be accurate!</h4></label>
                            <textarea rows="6" cols="60" data-rta="bold italic, ul ol" class="rta" id="ta_html" name="ta_html" placeholder="This is the current description of your product to change the product description type the new description here and click update"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Update your Post</button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset Form</button>
                            </div>
                    </form> 
                </div> <!-- controls -->
                <br>
                <br>
                <br>
                <br>
                <!--End content from SellPage.php -->
            </div>

            <div id="info2">
                <!-- Begin content from SellPage.php -->
                <div class="form-group">
                    <label for="exampleInputFile">Manage the picture of your product</label>
                    <p class="help-block">*Note - Help keep your classifieds clean and accurate by uploading a actual photo of your product. Generic pictures taken from the Internet will not be accepted.</p>
                    <input type='file' onchange="readURL(this);" />
                    <img id="blah" data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI2VlZSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjEwMCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEzcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L3N2Zz4=" style="width: 200px; height: 200px;" />
                </div>
                <div class="form-group">
                    <label for="price"><h4> <strong>Asking Price </strong></h4></label>
                    <input type="text" class="form-control" name="price" id="first_name" placeholder="$50" title="Enter the price of your product!">
                </div>
                <form class="form" action="##" method="post" id="registrationForm">
                    <div class="form-group">
                        <label for="first_name"><h4>Posting title</h4></label>
                        <input type="text" class="form-control" name="post_title" id="first_name" placeholder="Item2 Title" title="Enter the name of your product!">
                    </div>
                    <br><br>
                    <div  class="form-group">
                        <label><h4>Select the condition of your product!</h4></label>
                        <select class="form-control">
                            <option>Brand New: Unopened product still in plastic wrap/box</option>
                            <option>Excellent: Opened product but not used. NO damage or wear and tear</option>
                            <option>Good: Signs of use and/or damage</option>
                            <option>Fair: Extensive signs of use and/or damage. Does not include broken or missing pieces, scratches, or cracks</option>
                            <option>Bad: Extensive signs of use and/or damage. Includes broken or missing pieces, scratches, or cracks</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="last_name"><h4>Location</h4></label>
                        <input type="text" class="form-control" name="location" id="last_name" placeholder="San Francisco" title="Enter location of your product!">

                    </div>
                    <div class="form-group">
                        <label style="" for="last_name"><h4>Please comment on your product. Descriptions are very important, please be accurate!</h4></label>
                        <textarea rows="6" cols="60" data-rta="bold italic, ul ol" class="rta" id="ta_html" name="ta_html" placeholder="This is the current description of your product to change the product description type the new description here and click update"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <br>
                            <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Update your Post</button>
                            <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset Form</button>
                        </div>
                </form> 
            </div> <!-- controls -->
            <br>
            <br>
            <br>
            <br>
            <!--End content from SellPage.php -->
        </div>
        
    </div>
</div>


</div>
<div class="tab-pane" id="profile">
    <h4> Manage your profile information on <span class='logoFont'>Extra!</span></h4>
    <form role="form">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Joe Schmuck">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Username</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="joey123">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="joey123@mail.sfsu.edu">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Phone</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="(555) 555-555">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="submit your new password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="confirm your new password">
        </div>

        <div class="form-group">
            <label for="exampleInputFile">Upload User Image</label>
            <p class="help-block">Max file size is 70KB</p>
            <input type='file' onchange="readURL(this);" />
            <img id="blah" data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI2VlZSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjEwMCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEzcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L3N2Zz4=" style="width: 200px; height: 200px;" />
        </div>

        <div class="form-group"><label for="contact" >Preferred Contact Method</label>
            <select class="form-control"> 
                <option>Email</option>
                <option>Phone</option>
                <option>SMS Text Message</option>
            </select>
        </div>

        <button type="submit" class="btn btn-default">Save Changes</button>
    </form>

</div>
</div>



<!-- More Content here --> 
<script src="http://imsky.github.com/holder/holder.js"></script>


<?php include('template/footer.php'); ?>        
<script>

                $("#link1").click(function() {
                    $("#info2").css("display", "none");
                    $("#link2").removeClass("active");
                    $("#info3").css("display", "none");
                    $("#link3").removeClass("active");
                    $("#info4").css("display", "none");
                    $("#link4").removeClass("active");
                    $("#info5").css("display", "none");
                    $("#link5").removeClass("active");
                    $("#info1").show();
                    $("#link1").addClass("active");
                });
                $("#link2").click(function() {
                    $("#info1").css("display", "none");
                    $("#link1").removeClass("active");
                    $("#info3").css("display", "none");
                    $("#link3").removeClass("active");
                    $("#info4").css("display", "none");
                    $("#link4").removeClass("active");
                    $("#info5").css("display", "none");
                    $("#link5").removeClass("active");
                    $("#info2").css("display", "block");
                    $("#link2").addClass("active");
                });
                $("#link3").click(function() {
                    $("#info2").css("display", "none");
                    $("#link2").removeClass("active");
                    $("#info1").css("display", "none");
                    $("#link1").removeClass("active");
                    $("#info4").css("display", "none");
                    $("#link4").removeClass("active");
                    $("#info5").css("display", "none");
                    $("#link5").removeClass("active");
                    $("#info3").css("display", "block");
                    $("#link3").addClass("active");
                });
                $("#link4").click(function() {
                    $("#info2").css("display", "none");
                    $("#link2").removeClass("active");
                    $("#info3").css("display", "none");
                    $("#link3").removeClass("active");
                    $("#info1").css("display", "none");
                    $("#link1").removeClass("active");
                    $("#info5").css("display", "none");
                    $("#link5").removeClass("active");
                    $("#info4").css("display", "block");
                    $("#link4").addClass("active");
                });
                $("#link5").click(function() {
                    $("#info2").css("display", "none");
                    $("#link2").removeClass("active");
                    $("#info3").css("display", "none");
                    $("#link3").removeClass("active");
                    $("#info4").css("display", "none");
                    $("#link4").removeClass("active");
                    $("#info1").css("display", "none");
                    $("#link1").removeClass("active");
                    $("#info5").css("display", "block");
                    $("#link5").addClass("active");
                });

</script>
</body>
</html>
