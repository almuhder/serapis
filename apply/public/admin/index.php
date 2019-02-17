// Enable Error Reporting
 <?php
  // ini_set('display_errors', 'On');
  // echo error_reporting();
  // error_reporting(E_ALL);
?>
<?php $logo_img = "../_images/rbk_logo.png"; ?>
<?php $css_url = "../_css/styles.css"; ?>
<?php include('../../private/initials.php');?>
<?php include(SHARED_PATH. '/header.php');?>
<?php include(PRIVATE_PATH.'/classes/Database.php');?>


        <h1 class="text-center"> List of Candidates</h1>
        <?php
        $db = new Database();
        $conn = $db->db_connect();
        $candidate = new Candidate();
        $result = $candidate->getAll($conn);

        ?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Last</th>
        <th>Email</th>
        <th style="width:40%;">Time</th>
        <th style="width:100%;">Action</th>
      </tr>
    </thead>
    <tbody>
        <?php
        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)){
                // $inter = "Yes";
                // if($row["interested"] == 0){
                    // $inter = "No";
                // }
                $date = date("j, n, Y", strtotime($row["time"]));
                echo '<tr>
                        <td>'.$row["id"].'</td>
                        <td>'.$row["first_name"].'</td>
                        <td>'.$row["last_name"].'</td>
                        <td>'.$row["email"].'</td>
                        <td>'.$date.'</td>
                        <!-- <td>
                            <Button class="btn btn-success" >Accept</button>
                            <Button class="btn btn-warning" >Waitlist</button>
                            <Button class="btn btn-danger" >Delete</button>
                        </td> -->
                    </tr>';
            }
        }
        ?>
    </tbody>
  </table>

<?php

//include(SHARED_PATH.'/footer.php'); ?>
