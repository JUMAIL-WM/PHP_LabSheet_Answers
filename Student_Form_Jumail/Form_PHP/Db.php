<?php

//connect mysql
$con= mysqli_connect("localhost", "root", "");

//check the connection
if(!$con)
{
	die('connection error'.mysqli_connect_error($con));
}
else
{
	echo "Connected successful <br>";
}

//create database - db_student
$sql="CREATE DATABASE IF NOT EXISTS db_student";
$result=mysqli_query($con,$sql);

//check the query
if(!$result)
    {
	die('database creation error'.mysqli_error($con));
    }
else
   {
	echo "database created successfully<br>";
   }

mysqli_select_db($con,"db_student");

$sql = "CREATE TABLE IF NOT EXISTS tbl_student(
    reg_no varchar(10) PRIMARY KEY,
    name varchar(100) not null,
    email varchar(100) not null,
    contact_no varchar(1)

)";

if(mysqli_query($con,$sql))
{
    die('Table creation error'.mysqli_error($con));

}
else{
    echo"Table created successfully <br>";
}


?>