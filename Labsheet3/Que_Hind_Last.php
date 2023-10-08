<html>
    <head> </head>
<body>
    <?php

    define('EPF_PERCENTAGE', 0.08); 

    $employeeNumber = "EMP001";
    $employeeName = "Kamal Gunarathna";
    $basicSalary = 25000.00;
    $grossSalary = $basicSalary + ($basicSalary * EPF_PERCENTAGE);
    $netSalary = $grossSalary - ($basicSalary * EPF_PERCENTAGE);


   echo "<h1>Employee Details</h1>\n";
   
   printf("Employee Number:  %s<br>", $employeeNumber) ."<br>";
   printf("Employee Name:    %s<br>", $employeeName)."<br>";
   printf("Basic Salary:     Rs. %7.2f<br>", $basicSalary)."<br>";
   printf("Gross Salary:     Rs. %7.2f<br>", $grossSalary."<br>");
   printf("Net Salary:       Rs. %7.2f<br>", $netSalary)."<br>";

   ?>
   

</body>
</html>