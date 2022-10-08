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

<?php

// set a gridsize
$gridSize = $_POST["gridsize"];
$squareNumber = $gridSize * $gridSize;

$terrainArray = [];

// set terrain proportion/quantity in percentage (%)
$qtOfHill = ceil($_POST["hill"] * $squareNumber / 100);
$qtOfDesert = ceil($_POST["desert"] * $squareNumber / 100);
$qtOfForest = ceil($_POST["forest"] * $squareNumber / 100);
$qtOfLake = ceil($_POST["lake"] * $squareNumber / 100);
$qtOfSwamp = ceil($_POST["swamp"] * $squareNumber / 100);
$qtOfMountain = ceil($_POST["mountain"] * $squareNumber / 100);
$qtOfPlain = ceil($_POST["plain"] * $squareNumber / 100);
$qtOfVolcano = ceil($_POST["volcano"] * $squareNumber / 100);

//reset the value if they are negative
if ($qtOfHill < 0) {
    $qtOfHill = 0;
}
if ($qtOfDesert < 0) {
    $qtOfDesert = 0;
}
if ($qtOfForest < 0) {
    $qtOfForest = 0;
}
if ($qtOfLake < 0) {
    $qtOfLake = 0;
}
if ($qtOfSwamp < 0) {
    $qtOfSwamp = 0;
}
if ($qtOfMountain < 0) {
    $qtOfMountain = 0;
}
if ($qtOfPlain < 0) {
    $qtOfPlain = 0;
}
if ($qtOfVolcano < 0) {
    $qtOfVolcano = 0;
}
if ($gridSize < 0) {
    $gridSize = 10;
}

// stock all the terrain type in a big array
for ($i = 0; $i < $qtOfHill; $i++) {
    array_push($terrainArray, "hill");
}
for ($i = 0; $i < $qtOfDesert; $i++) {
    array_push($terrainArray, "desert");
}
for ($i = 0; $i < $qtOfForest; $i++) {
    array_push($terrainArray, "forest");
}
for ($i = 0; $i < $qtOfLake; $i++) {
    array_push($terrainArray, "lake");
}
for ($i = 0; $i < $qtOfSwamp; $i++) {
    array_push($terrainArray, "swamp");
}
for ($i = 0; $i < $qtOfMountain; $i++) {
    array_push($terrainArray, "mountain");
}
for ($i = 0; $i < $qtOfPlain; $i++) {
    array_push($terrainArray, "plain");
}
for ($i = 0; $i < $qtOfVolcano; $i++) {
    array_push($terrainArray, "volcano");
}

// shuffle randomly the array
shuffle($terrainArray);

// divide the big array (100 elements) into a 2D array (10x10 elements)
$terrainType = [];
for ($i = 0; $i < $gridSize; $i++) {
    $terrainType[$i] = array_splice($terrainArray, 0, $gridSize);
}

?>

<h1>Random Map Generator</h1>

<table>
    <?php
    for ($x = 0; $x < $gridSize; $x++) {
        echo "<tr>";
        for ($y = 0; $y < $gridSize; $y++) {
            echo "<td class=" . $terrainType[$x][$y] . "></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</table>

</body>
</html>

