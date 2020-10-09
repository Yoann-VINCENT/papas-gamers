<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/assets/style/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="/assets/style/index.css" type="text/css">
        <link href="/assets/style/clickPerSecond.css" type="text/css" rel="stylesheet">
        <link href="./assets/images/icone/favicon_troll.ico" type="image/x-icon" rel="shortcut icon">
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
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous" ></script>
            <script src="assets/js/header.js"></script>
        </section>


    </body>

</html>