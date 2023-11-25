<?php 

$marks = 68;

if($marks >= 90)
{
    $grade = "A";

}
elseif($marks >= 80)
{
    $grade = "B";
}
elseif($marks >= 70)
{
    $grade = "C";
}
elseif($marks >= 60)
{
    $grade = "D";
}
else
{
    $grade = "F";
}

echo "Your grade is:" .$grade;
?>