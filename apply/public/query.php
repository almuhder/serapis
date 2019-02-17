<?php include('../private/initials.php');?>


<?php $page_title ='Apply to RBK' ; ?>
<?php include SHARED_PATH.'/header.php' ;?>

            <div class="row">
                <div class="col-sm-12 col-md-5 over_image">
                        <br>
                        <br>
                        <h1>Apply to Serapis</h1>
                        <p class=""style="font-size: 18px; line-height:1.4em;">
                            Here you can start your application to join Serapis immsersive program. The first English & Digital Literacy bootcamp in the World!
                        </p>
                </div>
                <div class="col-sm-12 col-md-7">
                    <br>
                    <h4 style="margin-left:10px;">
                        Create Account
                    </h4>
                    <form  data-toggle="validator" role="form" class="form-horizontal" method="POST" action="send.php" style="padding: 0px 20px 20px 20px; max-width:445px; margin-left: 20px;  margin-right: 20px;">
                        <div class="form-group">
                            <label for="firstName" class="control-label">
                                First Name
                                <span class="fieldRequired"> *</span>
                            </label>
                            <div class="">
                                <input type="text" class="form-control" data-error="Please enter first name." id="firstName" name="firstName" placeholder="First Name" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastName" class="control-label">
                                Last Name
                                <span class="fieldRequired"> *</span>
                            </label>
                            <div class="">
                                <input type="text" class="form-control" data-error="Please enter last name." id="lastName" name="lastName" placeholder="Last Name" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label" style="text-align:left">
                                Email<span class="fieldRequired"> *</span>
                                <p style="text-align: left;">Please use Gmail account if you don't have <a href="https://accounts.google.com/SignUp?service=mail&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ltmpl=default">create one</a> </p>
                            </label>
                            <div class="">
                                <input type="email" class="form-control" data-error="Please enter valid email." id="email" name="email" placeholder="Email" required>
                                 <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <br />
                        <div class="form-group">
                            <div>
                                <!-- <button id="clearButton" type="reset" class="btn btn-sample">Clear</button> -->
                                <button id="submitButton" type="submit" class="btn btn-sample btn-block">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
<?php include SHARED_PATH.'/footer.php'; ?>
