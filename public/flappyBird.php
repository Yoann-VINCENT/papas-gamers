<!doctype html>
<html lang="en" onkeypress="moveUp()">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="./assets/style/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="./assets/style/index.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="assets/style/flappyBird.css">
        <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
        <link href="./assets/images/icone/favicon_troll.ico" type="image/x-icon" rel="shortcut icon">
        <title>Flappy Bird</title>
    </head>

    <body class="flappyBirdBody">

        <?php require ('./assets/ressources/_header.php') ?>

        <h1 class="main_title">Flappy Bird</h1>
        <section class="buttonRules">
            <button id="gameStartBtn" type="button" class="btn btn-primary btn-lg">Play !</button>
            <div>
                <p class="gameRules">Game rules :</p>
                <p class="rules"> Press any key of your keyboard to make flying the flappy bird and don't touch the pipes !</p>
            </div>
        </section>
        <section>
            <canvas id="canvas" width="288" height="512" class="flappyBirdCanvas"></canvas>
        </section>

        <script src="assets/js/flappyBird.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous" ></script>
        <script src="assets/js/header.js"></script>
    </body>

</html>