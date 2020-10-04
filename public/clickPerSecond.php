<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/style/index.css">
        <link href="assets/style/clickPerSecond.css" type="text/css" rel="stylesheet">
        <title>Click per second Game</title>
    </head>
    <body class="cpsBackground">
    <?php require_once("assets/ressources/_header.php"); ?>
        <h2 class="gameBigTittle">Frenzy clicker</h2>
        <div id="clickArea">
            <button id="start">Start</button>
        </div>
        <div id="container">
            Timer : <span id="timer">0</span> sec.<br/>
            Score : <span id="score">0</span> clicks.<br/>
        </div>
        <script src="assets/js/clickPerSecond.js"></script>
        <script src="assets/js/header.js"></script>
    </body>
</html>