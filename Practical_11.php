<?php
class Student {
public $name;
public $age;
function showDetails() {
echo "Student Name: " . $this->name . "<br>";
echo "Student Age: " . $this->age . "<br>";
}
}
$stud1 = new Student();

$stud1->name = "Rahul";
$stud1->age = 20;
$stud1->showDetails();
?>