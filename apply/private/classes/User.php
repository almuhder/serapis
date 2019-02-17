<?php //include(PRIVATE_PATH."/classes/Database.php");?>
<?php
class User{
  public $id;
  public $username;
  public $password;
  public $role_id;



  function __construct() {
      // echo 'The class "', __CLASS__, '" was initiated!<br />';
  }

  function login($username, $password){
    $sql = "SELECT * FROM tbl_users WHERE username= ". $username;
    echo $sql;
    $result =  mysqli_query($conn, $sql);
    return $result;

  }
  function logout(){

  }
  function getAll($conn){
    // return all candidates
    $sql = "SELECT * FROM tbl_users;";
    $result =  mysqli_query($conn, $sql);
    return $result;
  }

  function getById($conn,$id){
    // return all the data for this candidate
    $sql = "SELECT * FROM tbl_users WHERE id= ". $id;
    echo $sql;
    $result =  mysqli_query($conn, $sql);
    return $result;
  }

  function add($conn, $username, $password, $role_id){
    // add this candidate info to database
    $sql = "INSERT INTO tbl_users".
             "(username, password, role_id)".
             " VALUES ('"
             .$username."', '"
             .$password."','"
             .$role_id."')";
      if($conn->query($sql) === FALSE){
        return false;
      }
      return true;
  }

  function delete($conn, $id){
    // add this candidate info to database
    $sql = "DELETE FROM tbl_candidates WHERE id= " . $id;
    if($conn->query($sql) === TRUE){
      echo "New Candidates was Deleted successfully!";
    }else {
      echo "Error: " . $sql . " <br> ". $conn->error;
    }
  }

  function update($conn, $id, $first_name, $last_name, $email){
    // add this candidate info to database
    $sql = "UPDATE tbl_users SET username= '" . $username
          . "' , passowrd = '" . $password
          . "' , role_id = " . $role_id
          . " WHERE id =" . $id;
    if($conn->query($sql) === TRUE)
      echo "The User with id: {$id} was updated successfully!";
    else {
      echo "Error: " . $sql . " <br> ". $conn->error;
    }
  }
}
?>
