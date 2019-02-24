<?php include('../private/initials.php');?>


<?php $page_title ='Apply to RBK' ; ?>
<?php include SHARED_PATH.'/header.php' ;?>

            

<?php
if($lg == "ar" || $lg == null){
                load_ar();
        }else{
                load_en();
        }
function load_ar(){
   echo '<div class="row">
                <div class="col-sm-12 col-md-5 over_image">
                        <br>
                        <br>
                        <h1 dir="rtl">التقديم لبرنامج سيرابيس</h1>
                        <p dir="rtl" class=""style="font-size: 18px; line-height:1.4em;">
            من هنا يمكنك البدء بالإنضمام لبرنامج سيرابيس  المكثف
                    </p>
                        
                </div>
                <div class="col-sm-12 col-md-7" dir="rtl">
                    <br>
                    <h4 style="margin-left:10px;">
                        تسجيل طلب
                    </h4>
                    <form data-toggle="validator" role="form" class="form-horizontal" method="POST" action="send.php" style="padding: 0px 20px 20px 20px; max-width:445px; margin-left: 20px;  margin-right: 20px;">
                        <div class="form-group">
                            <label for="firstName" class="control-label">
                                 الاسم الأول
                                <span class="fieldRequired"> *</span>
                            </label>
                            <div class="">
                                <input type="text" class="form-control" data-error=" يرجى إدخال الاسم الأول" id="firstName" name="firstName" placeholder="الاسم الأول" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastName" class="control-label">
                               الاسم الثاني
                                <span class="fieldRequired"> *</span>
                            </label>
                            <div class="">
                                <input type="text" class="form-control" data-error=" يرجى إدخال الاسم الأخير" id="lastName" name="lastName" placeholder="الاسم الاخير" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label" style="text-align:right">
                                الايميل<span class="fieldRequired"> *</span>
                                <p style="text-align: left;">
                                
                            </p>
                            <p style="text-align: left;" dir="rtl">
يرجى استخدام بريد Gmail ، اذا لم يكن لديك حساب يرجى <a href="https://accounts.google.com/SignUp?service=mail&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ltmpl=default"> إنشاء حساب جديد </a> 

                            </p>
                            </label>
                            <div class="">
                                <input type="email" class="form-control" data-error=" يرجى إدخال عنوان بريد صالح" id="email" name="email" placeholder=" البريد الالكتروني" required>
                                 <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <br />
                        <div class="form-group">
                            <div>
                                <!-- <button id="clearButton" type="reset" class="btn btn-sample">Clear</button> -->
                                <button id="submitButton" type="submit" class="btn btn-sample btn-block">إرسال</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>';

}
function load_en(){
echo '<div class="row">
                <div class="col-sm-12 col-md-5 over_image">
                        <h1>Apply to Serapis</h1>
                        <p class=""style="font-size: 18px; line-height:1.4em;">
                            Here you can start your application to join Serapis immsersive program.
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
                                <input type="text" class="form-control" data-error="Please enter first name " id="firstName" name="firstName" placeholder="First Name " required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastName" class="control-label">
                                Last Name 
                                <span class="fieldRequired"> *</span>
                            </label>
                            <div class="">
                                <input type="text" class="form-control" data-error="Please enter last name." id="lastName" name="lastName" placeholder="Last Name " required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label" style="text-align:left">
                                Email <span class="fieldRequired"> *</span>
                                <p style="text-align: left;">
                                Please use Gmail account if you don\'t have 
                                <a href="https://accounts.google.com/SignUp?service=mail&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ltmpl=default">create one</a> 
                            </p>
                            
                            </label>
                            <div class="">
                                <input type="email" class="form-control" data-error="Please enter valid email " id="email" name="email" placeholder="Email" required>
                                 <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <br />
                        <div class="form-group">
                            <div>
                                <!-- <button id="clearButton" type="reset" class="btn btn-sample">Clear</button> -->
                                <button id="submitButton" type="submit" class="btn btn-sample btn-block">Submit </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>';
}

    

?>



<?php include SHARED_PATH.'/footer.php'; ?>
