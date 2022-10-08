let percentageCounter = document.getElementById("totalPercentage");

let plainInput = document.getElementById("plain");
let hillInput = document.getElementById("hill");
let forestInput = document.getElementById("forest");
let mountainInput = document.getElementById("mountain");
let lakeInput = document.getElementById("lake");
let swampInput = document.getElementById("swamp");
let desertInput = document.getElementById("desert");
let volcanoInput = document.getElementById("volcano");

// percentageCounter.innerText = 0;

// WORK IN PROGRESS, MUST CONVERT TEXT INTO INTEGER
// RETURNS : NaN

// function changePercentage() {
//     percentageCounter.innerText =
//         parseInt(plainInput.innerText, 10) +
//         parseInt(hillInput.innerText, 10) +
//         parseInt(forestInput.innerText, 10) +
//         parseInt(mountainInput.innerText, 10) +
//         parseInt(lakeInput.innerText, 10) +
//         parseInt(swampInput.innerText, 10) +
//         parseInt(desertInput.innerText, 10) +
//         parseInt(volcanoInput.innerText, 10);
// }

plainInput.addEventListener("change", ev => changePercentage());
hillInput.addEventListener("change", ev => changePercentage());
forestInput.addEventListener("change", ev => changePercentage());
mountainInput.addEventListener("change", ev => changePercentage());
lakeInput.addEventListener("change", ev => changePercentage());
swampInput.addEventListener("change", ev => changePercentage());
desertInput.addEventListener("change", ev => changePercentage());
volcanoInput.addEventListener("change", ev => changePercentage());
