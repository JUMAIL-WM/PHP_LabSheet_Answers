<?php

$db=mysqli_connect("localhost","root","","sam_0039_jumail");
$e_id = $_GET['updateid'];
$run2=mysqli_query($db,"SELECT * FROM tbl_sam_0039_jumail WHERE employee_id='$e_id'");
$row=mysqli_fetch_assoc($run2);

?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
<center> <h1>Edit Information Form</h1></center> <br>

<form method="POST" action="employee.php">
<table class="table">
    <tr>
    <td><label for="employee_id">Employee ID:</label></td>
    <td><input type="text" name="employee_id" id="employee_id" class="form-control" value="<?php echo $row['employee_id']; ?>"></td>
    </tr>

    <tr>
    <td><label for="name">Name:</label></td>
    <td><input type="text" name="name" id="name" class="form-control" value="<?php echo $row['name']; ?>"></td>
    </tr>

    <tr>
    <td><label for="email">Email:</label></td>
    <td><input type="text" name="email" id="email" class="form-control" value="<?php echo $row['email']; ?>"></td>
    </tr>

    <tr>
    <td><label for="contact_number"> Contact Number:</label></td>
    <td><input type="text" name="contact_number" id="contact_number" class="form-control" value="<?php echo $row['contact_number']; ?>"></td>
    </tr>

    <tr>
    <td><label for="basic_salary">Basic Salary:</label></td>
    <td><input type="number" name="basic_salary" id="basic_salary" class="form-control" value="<?php echo $row['basic_salary']; ?>"></td>
    </tr>

    <tr>
    <td><label for="ot">OT:</label></td>
    <td><input type="number" name="ot" id="ot" class="form-control" value="<?php echo $row['ot']; ?>"></td>
    </tr>

    <tr>
    <td><label for="allowance">Allowance:</label></td>
    <td><input type="number" name="allowance" id="allowance" class="form-control" value="<?php echo $row['allowance']; ?>"></td>
    </tr>

    <tr>
    <td><label for="department">Department:</label></td>
    <td>
    <select name="department" id="department" class="form-control" value="<?php echo $row['department']; ?>">
    <option value="hr">HR</option>
    <option value="marketing">Marketing</option>
    <option value="sales">Sales</option>
    </select>
    </td>
    </tr>

    <tr>
    <td><label for="statas">Status:</label></td>
    <td>
    <div class="form-check">
    <input type="radio" name="statas" value="permanent" id="permanent" class="form-check-input" value="<?php echo $row['statas']; ?>">
    <label class="form-check-label" for="permanent">Permanent</label>
    </div>

    <div class="form-check">
    <input type="radio" name="statas" value="temporary" id="temporary" class="form-check-input" value="<?php echo $row['statas']; ?>">
    <label class="form-check-label" for="temporary">Temporary</label>
    </div>
    </td>
    </tr>

    <tr>
    <td><label for="qualification"> Qualifications:</label></td>
    <td>
    <div class="form-check">
    <input type="checkbox" name="qualification" value="post_graduate" id="post_graduate" class="form-check-input" value="<?php echo $row['qualification']; ?>">
    <label class="form-check-label" for="post_graduate">Post Graduate</label>
    </div>

    <div class="form-check">
    <input type="checkbox" name="qualification" value="graduate" id="graduate" class="form-check-input" value="<?php echo $row['qualification']; ?>">
    <label class="form-check-label" for="diploma">Graduate</label>
    </div>

    <div class="form-check">
    <input type="checkbox" name="qualification" value="diploma" id="diploma" class="form-check-input" value="<?php echo $row['qualification']; ?>">
    <label class="form-check-label" for="certificate">Diploma</label>
    </div>

    <div class="form-check">
    <input type="checkbox" name="qualification" value="certificate" id="certificate" class="form-check-input" value="<?php echo $row['qualification']; ?>">
    <label class="form-check-label" for="diploma">Certificate</label>
    </div>

    <div class="form-check">
    <input type="checkbox" name="qualification" value="none" id="none" class="form-check-input" value="<?php echo $row['qualification']; ?>">
    <label class="form-check-label" for="diploma">None</label>
    </div>
    </td>
    </tr>

    <tr>
    <td></td>
    <td>
    <input type="submit" value="Update" class="btn btn-secondary" >
    <!-- <input type="submit" value="OK" class="btn btn-primary">
    <input type="reset" value="CLEAR" class="btn btn-secondary"> -->
    </td>
    </tr>
    </table>
    </form>
    </div>

    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>