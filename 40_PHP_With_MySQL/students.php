<?php

include("./config.php");

class Student{
  private $DBConnection;
  
  function __construct($conn){
    $this->DBConnection = $conn;
  }

  function getStudents(){
    $studentsData = $this->DBConnection->prepare("SELECT * FROM customers");
    $studentsData->execute();
    $result = $studentsData->fetchAll();
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";
    foreach($result as $data){
      echo "<pre>";
      print_r($data);
      echo "</pre>";
    };
  }

}

$student1 = new Student($connection);
$student1->getStudents();

?>