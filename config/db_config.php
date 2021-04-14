<?php
class my_DB {
  private $host="";
  private $user="";
  private $password="";
  private $db_name="";
  public $conn;


  public function getConnect(){
    $this->conn = null;

    try {
      $this->conn=new PDO("mysql:host=" . $this->host , ";dbname=" . $this->db_name, $this->user, $this->password);
    } catch(PDOException $exception) {
      echo "Ошибка соединения: " . $exception->getMessage();
    }
    return $this->conn;
  }


}




 ?>
