<?php

//Get,Post,Request-both use
//echo'<pre>';
$Stu_name = $_POST['name'];
$Stu_email = $_POST['email'];
$Stu_age = $_POST['age'];

echo"Name is: " . $Stu_name . "<br>";
echo"<br>";
//echo"Name is:  $Stu_name  <br>";

echo"Email is:" . $Stu_email . "<br>";
echo"<br>";

echo"Age is: ". $Stu_age . "<br>";

if($Stu_age >=18)
{
    echo"<h1 style = 'color:green'> You can good </h1> <br>";
}
else
{
    echo"<h1 style = 'color:red'> You can bad </h1> <br>";
}
?>