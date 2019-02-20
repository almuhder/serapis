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
        <th style="width:100%; text-align:center;">Action</th>
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
                $id     = $row["id"];
                $name   = $row["first_name"];
                $last   = $row["last_name"];
                $email  = $row["email"];
                echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$last.'</td>
                        <td>'.$email.'</td>
                        <td>'.$date.'</td>
                        <td>
                            <Button class="btn btn-success" >Accept</button>
                            <Button class="btn btn-warning" >Waitlist</button>
                            <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title" id="myModalLabel">Confirm Reject</h4>
                                      </div>
                                      <div class="modal-body">
                                          <p>You are about to reject this candidate, this procedure is irreversible.</p>
                                          <p><b>ID: </b> '.$id.' <br><b>First Name</b> '. $name.'  <br><b>Last Name: </b> '.$last.' <br><b>Email:</b> '.$email.'</p>
                                          <p>Do you want to proceed?</p>
                                          <p class="debug-url"></p>
                                      </div>

                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                          <a class="btn btn-warning btn-ok">Soft</a>
                                          <a class="btn btn-danger btn-ok">Hard</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger" data-href="/delete.php?id='.$id.'" data-toggle="modal" data-target="#confirm-delete">Reject</button>
                        </td>
                    </tr>';

            }
        }
        ?>
    </tbody>
  </table>
