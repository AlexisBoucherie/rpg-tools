<?php

// build function to pick a random item in a given array
function chooseRandomItem(array $array): string
{
    $counter = count($array) - 1;
    $item = rand(0, $counter);
    return $array[$item];
}

// WHO ??

function whoIsInNeed(array $array): string
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
            if ($randomNumber == 1) {
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

// WHAT

function whatDoesHeNeed(array $array): string
{
    switch (chooseRandomItem($array)) {
        case "escort" :
            return "He needs to be escorted. Someone is threatening his life.";
        case "delivery" :
            return "He needs you to deliver a package to someone.";
        case "materials" :
            return "He needs materials to craft/build something.";
        case "message" :
            return "He needs you to deliver a message to someone.";
        case "protection" :
            return "He needs your protection against someone.";
        case "research" :
            return "He needs you to look for someone/something";
        case "personal-problem" :
            return "He has a personal problem he'd like you to solve:";
        case "strong-arm-service" :
            return "He needs a professional for a special favor:";
        default:
            return "error";
    }
}

// PERSONAL PROBLEM

function whatPersonalProblem(array $array): string
{
    switch (chooseRandomItem($array)) {
        case "agression" :
            return "He was mugged by somebody and needs you to find why.";
        case "scam" :
            return "He was scammed and would like to retrieve what he lost.";
        case "creature-atk" :
            return "He was attacked by a strange creature.";
        case "calumny" :
            return "Someone is trying to ruin his reputation.";
        case "blackmail" :
            return "Someone is blackmailing him.";
        case "debt" :
            return "He has a huge debt to pay but he is broke...";
        case "missing" :
            return "He is nowhere to be found.";
        case "duel" :
            return "Someone challenged him at a game or to the death, and he needs somebody to win for him.";
        case "imprisonment" :
            return "He was imprisoned, yet he claims to be innocent.";
        case "kidnapping" :
            return "Someone he cares about was kidnapped.";
        case "harassment" :
            return "Someone's been harassing him for the past days/weeks. He'd like it to stop.";
        case "humiliation" :
            return "Someone humiliated him. He needs you to save his honor.";
        case "intimidation" :
            return "Someone intimidated him. He's scared to leave his hide now.";
        case "sick" :
            return "He is very sick and needs a cure.";
        case "malediction" :
            return "He was cursed and needs you to help him break the curse.";
        case "murder" :
            return "He was murdered. Who did this? And why?";
        case "negotiation" :
            return "He'd like you to negotiate something very important with somebody.";
        case "weird-events" :
            return "He witnessed very strange events, lately, and needs you to investigate.";
        case "visions" :
            return "He's been having terrible visions for the past few hours/days and needs them to stop.";
        case "theft" :
            return "Someone stole something very important to him. You need to find the culprit.";
        default:
            return "error";
    }
}

// STRONG-ARM SERVICE

function whatStrongArmService(array $array): string
{
    switch (chooseRandomItem($array)) {
        case "capture" :
            return "You must capture someone for him.";
        case "spy" :
            return "You must spy on someone for him.";
        case "blackmail" :
            return "You must blackmail someone for him.";
        case "intimidate" :
            return "You must intimidate someone for him.";
        case "kill" :
            return "You must kill someone for him.";
        case "rob" :
            return "You must steal a valuable good from someone";
        default:
            return "error";
    }
}

// ANTAGONIST

function whoElseIsInvolved(array $array): string
{
    switch (chooseRandomItem($array)) {
        case "craftsman" :
            return "A craftsman";
        case "artist" :
            return "An artist";
        case "bandit" :
            return "A bandit";
        case "cultist" :
            return "A cultist";
        case "guild" :
            return "A guild";
        case "merchant" :
            return "A merchant";
        case "mercenary" :
            return "A mercenary";
        case "nobleman" :
            return "A nobleman";
        case "member-of-the-clergy" :
            return "A member of the clergy";
        case "commoner" :
            return "A commoner";
        case "soldier" :
            return "A soldier";
        case "hero" :
            return "An adventurer";
        default:
            return "error";
    }
}