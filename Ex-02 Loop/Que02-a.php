<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
for ($i = 1; $i <= 5; $i++) {
    echo $i. ' ';
}

echo"<br>";

$i = 1;
while ($i <= 5) {
    echo $i . ' ';
    $i++;
}

echo"<br>";

$i = 1;
do {
    echo $i . ' ';
    $i++;
} while ($i <= 5);
?>

</body>
</html>