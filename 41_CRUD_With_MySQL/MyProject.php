<?php

include("config.php");

class Student{
  private $pdo;
  function __construct($pdo){
    $this->pdo = $pdo;
  }

  public function insertData($name, $age, $email, $password) {
    try {
        $query = "INSERT INTO students (`name`, `age`, `email`, `password`) VALUES (:name, :age, :email, :password)";
        $action = $this->pdo->prepare($query);
        $action->execute([
          'name' => $name,
          'age' => $age,
          'email' => $email,
          'password' => $password
        ]);
        echo "Data inserted successfully";
    } catch (PDOException $e) {
        throw new Exception("Insert failed: " . $e->getMessage());
    }
  }
 
  public function readData(){
    try{
      $query = "SELECT * FROM students";
      $action = $this->pdo->prepare($query);
      $action->execute();
      $result = $action->fetchAll();
      echo "<pre>";
      print_r($result);
      echo "</pre>";
    }
    catch(PDOException $ex){
      throw new Exception("Reading data failed :".$ex->getMessage());
    }
  }

  public function updateData($name, $age, $id){
    try{
      $query = "UPDATE students 
      SET `name`=:name, `age`=:age 
      WHERE `id`=:id
      ";

      $action = $this->pdo->prepare($query);
      $action->execute([
        'name' => $name,
        'age' => $age,
        'id' => $id
      ]);
      if($action->rowCount() > 0){
        echo "Data updated successfully";
      }else{
        throw new Exception("No student found with ID : ".$id);
      }
    }
    catch(PDOException $ex){
      throw new Exception("Failed to update : ".$ex->getMessage());
    }
  }

  public function deleteData($id){
    try{
      $query = "DELETE FROM students WHERE `id`=:id";

      $action = $this->pdo->prepare($query);
      $action->execute([
        'id' => $id
      ]);
      if($action->rowCount() > 0){
        echo "Data deleted successfully";
      }else{
        throw new Exception("No student found with ID : ".$id);
      }
    }
    catch(PDOException $ex){
      throw new Exception("Failed to update : ".$ex->getMessage());
    }
  }

}


if(count($_POST) > 0) {
  $student = new Student($pdo);
  if($_POST["action"]=="submit"){
    $student->insertData($_POST["name"],$_POST["age"], $_POST["email"], $_POST["password"]);
  }
  else if($_POST["action"] =="read"){
    $student->readData();
  }
  else if($_POST["action"] =="update"){
    $student->updateData($_POST["updatedName"],$_POST["updatedAge"],$_POST["id"]);
    
  }
  else if($_POST["action"] =="delete"){
    $student->deleteData($_POST["id"]);
    
  }
}
?>