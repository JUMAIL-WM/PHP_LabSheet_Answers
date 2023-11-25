<?php

$Student_name = $_POST['name'];
$Student_regno = $_POST['regno'];
$Student_email = $_POST['email'];
$Student_contactno = $_POST['contactno'];
$Student_Gender = $_POST['gender'];
$Student_course = $_POST['course'];
$Student_Subject = $_POST['Subject'];
$Student_semester = $_POST['semester'];

echo"Name is:  $Student_name  <br>";
echo"Reg.No is:  $Student_regno  <br>";
echo"Email is:  $Student_email  <br>";
echo"Contact No is:  $Student_contactno  <br>";
echo"Gender is:  $Student_Gender  <br>";
echo"Course is:  $Student_course  <br>";

echo"Semester is:  $Student_semester  <br>";

foreach($Student_Subject as $sub){
    print " subjects : $sub <br>";
}

?>