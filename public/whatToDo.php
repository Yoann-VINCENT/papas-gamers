<?php session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/style/bootstrap.css">
    <link rel="stylesheet" href="/assets/style/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="./assets/images/icone/favicon_troll.ico" type="image/x-icon" rel="shortcut icon">
    <title>What to Do</title>
</head>
<body class="boredBackground">
    <?php require_once('assets/ressources/_header.php'); ?>
    <main class="boredPage">
        <h2 class="gameBigTittle">What to do ?</h2>
        <!-- first solution -->
        <section class="boredCartouche">
            <h3 class="boredTittle">Learn PHP</h3>
            <img src="/assets/images/whatToDo/code.jpg" class="boredPicture" alt="Someone coding on a computer">
            <P class="boredDescription">
                PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.
                PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.
                PHP 7 is the latest stable release.
            </P>
        </section>
        <!-- 2nd solution -->
        <section class="boredCartouche">
            <h3 class="boredTittle">Practice some Yoga</h3>
            <img src="/assets/images/whatToDo/yoga.jpg" class="boredPicture" alt="Someone practicing yoga in front of a sunset">
            <P class="boredDescription">
                Yoga is a mind and body practice with a 5,000-year history in ancient Indian philosophy. Various styles of yoga combine physical postures, breathing techniques, and meditation or relaxation.
            </P>
        </section>
        <!-- 3rd solution -->
        <section class="boredCartouche">
            <h3 class="boredTittle">Cuddle some kittens</h3>
            <img src="/assets/images/whatToDo/kittens.jpg" class="boredPicture" alt="lovely kittens">
            <P class="boredDescription">
                Really, there’s nothing better than getting back home and spending some time on the couch with a cat that is purring with excitement and love. This is one of the perfect ways to unwind. It can trigger a physical reaction in the body that allows you to relax and be distracted from what is plaguing your mind.
            </P>
        </section>
        <!-- 4th solution -->
        <section class="boredCartouche">
            <h3 class="boredTittle">Working with plants</h3>
            <img src="/assets/images/whatToDo/plants.jpg" class="boredPicture" alt="some plants by a window">
            <P class="boredDescription">
                According to CIPHR, introducing plants to your working environment reduces stress. In a study conducted in 2010, significant reductions were recorded where plants were located in the office. Including: <br>

                Tension/Anxiety – 37% reduction <br>
                Depression – 58% reduction<br>
                Anger/Hostility – 44% reduction<br>
                Fatigue – 38% reduction<br>

                And to up that, CIPHR also stated that,  “in the case of computer workers, productivity increased by between 10%-15%. The higher level of concentration can be attributed to the plants ability to reduce excess carbon dioxide in the air.”
            </P>
        </section>
        <!-- 5th solution -->
        <section class="boredCartouche">
            <h3 class="boredTittle">Practice some friendly digital entertainment</h3>
            <img src="/assets/images/whatToDo/games.jpg" class="boredPicture" alt="kids playing video games">
            <P class="boredDescription">
                Video games can improve manual dexterity. Controller-based games can be great for your hands. In a study involving a group of surgeons, researchers found that those who played video games were faster at performing advanced procedures and made 37 percent fewer mistakes than those who didn't.
            </P>
        </section>
    </main>

    <?php require_once('assets/ressources/_footer.php'); ?>

</body>
</html>