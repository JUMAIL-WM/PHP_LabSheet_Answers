<?php 

$student_list = array

(
  "Kamal"=> array("Name"=>"Kamal", "science"=>75, "Maths"=>89, "English"=>98), 
  "Nimal"=> array("Name"=>"Nimal", "science"=>70, "Maths"=>65, "English"=>67)
);


//echo $student_list["Kamal"]["science"];

echo "<table border=1>";

echo 
     "<tr>

      <th>Name</th>
      <th>science</th>
      <th>Maths</th>
      <th>English</th>

      </tr>"; 

foreach ($student_list as $student) 
{
    echo "<tr>";
    echo "<td>". $student["Name"] ."</td>";
    echo "<td>". $student["science"] ."</td>";
    echo "<td>". $student["Maths"] ."</td>";
    echo "<td>". $student["English"] ."</td>";
    echo "</tr>";
    echo "<br>";
}

echo"</table>";

?>