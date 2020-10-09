<!DOCTYPE html>
<html>
    <head>
        <title>Whack a mole</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./assets/style/bootstrap.css" rel="stylesheet" type="text/css" >
        <link href="assets/style/index.css" type="text/css" rel="stylesheet">
        <link href="assets/style/whack-a-mole.css" type="text/css" rel="stylesheet">
        <link href="./assets/images/icone/favicon_troll.ico" type="image/x-icon" rel="shortcut icon">
    </head>

    <body onclick="preventDefault()">
    <?php require_once("./assets/ressources/_header.php"); ?>
    <audio id="audioPierre1" src="./assets/sounds/mississipi2.mp3"></audio>
    <audio id="audioPierre2" src="./assets/sounds/javacript1.mp3"></audio>
    <audio id="audioMatthieu1" src="./assets/sounds/question1.mp3"></audio>
    <audio id="audioMatthieu2" src="./assets/sounds/default/noob.mp3"></audio>
    <audio id="audioThomas1" src="./assets/sounds/git-reset1.mp3"></audio>
    <audio id="audioThomas2" src="./assets/sounds/cest-normal1.mp3"></audio>

    <div class="game-container">
        <h2 class="gameBigTittle">Whack a mole</h2>
        <div class="container-whack"></div>
        <div class="control-whack">
            <p>Time left : <span class="timer-display">0</span> sec.</p>
            <p>Score : <span class="score-display">0</span> points.</p>
            <button class="whack-start">Launch game!</button>
            <button class="whack-end">Stop game!</button>
            <select class="difficulty">
                <option value="EASY">Easy</option>
                <option value="NORMAL" selected>Normal</option>
                <option value="HARD">Hard</option>
                <option value="ULTIMATE_P">Ultimate Pierre</option>
                <option value="ULTIMATE_M">Ultimate Matthieu</option>
            </select>
        </div>
    </div>

    <?php require_once("./assets/ressources/_footer.php"); ?>
    <script src="assets/js/whack-a-mole.js"></script>
    </body>
</html>