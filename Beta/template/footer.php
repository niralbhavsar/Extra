



</div>
</div>
</div>

<!-- Register Modal -->
<!-- Modal -->
<div   class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="regLabel" aria-hidden="true">
    <div  class="modal-dialog">
        <div  class="modal-content">
            <form class="form-horizontal" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" id="regForm" name="regForm" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"  id="regLabel">Register for <span class='logoFont'>Extra!</span></h4>
                </div>
                <div  class="modal-body">

                    <div class="form-group">
                        <label for="name" class="col-sm-3">Your Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your First and Last Names" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="col-sm-3">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Create a Username. This will be public" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Create a Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password1" class="col-sm-3"> Confirm Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password1" name="password1" placeholder="Verify your Password" onclick="checkpasswords()" required>
                            <div class="registrationFormAlert" id="passmatchdiv"></div>
                        </div>
                    </div>


                    <hr>
                    <div class="form-group">
                        <label for="email" class="col-sm-3">Email address</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="register">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script>
                                $(document).ready(function() {
                                    $("#password1").keyup(checkPasswordMatch);
                                });
</script>
<script>
    function checkPasswordMatch() {
        var password = $("#password").val();
        if (password == $(this).val()) {
            $("#passmatchdiv").html("<span class='text-success'>passwords match</span>");
            $("#register").prop("disabled",false);
        }
        else {
            $("#passmatchdiv").html("<span class='text-danger'>passwords do not match</span>");
            $("#register").prop("disabled",true);
        }
//        $("#passmatchdiv").html(password == $(this).val() ? "<span class='text-success'>passwords match</span>" : "<span class='text-danger'>passwords do not match</span>");
    }
</script>