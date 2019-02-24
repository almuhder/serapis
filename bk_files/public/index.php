<?php include('../private/initials.php');?>
<?php include(SHARED_PATH . '/functions.php'); ?>
<?php include(SHARED_PATH . '/header.php');?>

<style type="text/css">
.my_main{
        box-shadow: none;
}
</style>
<div>
        
<?php

        if($lg == "ar" || $lg == null){
                load_ar();
        }else{
                load_en();
        }
?>
</div>


<?php 
function load_en(){
        
        echo '<h1 class="text-center"> Instructions </h1>';
        echo '<img class="img img-responsive" src="http://serapisrbk.com/beta/apply/public/_images/rbk-admissions.png">
                <br>
                <h4>Dear Serapis Applicant,</h4>
                <p>
                        In order to complete your application to Serapis, please complete the following steps. Please note that no preparation is needed for this assessment. ( You can get the links of assessment & Biographic info and commitment agreement from To Do document, and you have access ) 
                </p>
                <br>
                <p>
                <b>Serapis Team</b>
                </p>
                <button class="btn btn-sample navbar-btn  btn-lg navbar-right" onclick="changeURL(\'query.php?lg=en\');"> Next</button>';
}
function load_ar(){
        echo '<h1 class="text-center">التعليمات </h1>';
        echo '<img class="img img-responsive pull-right" src="http://serapisrbk.com/beta/apply/public/_images/ar-admission.png">';
        echo '<div class="clearfix"></div>';
        echo '<h4 dir="rtl">عزيزي المتقدم لبرنامج سيرابيس، </h4>
                <p dir="rtl">
                        يرجى اتمام جميع الخطوات والتي تتطلب التفرغ لمدة زمنية أقصاها ٤ ساعات، مع العلم أن هذه الأسئلة لا تحتاج لأي تحضير مسبق.
                </p>
                <p dir="rtl">
                مع تمنياتنا لكم في النجاح
                </p>
                <button style="width:150px;" class="btn btn-sample navbar-btn btn-lg navbar-left" onclick="changeURL(\'query.php?lg=ar\');"> التالي</button>';
}
?>
<?php include SHARED_PATH.'/footer.php'; ?>
