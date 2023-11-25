<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$players = array("Player 1", "Player 2", "Player 3", "Player 4", "Player 5");

echo "Using a for loop:<br>";
echo"<br>";
for ($i = 0; $i < count($players); $i++) {
    echo $players[$i] . "<br>";
}
echo"<br>";

echo "Using a foreach loop:<br>";
echo"<br>";
foreach ($players as $player) {
    echo $player . "<br>";
}

?>

</body>
</html>