let percentageCounter = document.getElementById("total-percentage");
let warningArea = document.getElementById("percentage-div");

let plainInput = document.getElementById("plain");
let hillInput = document.getElementById("hill");
let forestInput = document.getElementById("forest");
let mountainInput = document.getElementById("mountain");
let lakeInput = document.getElementById("lake");
let swampInput = document.getElementById("swamp");
let desertInput = document.getElementById("desert");
let volcanoInput = document.getElementById("volcano");

plainInput.value = 0;
hillInput.value = 0;
forestInput.value = 0;
mountainInput.value = 0;
lakeInput.value = 0;
swampInput.value = 0;
desertInput.value = 0;
volcanoInput.value = 0;
percentageCounter.innerText = "0";

// --- FUNCTIONS --- //

//change counter (total/100)
function changePercentage() {
    let val1 = parseInt(plainInput.value);
    let val2 = parseInt(hillInput.value);
    let val3 = parseInt(forestInput.value);
    let val4 = parseInt(mountainInput.value);
    let val5 = parseInt(lakeInput.value);
    let val6 = parseInt(swampInput.value);
    let val7 = parseInt(desertInput.value);
    let val8 = parseInt(volcanoInput.value);
    let total = val1 + val2 + val3 + val4 + val5 + val6 + val7 + val8;
    total = total.toString(10);
    percentageCounter.innerText = total;
}

// warn the user that the total is above 100%
function warnUser() {
    let tempValue = parseInt(percentageCounter.innerText);
    while (tempValue != 100) {
        warningArea.classList.toggle("too-high");
    }
}

// --- EVENTS --- //

plainInput.addEventListener("change", ev => changePercentage());
hillInput.addEventListener("change", ev => changePercentage());
forestInput.addEventListener("change", ev => changePercentage());
mountainInput.addEventListener("change", ev => changePercentage());
lakeInput.addEventListener("change", ev => changePercentage());
swampInput.addEventListener("change", ev => changePercentage());
desertInput.addEventListener("change", ev => changePercentage());
volcanoInput.addEventListener("change", ev => changePercentage());

percentageCounter.addEventListener("change", ev => warnUser());