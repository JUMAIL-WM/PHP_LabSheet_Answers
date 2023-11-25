<?php

        $reg_no = $_GET['reg_no'];

        $db=mysqli_connect("localhost","root","","student_db");

        $run2=mysqli_query($db,"SELECT * FROM student_db1 WHERE reg_no='$reg_no'");

        $row=mysqli_fetch_assoc($run2);
 ?>



<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Student Registration Form</h1>
<form action="student.php" method="post">
  <p>
    <label for="textfield">Name:</label>
    <input type="text" name="name" id="textfield" value="<?php echo $row['name']; ?>">
  </p>
  <p>
    <label for="regno">Reg. No.:</label>
    <input type="text" name="reg_no" id="regno" value="<?php echo $row['reg_no']; ?>">
  </p>
  <p>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>">
  </p>
  <p>
    <label for="contact_no">Contact No.:</label>
    <input type="text" name="contact_no" id="contact_no" value="<?php echo $row['contact_no']; ?>">
  </p>
  <p>
    Gender: <input type="radio" name="gender" id="radio" value="Male"> Male
    <input type="radio" name="gender" id="radio2" value="Female">
  <label for="gender">Female</label></p>

  <p>
    <label for="course">Course:</label>
    <select name="course" id="course">
	  <option>Select a Course</option>
      <option value="<?php echo $row['course']; ?>" selected> <?php echo strtoupper($row['course']); ?></option>
      <option value="hndit">HNDIT</option>
      <option value="hnda">HNDA</option>
      <option value="hndm">HNDM</option>
    </select>
  </p>
  <p>
    <!--<label for="subject[]">Subject:</label>-->
    <label for="subject">Subject:</label>
    <!--<select name="subject" multiple="MULTIPLE" id="subject[]">-->
      <select name="subject" id="subject">
      <option value="<?php echo $row['subject']; ?>" selected> <?php echo ucfirst($row['subject']); ?></option>
      <option value="maths">Maths</option>
      <option value="physics">Physics</option>
      <option value="chemistery">Chemistry</option>
      <option value="biology">Biology</option>
      <option value="marketing">Marketing</option>
    </select>
  </p>
  <p>
    
  <label for="subject">Semester: </label>
	<input name="semester" type="checkbox"  value="1">
    <input name="semester" type="checkbox"  value="2">
    <input name="semester" type="checkbox"  value="3">
    <input name="semester" type="checkbox"  value="4">
    
  </p>
  <p>
    <input type="submit" name="update" id="submit" value="Update">
  </p>
</form>

</section>
</body>
</html>