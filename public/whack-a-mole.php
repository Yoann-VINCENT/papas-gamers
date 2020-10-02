<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/style/index.css" type="text/css" rel="stylesheet">
        <link href="assets/style/whack-a-mole.css" type="text/css" rel="stylesheet">
    </head>
    <body>
    <?php require_once("assets/ressources/_header.php"); ?>
        <div>
            <div class="score-display"></div>
            <div class="container-whack"></div>
            <div>
                <button class="whack-start">Launch game!</button>
                <button class="whack-end">Stop game!</button>
            </div>
        </div>

        <script src="assets/js/whack-a-mole.js"></script>
        <script src="assets/js/header.js"></script>
    </body>
</html>