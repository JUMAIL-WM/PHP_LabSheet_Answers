<?php

       if(isset($_POST['update']))
       {
        //    echo'<pre>';
        //    print_r($_POST);
        //    echo'<pre>';
       }

       $name=$_POST['name'];
       $reg_no = $_POST['reg_no'];
       $email = $_POST['email'];
       $contact_no = $_POST['contact_no'];
       $gender = $_POST['gender'];
       $course = $_POST['course'];
       $subject=$_POST['subject'];
       $semester=$_POST['semester'];

       $db=mysqli_connect("localhost","root","","student_db");

       $sql="UPDATE student_db1 
       SET reg_no='$reg_no',name='$name',emil='$email',contact_no='$contact_no',gender='$gender',course='$course',subject='$subject',semester='$semester' 
       WHERE reg_no='$reg_no'";

       if(!mysqli_query($db,$sql))
       {
         die('Update Error'.mysqli_error($db));
       }
       else
       {
        echo"Student update successfully! <br>";
       }

       $query2="SELECT * from student_db1 ";

       $run2=mysqli_query($db,$query2);

       $result_check=mysqli_num_rows($run2);	

    if ($result_check > 0)
    {
	echo "<div class='container container-fluid mt-5 '>";
    echo "<table  class='table table-hover'>";
    
	echo " <tr class='table-danger'> <th> Reg No </th> <th> Name </th> <th> Email </th> <th> Contact No </th> <th> Gender </th> <th> Course </th> <th> Subject </th> <th> Semester </th> </tr>";
	while ($row=mysqli_fetch_assoc($run2))
	{
		echo "<tr class='table-warning'> <td>".$row['reg_no']; echo "</td>";
		echo "<td> ".$row['name'];echo "</td>";
		echo "<td> ".$row['email'];echo "</td>";
		echo "<td> ".$row['contact_no'];echo "</td>";
		echo "<td> ".$row['gender'];echo "</td>";
		echo "<td> ".$row['course'];echo "</td>";
		echo "<td> ".$row['subject'];echo "</td>"; 
		echo "<td> ".$row['semester'];echo "</td>
		</tr>";
				
	}
       echo"</table>";
   }

?>
