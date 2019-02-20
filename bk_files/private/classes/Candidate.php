<?php
class Candidate{
  public $id;
  public $first_name;
  public $last_name;
  public $email;
  public $time = null;


  function __construct() {

  }

  function getAll($conn){
    // return all candidates
    $sql = "SELECT * FROM tbl_candidates";
    $result =  mysqli_query($conn, $sql);
    return $result;
  }

  function getById($conn,$id){
    // return all the data for this candidate
    $sql = "SELECT * FROM tbl_candidates WHERE id= ". mysqli_real_escape_string($conn, $id);
    echo $sql;
    $result =  mysqli_query($conn, $sql);
    return $result;
  }

  function add($conn, $first_name, $last_name, $email){
    // add this candidate info to database
    $sql = "INSERT INTO tbl_candidates".
             "(first_name, last_name, email)".
             " VALUES ('"
             .$first_name."', '"
             .$last_name."','"
             .$email."')";
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
    $sql = "UPDATE tbl_candidates SET first_name= '" . $first_name
            . "' , last_name = '" . $last_name
            . "' , email = '" . $email
            . "' WHERE id =" . $id;

      if($conn->query($sql) === TRUE)
        echo "The Candidate with id: {$id} was updated successfully!";
        else {
          echo "Error: " . $sql . " <br> ". $conn->error;
        }
  }

}



?>
