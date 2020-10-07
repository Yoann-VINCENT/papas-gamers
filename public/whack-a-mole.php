<!DOCTYPE html>
<html>
    <head>
        <title>Whack a mole</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/style/index.css" type="text/css" rel="stylesheet">
        <link href="assets/style/whack-a-mole.css" type="text/css" rel="stylesheet">
    </head>

    <body>
    <?php require_once("assets/ressources/_header.php"); ?>

    <div class="game-container">
        <h2 class="gameBigTittle">Whack a mole</h2>
        <div class="container-whack"></div>
        <div class="test">
            <button class="whack-start">Launch game!</button>
            <button class="whack-end">Stop game!</button>
            <p>Timer : <span class="timer-display">0</span> sec.</p>
            <p>Score : <span class="score-display">0</span> clicks.</p>
        </div>
    </div>

    <?php require_once("assets/ressources/_footer.php"); ?>
    <script src="assets/js/whack-a-mole.js"></script>
    <script src="assets/js/header.js"></script>
    </body>
</html>