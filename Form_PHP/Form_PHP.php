<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit']))
    {
        echo'<pre>';
        print_r($_POST);
        echo'<pre>';

        $name = $_POST['name'];
        $reg_no = $_POST['reg_no'];
        $email = $_POST['email'];
        $contact_no = $_POST['contact_no'];
        $gender = $_POST['gender'];
        $course = $_POST['course'];
        $subjects = implode(', ' ,$_POST['subject']);
        $semesters = implode(', ' ,$_POST['semesters']);

        echo "Name : $name <br>";
        echo "Registration No : $regno <br>";
        echo "Email : $email <br>";
        echo "Contact No : $contact_no <br>";
        echo "Gender : $gender <br>";
        echo "Course : $course <br>";
        echo "Subjects : $subjects <br>";
        echo "Semesters : $semesters <br>";
        
    }


    ?>
</body>
</html>