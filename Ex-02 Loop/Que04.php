<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$prices = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
$sum = 0;

for ($i = 0; $i < count($prices); $i++) {
    echo "Price $i: $" . $prices[$i] . "<br>";
    $sum += $prices[$i];
}

echo"<br>";
echo "Total sum of prices: $" . $sum;
?>

</body>
</html>