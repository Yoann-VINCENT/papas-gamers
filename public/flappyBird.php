<!doctype html>
<html lang="en" onclick="jump()">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./assets/style/bootstrap.css" rel="stylesheet" type="text/css" >
    <link href="./assets/style/index.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style/flappyBird.css">
    <title>Flappy Bird</title>
</head>

<body class="flappy_background">

<?php require ('./assets/ressources/_header.php') ?>

<div id="game">
    <div id="block"></div>
    <div id="hole"></div>
    <div id="character"></div>
</div>

<script src="assets/js/flappyBird.js"></script>

<?php include ('assets/ressources/_footer.php'); ?>

</body>



</html>