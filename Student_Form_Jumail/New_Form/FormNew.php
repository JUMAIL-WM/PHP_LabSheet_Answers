<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <?php

$reg_no = $_POST['reg_no'];
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];

//database connect
$db = mysqli_connect("localhost","root","","formnew");

//insert database values
$ins = "INSERT INTO tbl_form VALUES ('$reg_no','$name','$email','$contact','$gender')";


$run = mysqli_query($db,$ins);


//check the db connection
// if($db)
// {
// 	echo"done";
// }
// else
// {
//     echo"error";
// }
  
// echo"<br>";


//check the run
// if (!$run)
// {
//     die ("error".mysqli_connect_error());
// }
    
// else
// {
//     echo"connected";
// }


//select form all table data
$sel = "SELECT * FROM tbl_form";

$quarry = mysqli_query($db,$sel);

$result_check = mysqli_num_rows($quarry);

if($result_check > 0)
{
    echo "<div class='container container-fluid'>";
    echo "<table border='1' class='table table-hover'>";
    //echo"<table border = '1'>";
    echo"<tr> 
         <th> Reg No </th>
         <th> Name </th>
         <th> Email </th>
         <th> Contact </th>
         <th> Gender </th>
        </tr>";


    while($row = mysqli_fetch_assoc($quarry))
    {
       echo"<tr> 
            <td> ".$row['reg_no']." </td>
            <td> ".$row['name']." </td>
            <td> ".$row['email']." </td>
            <td> ".$row['contact']." </td>
            <td> ".$row['gender']." </td>
           </tr>";
    }
}
echo"</table>";

?>
    
  </body>
</html>

