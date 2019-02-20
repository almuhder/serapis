<?php $page_title = 'Thank you! Appliction Sent successfully'; ?>
<?php include('../private/initials.php');?>
<?php include(PRIVATE_PATH.'/classes/Database.php');?>
<?php include(SHARED_PATH.'/header.php');?>

<style type="text/css">
.my_main{
    box-shadow: none;
}
</style>
<?php
	// the message
	$first_name  = $_POST["firstName"];
	$last_name   = $_POST["lastName"];
	$email      = $_POST["email"];
if(!isset($first_name) || !isset($last_name) || !isset($email)){
?>
<div class="alert alert-danger">
		  <strong>Sorry!</strong> Something went wrong! Try Again!!.
		  <p dir="rtl">
			  <strong>حدث خطأ! </strong>يرجى المحاولة، يوجد مشكلة.
		  </p>
          <p>

              <?php
                  echo "ERROR: ". mysqli_error($conn);
              ?>
          </p>
      </div>
<?php

  die();
}
$db = new Database();
$conn = $db->db_connect();
$candidate = new Candidate();
$flag = $candidate->add($conn, $first_name, $last_name, $email);

	if ($flag) {
        //$last_id = mysqli_insert_id($conn);
        ?>

        <div class="alert alert-success text-center">
			<strong>Thank you!</strong> Your application has been sent successfully! 
			<p dir="rtl">
				<strong>شكرا!</strong> !تم إرسال طلبك بنجاح
				
			</p>
        </div>
	<?php
	}else{?>

	 	<div class="alert alert-danger">
	            <strong>Sorry!</strong> Something went wrong! Try Again!!.
				 <p dir="rtl">
			 		 <strong>حدث خطأ! </strong>يرجى المحاولة، يوجد مشكلة.
		 		 </p>
				<p>

	                <?php
	                    echo "ERROR: ". mysqli_error($conn);
	                ?>
	            </p>
	        </div>
	<?php }



?>
		<h3</h3>
		<h3>Dear Serapis Applicant, عزيزي متقدم طلب لسيرابيس، </h3>
		<p dir="rtl">
			حتى تقوم بإتمام طلبك لسيرابيس، يرجى إكمال جميع الخطوات. ننصح بتوفير 4 ساعات لإكمال جميع المطلوب. يرجى مراعاة لا تحضيرات مسبقة لأي من هذه الأسئلة.

		</p>
		<ol dir="rtl">
			<li>
				<a href="https://docs.google.com/forms/d/e/1FAIpQLSdroHk43aQKYLG1gOdmcxodt43g0941sdq_6AGv4FxYjNg5FQ/viewform" target="_blank"> المعلومات الشخصية واتفاقية القبول</a>
			</li>
			<li><a href="https://docs.google.com/forms/d/e/1FAIpQLSey33LXTw4evRb-dgwk8onXDfdw8SwSLdSJTQ5_g1ER6gdqHA/viewform" target="_blank">التقيم الفكري</a>
			</li>
			
		</ol>
		<p dir="rtl">حظاً موافقا ودعونا نبدأ.</p>
		<p>
			In order to complete your application to RBK, please complete the following steps. We recommend that you allow 4 hours to complete the full application. Please note that no preparation is needed for any of these assessments.
		</p>
		<ol>
			<li>
				<a href="https://docs.google.com/forms/d/e/1FAIpQLSdroHk43aQKYLG1gOdmcxodt43g0941sdq_6AGv4FxYjNg5FQ/viewform" target="_blank">Biographic Information & RBK Commitment Agreement</a>
			</li>
			<li><a href="https://docs.google.com/forms/d/e/1FAIpQLSey33LXTw4evRb-dgwk8onXDfdw8SwSLdSJTQ5_g1ER6gdqHA/viewform" target="_blank">Mindset Assessment</a>
			</li>
			
		</ol>
			<p>Good luck and let's get started! </p><br>
<?php include SHARED_PATH.'/footer.php'; ?>
