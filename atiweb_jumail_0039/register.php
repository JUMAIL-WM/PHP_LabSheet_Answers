<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer Register</title>
</head>
<body>
    <h2>Lecturer Register</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <label for="">Name in Full: </label>
    <input type="text" name="name"> <br><br>
    <label for="">Email: </label>
    <input type="email" name="email"> <br><br>
    <label for="">Designation: </label>
    <select name="designation" id="">
        <option value="">Select Designation</option>
        <option value="Assistance_Lecturer">Assistance Lecturer</option>
        <option value="Lecturer">Lecturer</option>
        <option value="Senior_Lecturer I">Senior Lecturer I</option>
        <option value="Senior_Lecturer II">Senior Lecturer II</option>
    </select> <br><br>
    <label for="">Course: </label>
    <select name="course" id="">
        <option value="">Select the Course</option>
        <option value="1">HNDIT</option>
        <option value="2">HNDE</option>
        <option value="3">HNDA</option>
        <option value="4">HNDM</option>
        <option value="5">HNDATHM</option>
    </select> <br><br>
    <label for="">Gender: </label>
    <input type="radio" name="gender" value="Male" id="" required>Male
    <input type="radio" name="gender" id=" " value="Female" required>Female <br><br>
    <label for="">Password: </label>
    <input type="password" name="password" required> <br><br>
    <input type="submit" value="Registers">
    </form>
  
</body>
</html>

<?php

$servername="localhost";
$username = "root";
$password="";
$dbname="ati_web";

$con=mysqli_connect($servername,$username,$password,$dbname);

if(!$con){
    die("Connection Failed".mysqli_connect_error());

}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $designation=$_POST["designation"];
    $course=$_POST["course"];
    $gender=$_POST["gender"];
    $password=password_hash($_POST["password"],PASSWORD_DEFAULT);

    $sql="INSERT INTO lecture(Name,Email,Designation,CourseID,Gender,Password)VALUES
    ('$name','$email','$designation','$course','$gender','$password')";

    if(mysqli_query($con,$sql)){
        echo "<script>alert('Registration Successful');window.location='login.php';</script>";
    }
    else{
        echo "Error: ".mysqli_error($con);
    }
}

mysqli_close($con);


?>