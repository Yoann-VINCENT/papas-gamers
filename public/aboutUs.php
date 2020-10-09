<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/style/bootstrap.css">
    <link rel="stylesheet" href="/assets/style/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="./assets/images/icone/favicon_troll.ico" type="image/x-icon" rel="shortcut icon">
    <title>About Us</title>
</head>
<body class="aboutUsBackground ">
    <?php require_once('assets/ressources/_header.php'); ?>
    <main class="aboutUsPage">
        <h2 class="gameBigTittle">About the Papa's</h2>
        <!-- first solution -->
        <section class="aboutUs">
            <!-- Charly start -->
            <section class="aboutCartouche">
                <figure class="aboutPicture">
                    <a href="https://github.com/Charly-Vial" target="blank" title="Charly's Github"><img src="/assets/images/aboutUs/charly.jpg" alt="Charly profile picture"></a>
                    <figcaption>Administrator</figcaption>
                </figure>
                <div class="aboutInfo">
                    <h3 class="aboutSubTittle">Charly Vial</h3>
                    <!-- text 80 char max ;-) -->
                    <p class="aboutTxt">The honorary Dad of the Group, Charly is our back-end developer.</p>
                </div>
            </section>
            <!-- Charly end -->
            <!-- Florian start -->
            <section class="aboutCartouche">
                <div class="aboutInfo">
                    <h3 class="aboutSubTittle">Florian Rowehy</h3>
                    <!-- text 80 char max ;-) -->
                    <p class="aboutTxt">Freshly promoted to Dad status, Florian is our game programmer.</p>
                </div>
                <figure class="aboutPicture">
                    <a href="https://github.com/Florian-Rowehy" target="blank" title="Flo's Github"><img src="/assets/images/aboutUs/flo.jpg" alt="Florian profile picture"></a>
                    <figcaption>Heavy Beater</figcaption>
                </figure>
            </section>
            <!-- Florian end -->
            <!-- Raph start -->
            <section class="aboutCartouche">
                <figure class="aboutPicture">
                    <a href="https://github.com/Raphtml" target="blank" title="Raphael's Github"><img src="/assets/images/aboutUs/raph.jpg" alt="Raphaël profile picture"></a>
                    <figcaption>Fierce Bootstrapper</figcaption>
                </figure>
                <div class="aboutInfo">
                    <h3 class="aboutSubTittle">Raphael Liere</h3>
                    <!-- text 80 char max ;-) -->
                    <p class="aboutTxt">7 month of Daditude for Raphaël, our precious bootstrapper.</p>
                </div>
            </section>
            <!-- Raph end -->
            <!-- Yoann start -->
            <section class="aboutCartouche">
                <div class="aboutInfo">
                    <h3 class="aboutSubTittle">Yoann Vincent</h3>
                    <!-- text 80 char max ;-) -->
                    <p class="aboutTxt">With a 2 years old girl, Yoann is our front-end developer.</p>
                </div>
                <figure class="aboutPicture">
                    <a href="https://github.com/Yoann-VINCENT" target="blank" title="Yoann's Github"><img src="/assets/images/aboutUs/yo.jpg" alt="Yoann profile picture"></a>
                    <figcaption>Random Stylist</figcaption>
                </figure>
            </section>
            <!-- Yoann end -->
        </section>

    </main>

    <?php require_once('assets/ressources/_footer.php'); ?>
</body>
</html>