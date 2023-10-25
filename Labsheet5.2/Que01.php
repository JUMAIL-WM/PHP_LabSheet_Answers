<?php

    $firstname = "Jumail";
    $FirstName = "My name is Jumail";
    $numseries = "123456789";
    $string = "Hello I am Jumail";
    $password = "Jumail123";

    echo strtoupper($firstname);
    echo"<br>";

    echo strtolower($firstname);
    echo"<br>";

    echo ucfirst($firstname);
    echo"<br>";

    echo ucwords($FirstName);
    echo"<br>";

    echo strlen($FirstName);
    echo"<br>";

    echo strrev($numseries);
    echo"<br>";

    echo str_word_count($string);
    echo"<br>";

    echo md5($password);
    echo"<br>";


?>