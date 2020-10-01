<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="index.css">
    <title>Reflexion Games</title>
</head>
<body>
<?php include('_header.php'); ?>
    <main>
        <img src="assets/images/icone/reflexion.png" class="gameIcon" alt="icon of a chess piece">
        <h2>Reflexion games</h2>
        <section  class="gamePage">
                <!-- Cartouche block 1 start-->
            <a href="#" target="_blank" class="cartoucheAnchor" title="Go to our minesweeper game">
                <section class="container gameCartouche">
                    <h3 class="gameTittle">Wild Minesweeper</h3>
                    <img src="assets/images/game/minesweeper.png" class="gameIllustrationPicture"   alt="gameplay picture of our minesweeper">
                    <p class="gamePresentationText">The objective of the game is to clear a rectangular board containing hidden "mines" or bombs without detonating any of them, with help from clues about the number of neighboring mines in each field.
                        <br>
                        <br>
                        <button class="fakePlayButton">PLAY</button>
                    </p>
                </section>
            </a>
                <!-- Cartouche block 1 end-->
        </section>
    </main>
<?php include('_footer.php'); ?>
</body>
</html>