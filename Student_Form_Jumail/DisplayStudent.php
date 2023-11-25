<html>
<head>
<title>Student Registration</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<style>
    
</style>

</head>

<body>
<?php
	
$db=mysqli_connect("localhost","root","","student_db");

$query2="SELECT * from student_db1 ";

$run2=mysqli_query($db,$query2);

$result_check=mysqli_num_rows($run2);	

if ($result_check > 0)
{
	echo "<div class='container container-fluid mt-5 '>";
    echo "<table  class='table table-hover'>";
    
	echo " <tr class='table-danger'> <th> Reg No </th> <th> Name </th> <th> Email </th> <th> Contact No </th> <th> Gender </th> <th> Course </th> <th> Subject </th> <th> Semester </th> </tr>";
	while ($row=mysqli_fetch_assoc($run2))
	{
		echo "<tr class='table-warning'> <td>".$row['reg_no']; echo "</td>";
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