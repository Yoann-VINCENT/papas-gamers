<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style/bootstrap.css">
    <link rel="stylesheet" href="assets/style/index.css">
    <title>Wildest Game</title>
</head>

<body>

<?php include('assets/ressources/_header.php'); ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active banniere">
                <img class="d-block w-100" src="assets/images/carousel/banniere_1.jpg" alt="First slide">
            </div>
            <div class="carousel-item banniere">
                <img class="d-block w-100" src="assets/images/carousel/banniere_1.jpg" alt="Second slide">
            </div>
            <div class="carousel-item banniere">
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


        <div class="catch_phrase">
            <p class="choose_category">Choose a game category</p>
        </div>

    <b class="hr"></b>

    <div class="articles">

        <section class="categorie_cards">
            <a class="go_to_category" href="gameArcade.php">
            <img src="assets/images/icone/Arcade.png" alt="icone of arcade games">
                    <h5 class="black-text-shadow">Arcade games</h5>
            </a>
        </section>

        <section class="categorie_cards">
            <a class="go_to_category" href="gameEducation.php">
            <img src="assets/images/icone/Education.png" alt="icone of education games">
            <div class="text_card">
                <h5 class="black-text-shadow">Educative games</h5>
            </div>
            </a>
        </section>

        <section class="categorie_cards">
            <a class="go_to_category" href="gameReflexion.php">
            <img src="assets/images/icone/Mind.png" alt="icone of mind games">
            <div class="text_card">
                <h5 class="black-text-shadow">Mind games</h5>
            </div>
            </a>
        </section>

    </div>

    <div class="scallop-down"></div>


    <?php include ('assets/ressources/_footer.php') ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>