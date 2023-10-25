<?php

    $marks = array(10,20,30,40);
    $mark = 50;

    echo(is_array($marks))? "Is an array": "Is not an array";
    echo"<br>";

    echo(is_array($mark))? "Is an array": "Is not an array";
    echo"<br>";

    echo count($marks);
    echo"<br>";

    echo sizeof($marks);
    echo"<br>";

    sort($marks);
    print_r($marks);
    echo"<br>";

    rsort($marks);
    print_r($marks);
    echo"<br>";

    $temp = array('Hello','World','Beautiful','Day!');
    echo implode(" ", $temp);
    echo"<br>";

    $a1 = array("red","green");
    $a2 = array("blue","yellow");
    print_r(array_merge($a1,$a2));
    echo"<br>";

    $a = array("red","green","blue","yellow","brown");
    print_r(array_slice($a,2));
    echo"<br>";

    $a = array_fill(1,3,"green");
    print_r($a);

?>