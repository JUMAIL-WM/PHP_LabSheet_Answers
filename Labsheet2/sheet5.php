<!DOCTYPE html>
<html>
<head>
    <title>PHP Table </title>
</head>
<body>
    <table border="1">
    <caption><b> <u>echo vs print </u></b></caption>
        <tr>
            <th>echo</th>
            <th>print</th>
            
        </tr>

        <?php
        // Sample data (replace with your actual data)
        $echoData = 
        [
            ["has no return value", "has return value of 1"],
            ["echo can take multiple parameters", "print can take one argument"],
            ["echo is marginally faster than print", "slower than echo"],
            // Add more rows as needed
        ];

        // Loop through the data and generate table rows
        foreach ($echoData as $echo)
        {
            echo "<tr>";
            foreach ($echo as $value) 
            {
                echo "<td> $value </td>";
            }
            echo "</tr>";
        }

        ?>

    </table>
</body>
</html>
