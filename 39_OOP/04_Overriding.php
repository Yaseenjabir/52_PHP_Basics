<?php

class Teacher{
  protected $name = "Khan";
  protected $profession = "Teacher";

  function speakAbout(){
    echo "My name is $this->name, my profession is $this->profession.";
  }

}

$teacher1 = new Teacher();
$teacher1->speakAbout();
echo "<br />";
class Student extends Teacher{
  protected $name = "Afaan";
  protected $profession = "Student";
}

$student1= new Student();
$student1->speakAbout();

?>