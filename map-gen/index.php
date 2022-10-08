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
<div class="form-container">
    <form action="map.php" method="post">
        <h2>Parameters:</h2>
        <p>How much do you want of each terrain type? (in %)</p>
        <div>
            <label for="plain">Plains:</label>
            <input type="number" id="plain" name="plain">
        </div>
        <div>
            <label for="hill">Hills:</label>
            <input type="number" id="hill" name="hill">
        </div>
        <div>
            <label for="forest">Forests:</label>
            <input type="number" id="forest" name="forest">
        </div>
        <div>
            <label for="mountain">Mountains:</label>
            <input type="number" id="mountain" name="mountain">
        </div>
        <div>
            <label for="lake">Lakes:</label>
            <input type="number" id="lake" name="lake">
        </div>
        <div>
            <label for="swamp">Swamps:</label>
            <input type="number" id="swamp" name="swamp">
        </div>
        <div>
            <label for="desert">Deserts:</label>
            <input type="number" id="desert" name="desert">
        </div>
        <div>
            <label for="volcano">Volcanoes:</label>
            <input type="number" id="volcano" name="volcano">
        </div>
        <div class="percentage">
            <span id="totalPercentage"></span><span> /100</span>
        </div>
        <p>What size is your map? (in squares)</p>
        <div>
            <label for="gridsize">Grid Size:</label>
            <input type="number" id="gridesize" name="gridsize">
        </div>
        <div class="btn-container">
            <input type="submit" id="submit" value="Submit">
        </div>
    </form>
</div>
<script src="script.js"></script>
</body>
</html>