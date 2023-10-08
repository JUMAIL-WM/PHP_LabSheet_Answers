<html>
    <head> </head>
<body>
    <?php

    $employee_number = "Emp001";
    $employee_name = "Mohammed Jumail";
    $date_of_appointment = "2023-10-02";
    $basic_salary = 50000.00;  
    $cost_of_living_allowance = 3000.00;  


    $gross_salary = $basic_salary + $cost_of_living_allowance;


    echo "Employee Number: $employee_number<br>";
    echo "Employee Name: $employee_name<br>";
    echo "Date of Appointment: $date_of_appointment<br>";
    echo "Basic Salary: $basic_salary<br>";
    echo "Cost of Living Allowance: $cost_of_living_allowance<br>". "<br>";

    echo "Gross Salary = Basic Salary + Cost of Allowance <br>";
    echo  $gross_salary . "=" .$basic_salary."+" .$cost_of_living_allowance. "<br>";

    ?>

</body>
</html>