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

       echo "Employee Number &nbsp; $employeeNumber"."<br>";

      echo "Employee Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   $employeeName"."<br>";

      echo "Basic Salary  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       Rs. " . number_format($basicSalary, 2) . "<br>";

      echo "Gross Salary  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Rs. " . number_format($grossSalary, 2) . "<br>";

     echo "Net Salary &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Rs. " . number_format($netSalary, 2) ."<br>";


    ?>

</body>
</html>