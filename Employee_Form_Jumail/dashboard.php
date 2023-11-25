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
	
	//$employee_id=$_POST['employee_id'];

$db=mysqli_connect("localhost","root","","sam_0039_jumail");

$query2="SELECT * from tbl_sam_0039_jumail ";

$run2=mysqli_query($db,$query2);

$result_check=mysqli_num_rows($run2);	

if ($result_check > 0)

{

	echo "<div class='container container-fluid mt-5'>";
    echo "<table border='1' class='table table-hover'>";

	echo " <tr class='table-success'> <th> Employee ID </th> <th> Name </th> <th> Email </th> <th> Contact Number </th> <th> Basic Salary </th> <th> OT </th> <th> Allowance </th> <th> Totall </th> <th> Department </th> <th> Statas </th> <th> Qualifications </th> <th> Action </th> <th> Action </th> </tr>";
	while ($row=mysqli_fetch_assoc($run2))
	{
		$id=$row['employee_id'];
		$name=$row['name'];
		$email=$row['email'];
		$contact_number=$row['contact_number'];
		$basic_salary=$row['basic_salary'];
		$ot=$row['ot'];
		$allowance=$row['allowance'];
		$total_salary=$row['total_salary'];
		$department=$row['department'];
		$statas=$row['statas'];
		$qualification=$row['qualification'];

		echo '<tr class="table-info"> 
		
			<td> '.$id.' </td>
			<td> '.$name.' </td>
			<td> '.$email.' </td>
			<td> '.$contact_number.' </td>
			<td> '.$basic_salary.' </td>
			<td> '.$ot.' </td>
			<td> '.$allowance.' </td>
			<td> '.$total_salary.' </td>
			<td> '.$department.' </td>
			<td> '.$statas.' </td>
			<td> '.$qualification.' </td>
		
			<td>
				<button class= "btn btn-primary"> <a href ="edit.php? updateid='.$id.'" class="text-light"> Update </a> </button>
				
			</td>
			
			<td>
			<button class="btn btn-danger"> <a href ="delete.php? deleteid='.$id.'" class="text-light"> Delete </a> </button>
			</td>
		
		</tr>';

		
	}
	echo"</table>";
}

?>	
</body>
</html> 