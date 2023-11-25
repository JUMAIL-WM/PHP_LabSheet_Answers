<?php

session_start();
$db=mysqli_connect("localhost","root","","student_db");

if(!$db)
{
    die("Connection failed:". mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE name='$username' && password='$password'";
    $result = mysqli_query($db,$sql);

    if(mysqli_num_rows($result)==1)
    {
        echo"<script>alert('Login Successfully..!'); window.location.href='StudentRecords.html';</script>";
    }
    else
    {
        echo"Error in query:".mysqli_error($db);
    }
}

?>