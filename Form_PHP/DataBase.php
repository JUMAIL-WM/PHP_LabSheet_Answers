<?php

// Connect to MySQL
$con = mysqli_connect("localhost", "root", "");

// Check the connection
if (!$con) 
{
    echo "Connection error: " . mysqli_connect_error();
} 
else 
{
    echo "Connection OK\n";

    // Create a database - db_student
    $createDbSQL = "CREATE DATABASE IF NOT EXISTS db_student";
    if (mysqli_query($con, $createDbSQL)) 
    {
        echo "Database created successfully\n";
    } 
    else 
    {
        echo "Error creating database: " . mysqli_error($con) . "\n";
    }

    // Select the database
    mysqli_select_db($con, "db_student");

    // Create a table - tbl_student
    $createTableSQL = "CREATE TABLE IF NOT EXISTS tbl_student (
        id INT AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(255),
        last_name VARCHAR(255),
        date_of_birth DATE,
        email VARCHAR(255),
        phone_number VARCHAR(15)
    )";

    if (mysqli_query($con, $createTableSQL)) {
        echo "Table created successfully\n";
    } else {
        echo "Error creating table: " . mysqli_error($con) . "\n";
    }

    // Insert data into the table
    $insertDataSQL = "INSERT INTO tbl_student (first_name, last_name, date_of_birth, email, phone_number) 
                     VALUES ('John', 'Doe', '2000-01-15', 'john@example.com', '+1234567890')";

    if (mysqli_query($con, $insertDataSQL)) {
        echo "Data inserted successfully\n";
    } else {
        echo "Error inserting data: " . mysqli_error($con) . "\n";
    }

    // Display table data in tabular format
    $selectDataSQL = "SELECT * FROM tbl_student";
    $result = mysqli_query($con, $selectDataSQL);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['first_name']}</td>
                    <td>{$row['last_name']}</td>
                    <td>{$row['date_of_birth']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['phone_number']}</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No data found in the table\n";
    }

    // Close the MySQL connection
    mysqli_close($con);
}
?>
