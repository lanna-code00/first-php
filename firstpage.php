<?php
require 'process.php';
  $name = $_GET['myName'];
  $department = $_GET['department'];
  $phone = $_GET['phone'];
  $email = $_GET['email'];




  $newStudent = new Student;
  // $newStudent->connection();
  // $newStudent->studentInsert($name,  $department,   $phone, $email);
  $newStudent->fetchStudents($name,  $department,   $phone, $email);
?>