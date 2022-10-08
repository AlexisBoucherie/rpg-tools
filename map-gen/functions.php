<?php

function roll_1d(int $number): int
{
    return rand(1, $number);
}

function terrainType(): string
{
    $score = roll_1d(10);

    switch ($score) {
        case 1:
            return "canyon";
            break;
        case 2:
            return "hill";
            break;
        case 3:
            return "desert";
            break;
        case 4:
            return "forest";
            break;
        case 5:
            return "lake";
            break;
        case 6:
            return "swamp";
            break;
        case 7:
            return "mountain";
            break;
        case 8:
            return "plain";
            break;
        case 9:
            return "river";
            break;
        case 10:
            return "volcano";
            break;
    }
}