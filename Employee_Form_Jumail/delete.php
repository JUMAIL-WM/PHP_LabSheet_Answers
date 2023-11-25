<?php

$db=mysqli_connect("localhost","root","","sam_0039_jumail");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
$employee_id=$_GET['deleteid'];
$query2="DELETE from tbl_sam_0039_jumail WHERE employee_id='$employee_id'";

if ($db->query($query2) === TRUE) {
    echo "<script>location.replace('dashboard.php')</script>";
} else {
    echo "Error deleting record: " . $db->error;
}

$db->close();
?>

