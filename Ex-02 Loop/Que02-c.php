<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

for ($i = 100; $i >= 50; $i-=10) {
    echo $i. ' ';
}

echo"<br>";

$i = 100;
while ($i >= 50) {
    echo $i . ' ';
    $i -= 10;
}

echo"<br>";

$i = 100;
do {
    echo $i . ' ';
    $i -= 10;
} while ($i >= 50);
?>

</body>
</html>