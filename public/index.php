<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./assets/style/bootstrap.css" rel="stylesheet" type="text/css" >
    <link href="./assets/style/index.css" type="text/css" rel="stylesheet">
    <link href="./assets/images/icone/favicon_troll.ico" type="image/x-icon" rel="shortcut icon">
    <title>Les papagamers</title>
</head>

<body>

<?php require ('./assets/ressources/_header.php') ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="whatToDo.php">
                <img class="d-block w-100 go_to_what_to_do" src="assets/images/carousel/banniere_1.jpg" alt="First slide">
                </a>
            </div>
            <div class="carousel-item ">
                <a href="whack-a-mole.php">
                <img class="d-block w-100 go_to_whack_a_mole" src="assets/images/carousel/banniere_2.jpg" alt="Second slide">
                </a>
            </div>
            <div class="carousel-item ">
                <a href="aboutUs.php">
                    <img class="d-block w-100 go_to_about_us" src="assets/images/carousel/banniere_3.jpg" alt="Third slide">
                </a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <main class="index-background">
        <p class="choose_category">Choose a game category</p>
        <div class="articles">

            <a class="go_to_category categorie_cards" href="gameArcade.php">
                <img src="assets/images/icone/Arcade.png" alt="icone of arcade games">
                    <div class="text_card">
                        <h5 class="black-text-shadow">Arcade games</h5>
                    </div>
            </a>

            <a class="go_to_category categorie_cards" href="gameReflexion.php">
                <img src="assets/images/icone/Mind.png" alt="icone of mind games">
                <div class="text_card">
                    <h5 class="black-text-shadow">Mind games</h5>
                </div>
            </a>

            <a class="go_to_category categorie_cards" href="gameEducation.php">
                <img src="assets/images/icone/Education.png" alt="icone of education games">
                <div class="text_card">
                    <h5 class="black-text-shadow">Coding games</h5>
                </div>
            </a>

        </div>
    </main>

    <?php include ('assets/ressources/_footer.php'); ?>
</body>