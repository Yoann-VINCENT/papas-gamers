<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/assets/style/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="/assets/style/index.css" type="text/css">
        <link href="/assets/style/clickPerSecond.css" type="text/css" rel="stylesheet">
        <title>Click per second Game</title>
    </head>
    <body class="cpsBackground">
        <?php require_once("assets/ressources/_header.php"); ?>
        <section class="cpsGameSection">
            <h2 class="gameBigTittle">Frenzy clicker</h2>
            <div id="clickArea">
                <button id="start">Start</button>
                <span id="scoretxt"></span>
            </div>
            <div id="container">
                Timer : <span id="timer">0</span> sec.<br/>
                Score : <span id="score">0</span> clicks.<br/>
            </div>
            <script src="assets/js/clickPerSecond.js"></script>
            <script src="assets/js/header.js"></script>
        </section>
        <?php require_once('assets/ressources/_footer.php'); ?>
    </body>

</html>