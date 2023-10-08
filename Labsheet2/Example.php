<!DOCTYPE html>
<html>
<head>
    <title> Jumail Calculation</title>
</head>
<body>
    <?php
    
    $regno = 39;  
    $name = "Jumail"; 
    $age = 22;
    $gpa = 3.8;
    
    ?>

    <table border="1" width="20%">
        
        <tr>
            <td> Reg.No </th>
            <td> <?php echo $regno; ?> </td>
        </tr>
        <tr>
            <td> Name </td>
            <td> <?php echo $name; ?> </td>
        </tr>
        <tr>
            <td> Age </td>
            <td> <?php echo $age; ?> </td>
        </tr>
        <tr>
            <td> GPA </td>
            <td> <?php echo $gpa; ?> </td>
        </tr>

       
    </table>
</body>
</html>
