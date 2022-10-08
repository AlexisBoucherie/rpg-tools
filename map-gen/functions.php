<?php

function roll_1d(int $number): int
{
    return rand(1, $number);
}

function terrainType(): string
{
    $score = roll_1d(8);

    switch ($score) {
        case 1:
            return "hill";
        case 2:
            return "desert";
        case 3:
            return "forest";
        case 4:
            return "lake";
        case 5:
            return "swamp";
        case 6:
            return "mountain";
        case 7:
            return "plain";
        case 8:
            return "volcano";
        default :
            return "";
    }
}