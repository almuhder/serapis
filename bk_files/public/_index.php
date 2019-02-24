<?php include('../private/initials.php');?>
<?php include(SHARED_PATH . '/functions.php'); ?>
<?php include(SHARED_PATH . '/header.php');?>
<?php 
$lg = "";
if($lg == undefined)
{
        $lg= "ar";
}
?>

<style type="text/css">
.my_main{
    box-shadow: none;
}
</style>
<div>
        
<?php
if($lg == "ar" || $lg== undefined){
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
                <h4>Dear RBK Applicant,</h4>
                <p>
                        In order to complete your application to RBK, please complete the following steps. Please note that no preparation is needed for this assessment. ( You can get the links of assessment & Biographic info and commitment agreement from To Do document, and you have access ) 
                </p>
                <br>
                <p>
                        <b>RBK Admissions Team</b>
                </p>
                <button class="btn btn-sample navbar-btn navbar-right" onclick="changeURL(\'query.php\');"> Next</button>';
}
function load_ar(){
        echo '<h1 class="text-center">التعليمات </h1>';
        echo '<h4 dir="rtl">عزيزي المتقدم لبرنامج سيرابيس، </h4>
                <p dir="rtl">
                    يرجى إكمال جميع الخطوات وملاحظة أنه لا يوجد أي تحضيرات مسبقة لتقديم الطلب. (يمكنك الحصول على الروابط لتقديم الطلب والمعلومات الشخصية الخاصة بالإضافة إلى اتفاقية الالتزام)
                </p>
                <button class="btn btn-sample navbar-btn navbar-right" onclick="changeURL(\'query.php\');"> التالي</button>';
}

?>
<?php include SHARED_PATH.'/footer.php'; ?>
