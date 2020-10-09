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

        <canvas id="canvas" width="288" height="512" class="flappyBirdCanvas"></canvas>

        <?php include ('assets/ressources/_footer.php'); ?>

        <script src="assets/js/flappyBird.js"></script>

    </body>

</html>