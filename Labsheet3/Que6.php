<html>
    <head> </head>
<body>
    <?php

    define('EPF_PERCENTAGE', 0.08); 

    $basicSalary = 1000; 
    $deductions = $basicSalary * EPF_PERCENTAGE;

    echo "Deductions = Basic * EPF ". "<br>";
    echo $deductions. "=". $basicSalary . "+" . EPF_PERCENTAGE;

    ?>

</body>
</html>