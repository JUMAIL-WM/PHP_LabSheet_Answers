<?php

     $num1 = 10;
     $num2 = 5;

     $operator = '+';

switch ($operator) 
  {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        $result = $num1 / $num2;
        break;
    case '%':
        $result = $num1 % $num2;
        break;

    default:
        echo "Invalid operator";
 }

    echo "Result: " . $result;
?>
