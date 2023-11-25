<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$i=-10;
for ($j = 1; $j <= 5; $j++) {
    echo $i . '<br>';
    $i -= 10;
}

echo"<br>";

$i = -10;

while ($i >= -50) {
    echo $i . '<br>';
    $i -= 10;
}

echo"<br>";

$num = -10;

do {
    echo $num . '<br>';
    $num -= 10;
} while ($num >= -50);

?>

</body>
</html>