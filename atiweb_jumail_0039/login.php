<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Lecturer Login</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <label for="">Email</label>
        <input type="text" name="email"><br>
        <label for="">password</label>
        <input type="password" name="password">
        <input type="submit" value="login" id="">
    </form>
</body>
</html>
<?php

session_start();

$con=mysqli_connect("localhost","root","","ati_web");

if(!$con){
    die("Connection failed: ".mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST["email"];
    //echo $email;
    $password=$_POST["password"];

    $sql="SELECT * FROM lecture WHERE email='$email'";
    //echo $sql;
    $result=mysqli_query($con,$sql);

    if($result && mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);

        if(password_verify($password,$row["Password"])){
            $_SESSION["email"]=$email;
            header("location:dashboard.php");
        }
        else{
            echo "Invalid password";
        }
    }else{
        echo "invalid email";
    }
}

?>