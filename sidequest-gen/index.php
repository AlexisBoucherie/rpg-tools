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
require_once "./database/db-sidequest-gen.php";
require_once "./script/sidequest-script.php";
?>
<h1>Side Quest Generator</h1>
<div class="container">
    <article class="quest">
        <h2>Heroes Wanted</h2>
        <h3>Who is in need?</h3>
        <p>
            <?php
            $needyPerson = whoIsInNeed($characterInNeed);
            if ($needyPerson == "An adventurer") {
                echo "An adventurer ( "
                    . chooseRandomItem($characterRace) . "/"
                    . chooseRandomItem($characterClass) . " )";
            } else {
                echo $needyPerson;
            }
            ?>
        </p>
        <h3>What does he need?</h3>
        <p>
            <?php
            $need = whatDoesHeNeed($whatIsTheNeed);
            if ($need == "He has a personal problem he'd like you to solve:") {
                echo $need . "<br>" . whatPersonalProblem($personalProblem);
            } elseif ($need == "He needs a professional for a special favor:") {
                echo $need . "<br>" . whatStrongArmService($strongArmService);
            } else {
                echo $need;
            }
            ?>
        </p>
        <h3>Who else is involved?</h3>
        <p>
            <?php
                $whoIsInvolved = whoElseIsInvolved($antagonist);
                if ($whoIsInvolved == "An adventurer") {
                    //echo adventurer + class/race;
                } else {
                    //echo $whoisinvolved;
                }
            ?>
        </p>
    </article>
</div>

// test commentaire après installation Ubuntu et nouvelle clé SSH

</body>
</html>
