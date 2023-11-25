<!DOCTYPE html>
<html>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>

<?php
$db=mysqli_connect("localhost","root","","sam_0039_jumail");

if (!$db) {
    die("Error: " . mysqli_connect_error());
} else {
    echo "Connected";
}

$employee_id=$_POST['employee_id'];
$name=$_POST['name'];
$email = $_POST['email'];
$contact_number = $_POST['contact_number'];
$basic_salary = $_POST['basic_salary'];
$ot = $_POST['ot'];
$allowance=$_POST['allowance'];

$department=$_POST['department'];
//$statas=$_POST['statas'];
//$qualification=$_POST['qualification'];

$run2="UPDATE tbl_sam_0039_jumail SET employee_id='$employee_id',name='$name',email='$email',contact_number='$contact_number',basic_salary='$basic_salary',ot='$ot',allowance='$allowance',department='$department' 
      WHERE employee_id='$employee_id'";

if (!mysqli_query($db, $run2)) 
{
    die("Update error: " . mysqli_error($db));
} 
else 
{
    echo "Successfully Updated";
}


?>
    
</body>
</html>
