<?php
  require 'process.php';
  $email = $_GET['myMail'];
  $anotherStudent = new Student;
  $anotherStudent->fetchFromDb($email)
?>