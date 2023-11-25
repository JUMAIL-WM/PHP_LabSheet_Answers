<html>
<head>
<title> employee-PHP</title>
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
$employee_id=$_POST['employee_id'];
$name=$_POST['name'];
$email = $_POST['email'];
$contact_number = $_POST['contact_number'];
$basic_salary = $_POST['basic_salary'];
$ot = $_POST['ot'];
$allowance=$_POST['allowance'];
$total=$basic_salary+$allowance+$ot;
$department=$_POST['department'];
$statas=$_POST['statas'];
$qualification=$_POST['qualification'];

//$qualification= isset($_POST['qualification']) ? implode(",", $_POST["qualification"]): "" ;


$db=mysqli_connect("localhost","root","","sam_0039_jumail");

$query1="INSERT into tbl_sam_0039_jumail VALUES('$employee_id','$name','$email','$contact_number','$basic_salary','$ot','$allowance','$total','$department','$statas','$qualification')";

$run=mysqli_query($db,$query1);
	
if($run){
 		echo"Data Successfully Added";
 	}
	else{
		echo"Not added";
	}

// if (!$db)
// {
// 	die ("error".mysqli_connect_error());
// }

// else{
// 	echo"connected";
// }


// $query2="SELECT * from tbl_sam_0039_jumail ";

// $run2=mysqli_query($db,$query2);

// $result_check=mysqli_num_rows($run2);

// if ($result_check > 0)

// {
// 	//echo "<form action='update.php method='GET'>";
// 	echo "<div class='container container-fluid mt-5'>";
//     echo "<table border='1' class='table table-hover'>";

// 	echo " <tr class='table-success'> <th> Employee ID </th> <th> Name </th> <th> Email </th> <th> Contact Number </th> <th> Basic Salary </th> <th> OT </th> <th> Allowance </th> <th> Totall </th> <th> Department </th> <th> Statas </th> <th> Qualifications </th> <th> Action </th> <th> Action </th> </tr>";
// 	while ($row=mysqli_fetch_assoc($run2))
// 	{
// 		echo "<tr class='table-info'> <td>".$row['employee_id']; echo "</td>";
// 		echo "<td> ".$row['name'];echo "</td>";
// 		echo "<td> ".$row['email'];echo "</td>";
// 		echo "<td> ".$row['contact_number'];echo "</td>";
// 		echo "<td> ".$row['basic_salary'];echo "</td>";
// 		echo "<td> ".$row['ot'];echo "</td>";
// 		echo "<td> ".$row['allowance'];echo "</td>"; 
//         echo "<td> ".$row['total_salary'];echo "</td>"; 
//         echo "<td> ".$row['department'];echo "</td>"; 
//         echo "<td> ".$row['statas'];echo "</td>"; 
// 		echo "<td> ".$row['qualification'];echo "</td>";
// 		echo "<td> <a href='update.php'> <input type='submit' value='Update' class='btn btn-primary'> </a> </td> 
//               <td> <a href='delete.php'> <input type='submit' value='Delete' class='btn btn-danger'> </a> </td> 

// 			  </tr>";
				
// 	}
// 	echo"</table>";
	
// }

?>	
</body>
</html> 