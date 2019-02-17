<?php include SHARED_PATH.'/config.php'; ?>


<?php
class Database {
  protected $db_name   = DB_NAME;
  protected $server    = SERVER;
  protected $username  = DB_USERNAME;
  protected $password  = DB_PASSWORD;
  protected $link;

  function __construct() {
        // echo "In BaseClass constructor\n";
        // echo 'The class "', __CLASS__, '" was initiated!<br />';
        $this->db_connect();
  }

  function db_connect(){
      $link = mysqli_connect($this->server, $this->username, $this->password, $this->db_name) or die("Couldn't connect");;
      mysqli_set_charset($link,"utf8");
      return $link;
  }

  function db_close(){
    if($this->link != false){
      mysqli_colse($link);
    }
  }
}
?>
