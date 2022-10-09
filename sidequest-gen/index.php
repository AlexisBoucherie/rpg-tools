<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>RPG | Side Quest Generator</title>
</head>
<body>
<?php
require_once "database/db-side-quest-gen.php";
require_once "script/sidequest-script.php";
?>
<h1>Side Quest Generator</h1>
<div class="container">
    <article class="quest">
        <h2>Heroes Wanted</h2>
        <h3>Who is in need?</h3>
        <p><?= whoIsInNeed($characterInNeed); ?></p>
        <p><?= whoIsInNeed($characterInNeed); ?></p>
        <p><?= whoIsInNeed($characterInNeed); ?></p>
        <h3>What does he need?</h3>
        <p></p>
    </article>
</div>

</body>
</html>
