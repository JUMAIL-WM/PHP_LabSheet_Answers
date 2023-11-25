<?php

session_start();

if(!isset($_SESSION["email"]))
{
    header("Location:login.php");
    exit();
}

$email=$_SESSION["email"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

<h2>Lecturer Dashboard</h2>
<p>Welcom: <?php echo $email;?></p> 

<a href="logout.php">Logout</a>
</body>
</html>