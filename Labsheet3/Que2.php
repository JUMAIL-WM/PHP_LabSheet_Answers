<html>
    <head></head>
    <body>
        <?php 
        
        $employeeNumber = "EMP001";
        $employeeName = "Jumail.wm";
        $dateOfAppointment = "2023-09-18";
        $basicSalary = 50000;
        $cost = 2000;

        
        define("EMPLOYEE_NAME", "Jumail.wm");
        define("EMPLOYEE_NUMBER", "EMP001");
        define("DATE_OF_APPOINTMENT", "2023-09-18");
        define("BASIC_SALARY", 50000);
        define("COST", 2000);


        echo "Employee Name: " . EMPLOYEE_NAME . "<br>";
        echo "Employee Number: " . EMPLOYEE_NUMBER . "<br>";
        echo "Date of Appointment: " . DATE_OF_APPOINTMENT . "<br>";
        echo "Basic Salary: " . BASIC_SALARY . "<br>";
        echo "Cost: " . COST;

        ?>
    </body>
</html>