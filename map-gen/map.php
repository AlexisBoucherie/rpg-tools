<?php
require_once "script/map-script.php";
require_once "Grid.php";
?>

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

<h1>Random Map Generator</h1>

<table>
    <?php
    $map = new Grid(10, 10)
    ?>
</table>
<div class="btn-container">
    <a href="index.php">Go back</a>
</div>
</body>
</html>

