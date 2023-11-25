<?php

$reg_no = $_POST['reg_no'];
$name = $_POST['name'];
$age = $_POST['age'];


$con = mysqli_connect("localhost","root","","db_student_info");

$sql = "INSERT INTO `tbl_student_info` VALUES ('$reg_no','$name',$age)";

$result = mysqli_query($con,$sql);

// if(!$result){
//     die("Connection error" . mysqli_error($con));
// }else{
//     echo "submitted";
// }


$sql1 = "SELECT * FROM tbl_student_info";

$result2 = mysqli_query($con,$sql1);

if(mysqli_num_rows($result2)>0)
{
    echo "<table border = '1'>";
    echo "<tr> <th> Reg No </th> <th> Name </th> <th> Age </th> </tr>";

    while($row=mysqli_fetch_assoc($result2)){
        echo "<tr> 
        <td>".$row['reg_no']."</td>
        <td>".$row['name']."</td>
        <td>".$row['age']."</td>
        </tr>";
    }
}
else
{
    echo "no return value";
}

echo "</table>"; 

?>
