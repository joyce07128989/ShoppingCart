<?php

class connect{
 
  protected $servername = "172.17.0.2";
  protected $username = "root";
  protected $password = "123";

  public function link_db (){

      // Create connection
      $conn = new mysqli($this -> servername, $this -> username, $this -> password);
  
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        return null; //?? connect fail 回傳null
      }
      else{
        // echo "Connected successfully";
        return $conn; //connect success 回傳mysqli object $conn okok
      }
  }
}
?>