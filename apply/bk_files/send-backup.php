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
<?php include 'include/footer.php'; ?>
