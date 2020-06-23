<?php

  class Student
  {
    function __construct()
    {
      $this->con =mysqli_connect("localhost","root", "", "school_db");
      if($this->con){
        echo "SUCCESS";
      }else{
        echo "failure";
      }
    }
    // public function connection(){
  
    // }
    public function studentInsert($name, $department, $phone, $email)
    {
      $checkInsert = mysqli_query($this->con,"INSERT INTO student_tb(name, department, phone_No,email) VALUES ('$name',  '$department',   '$phone', '$email')");
      if($checkInsert){
        echo "YOUR DETAILS UPLOADED SUCCESSFULLY";
      }else{
        echo "SOMETHING IS WRONG SOMEWHERE";
      }
    }

    public function fetchStudents()
    {
      $fetchAllStudents = mysqli_query($this->con,"SELECT * FROM  student_tb where student_id = 1");
      if($fetchAllStudents){
          $result =mysqli_fetch_assoc($fetchAllStudents);

          // $res = $fetchAllStudents->fetch_all(MYSQLI_ASSOC);
          echo json_encode($result);
      }else{
        echo "SOMETHING IS WRONG SOMEWHERE";
      }
    }

    public function fetchFromDb($email)
    {
      $resultn = mysqli_query($this->con, "SELECT  CONCAT(name,'', department) as  fullNAme from student_tb where email = '$email'");
      $output = mysqli_fetch_assoc($resultn);
      echo json_encode($output); 
    }
  }
  
?>