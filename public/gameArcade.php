<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/style/bootstrap.css">
    <link rel="stylesheet" href="/assets/style/index.css">
    <link href="./assets/images/icone/favicon_troll.ico" type="image/x-icon" rel="shortcut icon">
    <title>Arcade Games</title>
</head>
<body class="gameBackground">
    <?php require_once('assets/ressources/_header.php'); ?>
    <main>
        <h2 class="gameBigTittle">Arcade games</h2>
        <section  class="gamePage">
                <!-- Cartouche block 1 start-->
            <a href="whack-a-mole.php" class="cartoucheAnchor" title="Go to our Whac-A-Mole game">
                <section class="container gameCartouche">
                    <h3 class="gameTittle">Whac-A-Mole</h3>
                    <img src="/assets/images/game/whac-a-mole.jpg" class="gameIllustrationPicture"   alt="gameplay picture of our Whac-A-Mole game">
                    <p class="gamePresentationText">A typical Whac-A-Mole machine consists of a waist-level cabinet with a play area and display screen, and a large, soft, black mallet. Five holes in the play area top are filled with small plastic moles, which pop up at random. Points are scored by whacking each mole as it appears. The faster the reaction the higher the score.
                        <br>
                        <br>
                        <button class="fakePlayButton">PLAY</button>
                    </p>
                </section>
            </a>
            <!-- Cartouche block 1 end-->
            <!-- Cartouche block 2 start-->
            <a href="clickPerSecond.php" class="cartoucheAnchor" title="Go to our click per seconds game">
                <section class="container gameCartouche">
                    <h3 class="gameTittle">Frenzy clicker</h3>
                    <img src="/assets/images/game/click.png" class="gameIllustrationPicture"   alt="gameplay picture of our click per seconds game">
                    <p class="gamePresentationText">CPS or clicks per second represents a number of times that a person can click using their mouse during a specific period of time measured in seconds.

                        <br>
                        <br>
                        <button class="fakePlayButton">PLAY</button>
                    </p>
                </section>
            </a>
            <!-- Cartouche block 2 end-->
            <!-- Cartouche block 3 start-->
            <a href="flappyBird.php" class="cartoucheAnchor" title="Go to our flappy bird game">
                <section class="container gameCartouche">
                    <h3 class="gameTittle">Flappy bird</h3>
                    <img src="assets/images/game/flappy-bird.png" class="gameIllustrationPicture"   alt="gameplay picture of our click per seconds game">
                    <p class="gamePresentationText">Flappy bird is a very simple game, you just have to make your bird fly by clicking on the screen to get the pipes that get in your way.
                        <br>
                        <br>
                        <button class="fakePlayButton">PLAY</button>
                    </p>
                </section>
            </a>
            <!-- Cartouche block 3 end-->
        </section>
    </main>

    <?php require_once('assets/ressources/_footer.php'); ?>

</body>
</html>