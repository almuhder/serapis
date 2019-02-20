<?php include 'include/functions.php'; ?>
<?php include 'include/header.php'; ?>
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

	$conn = mysqli_connect(SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	if (mysqli_connect_error()) {
	        die("Database connection failed: " . mysqli_connect_error());
	    }
	mysqli_set_charset($conn,"utf8");

	$sql = "INSERT INTO tbl_candidates".
           "(first_name, last_name, email)".
           " VALUES ('"
           .$first_name."', '"
           .$last_name."','"
           .$email."')";

	if (mysqli_query($conn, $sql)) {
        //$last_id = mysqli_insert_id($conn);
        ?>

        <div class="alert alert-success text-center">
            <strong>Thank you!</strong> Your application has been sent successfully! We will contact your soon.
        </div>
	<?php
	}else{?>

	 	<div class="alert alert-danger">
	            <strong>Sorry!</strong> Something went wrong! Try Again!!.
	            <p>

	                <?php
	                    echo "ERROR: ". mysqli_error($conn);
	                ?>
	            </p>
	        </div>
	<?php }



?>

		<h3>Dear RBK Applicant,</h3>

		<p>
			In order to complete your application to RBK, please complete the following steps. We recommend that you allow 4 hours to complete the full application. Please note that no preparation is needed for any of these assessments.
		</p>
		<ol>
			<li>
				<a href="https://docs.google.com/forms/d/e/1FAIpQLSdqpQRPQn2KZMooNPLfuHXYD0BTrYzOx54N-zhPr5r5nV_W8w/viewform?utm_source=Not-Sent+Next+Steps+Emails&utm_campaign=dada8c64b1-EMAIL_CAMPAIGN_2017_02_19&utm_medium=email&utm_term=0_e7e888d45f-dada8c64b1-" target="_blank"> Biographic Information & RBK Commitment Agreement</a>
			</li>
			<li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdzXCvYxYHSQBvZCy7mBwj7sW7Z-yBvAvfLLcq4z0dJAeN-zw/viewform?c=0&w=1?utm_source=Not-Sent+Next+Steps+Emails&utm_campaign=dada8c64b1-EMAIL_CAMPAIGN_2017_02_19&utm_medium=email&utm_term=0_e7e888d45f-dada8c64b1-" target="_blank">Mindset Assessment</a>
			</li>
			<li>
				<a href="https://docs.google.com/forms/d/e/1FAIpQLScsGkEu1WLcGrz-vT55__QO1k2IuWwkymhhpghrcGsvectP-Q/viewform?utm_source=Not-Sent+Next+Steps+Emails&amp;utm_campaign=dada8c64b1-EMAIL_CAMPAIGN_2017_02_19&amp;utm_medium=email&amp;utm_term=0_e7e888d45f-dada8c64b1-" target="_blank">Analytic Assessment</a>
			</li>
		</ol>
			<p>Good luck and let's get started! </p><br>
<?php include 'include/footer.php'; ?>
