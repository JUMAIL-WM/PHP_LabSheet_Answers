<html>
<head>
<title>Student Registration</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<style>
    table{
        width: 350px;
    }
</style>

</head>

<body>
<?php
$name=$_POST['name'];
$reg_no = $_POST['reg_no'];
$email = $_POST['email'];
$contact_no = $_POST['contact_no'];
$gender = $_POST['gender'];
$course = $_POST['course'];
$subject=$_POST['subject'];
$semester=$_POST['semester'];

$query1="Insert into student_db1 VALUES('$reg_no','$name','$email','$contact_no','$gender','$course','$subject','$semester')";
//"INSERT INTO student_db1 (reg_no,name,email,contact_no,gender,course,subject,semester) 
//VALUES('$reg_no','$name','$email','$contact_no','$gender','$course','$subject','$semester')"	;
	
$db=mysqli_connect("localhost","root","","student_db");

$run=mysqli_query($db,$query1);
	
// 	if($run){
// 		echo"done";
// 	}
// 	else{
// 		echo"error";
// 	}

// if (!$db)
// {
// 	die ("error".mysqli_connect_error());
// }

// else{
// 	echo"connected";
// }


$query2="SELECT * from student_db1 ";

$run2=mysqli_query($db,$query2);

$result_check=mysqli_num_rows($run2);

if ($result_check > 0)

{

	echo "<div class='container container-fluid mt-5'>";
    echo "<table border='1' class='table table-hover'>";
	// echo "<table border='1' cellspacing='0'>";
	echo " <tr> <th> Reg No </th> <th> Name </th> <th> Email </th> <th> Contact No </th> <th> Gender </th> <th> Course </th> <th> Subject </th> <th> Semester </th> </tr>";
	while ($row=mysqli_fetch_assoc($run2))
	{
		echo "<tr> <td>".$row['reg_no']; echo "</td>";
		echo "<td> ".$row['name'];echo "</td>";
		echo "<td> ".$row['email'];echo "</td>";
		echo "<td> ".$row['contact_no'];echo "</td>";
		echo "<td> ".$row['gender'];echo "</td>";
		echo "<td> ".$row['course'];echo "</td>";
		echo "<td> ".$row['subject'];echo "</td>"; 
		echo "<td> ".$row['semester'];echo "</td>
		</tr>";
				
	}
	echo"</table>";
}

?>	
</body>
</html> 