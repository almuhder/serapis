<?php
  //
  define('PRIVATE_PATH', dirname(__FILE__));
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  define("PUBLIC_PATH", PROJECT_PATH . '/public');
  define("SHARED_PATH",  PRIVATE_PATH . '/shared');
?>
<?php //require(SHARED_PATH."/header.php"); ?>
<?php require(PRIVATE_PATH."/classes/Candidate.php"); ?>
<?php require(SHARED_PATH."/functions.php"); ?>
<?php
  // echo "dsfsfd";
//   $db = new Database();
//   $conn = $db->db_connect();
//
//
// $c = new Candidate();
//   $name = "Ahmad";
//   $last = "Awad";
//   $email ="ahmad@rbk.org";
//
//   $c->delete($conn,14);
//
//
//   $candidate = new Candidate();
//   // get all the candidates
//   $result = $candidate->getAll($conn);
//   echo ' <h1 class="text-center"> List of Candidates</h1>';
//   echo '<table class="table table-hover">';
//   if(mysqli_num_rows($result) > 0){
//       while ($row = mysqli_fetch_assoc($result)){
//         echo '<tr>
//                 <td>'.$row["id"].'</td>
//                 <td>'.$row["first_name"].'</td>
//                 <td>'.$row["last_name"].'</td>
//                 <td>'.$row["email"].'</td>
//                 <td>'.$row["time"].'</td>
//             </tr>';
//       }
//   }
// echo '</table>';
//
//
//
// die();
// echo "<br>";
// $cand = new Candidate();
// $result = $cand->getById($conn,2);
// if(mysqli_num_rows($result) > 0){
//     while ($row = mysqli_fetch_assoc($result)){
//       echo '<tr>
//               <td>'.$row["id"].'</td>
//               <td>'.$row["first_name"].'</td>
//               <td>'.$row["last_name"].'</td>
//               <td>'.$row["email"].'</td>
//               <td>'.$row["time"].'</td>
//           </tr>';
//     }
//   }
?>
