<html>
    <head> </head>
<body>
    <?php

    define('EPF_PERCENTAGE', 0.08); 

    $basicSalary = 1000;
    $grossSalary = 2000; 
    $deductions = $basicSalary * EPF_PERCENTAGE;


    $netSalary = $grossSalary - $deductions;
    
    echo "Net Salary = Gross - Deducation " . "<br>";
    echo $netSalary . "=". $grossSalary. "+". $deductions;

    ?>

</body>
</html>