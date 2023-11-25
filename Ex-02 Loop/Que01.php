<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

function checkOddEven($number) 
{
    if ($number % 2 == 0) 
    {
        echo "$number is even.";
    } 
    else 
    {
        echo "$number is odd.";
    }
}

$number = 7;
checkOddEven($number);
?>


</body>
</html>