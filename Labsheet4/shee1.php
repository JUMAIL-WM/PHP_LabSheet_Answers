<?php

$hour = date("H");

if ($hour >= 5 && $hour < 12) 
   {
    echo "Good morning!";
   } 
elseif ($hour >= 12 && $hour < 17) 
   {
    echo "Good afternoon!";
   } 
elseif ($hour >= 17 && $hour < 20) 
   {
    echo "Good evening!";
   } 
else 
   {
    echo "Good night!";
   }

?>
