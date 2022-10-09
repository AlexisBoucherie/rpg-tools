<?php

// build function to pick a random item in a given array
function chooseRandomItem(array $array): string
{
    $counter = count($array) - 1;
    $item = rand(0, $counter);
    return $array[$item];
}

function whoIsInNeed($array): string
{
    switch (chooseRandomItem($array)) {
        case "craftsman":
            return "A craftsman";
        case "artist":
            return "An artist";
        case "merchant":
            return "A merchant";
        case "nobleman":
            return "A nobleman";
        case "farmer":
            return "A farmer";
        case "member-of-the-clergy":
            $randomNumber = rand(1, 2);
            if ($randomNumber = 1) {
                return "A priest";
            } else {
                return "An acolyte";
            }
        case "soldier":
            return "A soldier";
        case "hero":
            return "An adventurer";
        default:
            return "error";
    }
}