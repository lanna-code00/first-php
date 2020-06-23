<?php
  class constructMe{
      function __construct(){
          $serverside = "localhost";
          $username = "root";
          $password = "";
          $databaseName = "prepare_table";
          $this->conn = new mysqli($serverside, $username, $password,$databaseName );
        //   if($this->conn->connect_error){
        //       die('it is not working');
        //   }


      }

      public function saveToData($firstname, $lastname, $phone){
          $this->statement = $this->conn->prepare("INSERT INTO pptable (firstname, lastname, phone) VALUES(?, ?, ?)");
          $this->statement->bind_param('sss', $firstname, $lastname, $phone);
          $this->statement->execute();
      }
  }
  $anything = new constructMe;

  $firstname = $_GET['firstname'];
  $lastname = $_GET['lastname'];
  $phone = $_GET['phone'];
  
  $anything->saveToData($firstname, $lastname, $phone);
?>