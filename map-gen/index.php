<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>RPG | Map Generator</title>
</head>
<body>
<?php include "functions.php" ?>
<h1>Random Map Generator</h1>
<table>
    <?php
    $gridSize = 10;
    for ($x = 0; $x < $gridSize; $x++) {
        echo "<tr>";
        for ($y = 0; $y < $gridSize; $y++) {
            echo "<td class=" . terrainType() . "></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</table>
</body>
</html>