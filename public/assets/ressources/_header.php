<?php
    if(!isset($_SESSION)) session_start();
    $pseudo = $password = "";
    if(isset($_POST['pseudo'])) $pseudo = $_POST['pseudo'];
    if(isset($_POST['password'])) $password = $_POST["password"];

    if ($pseudo === "matthieu" && $password === "phprocks")
    {
        $_SESSION['password'] = 'php';
    }
?>

<body>
<header>
    <nav>
        <div class="hamburger-container">
            <div class="hamburger-line1"></div>
            <div class="hamburger-line2"></div>
            <div class="hamburger-line3"></div>
        </div>
        <ul class="sidenav">
            <li> <a href="/index.php">Home</a> </li>
            <li> <a href="/aboutUs.php">Meet the papas</a> </li>
            <li> <a href="/whatTodo.php">What to do?</a> </li>
            <li> <a href="/gameArcade.php">Arcade games</a> </li>
            <li> <a href="/gameReflexion.php">Mind games</a> </li>
            <li> <a href="/gameEducation.php">Coding games</a> </li>
        </ul>
    </nav>

    <a href="/index.php"><img class="logo-icon" src="/assets/images/icone/troll.png"></a>

    <?php
    if (isset($_SESSION['password']))
    {
        echo '<div> <a href="/logout.php"><img class="logo-icon" src="/assets/images/login/profilMatthieu.png"></a></div>';

    } else
    {
        echo '<button class="login button_header"  data-toggle="modal" data-target="#exampleModalCenter">Login</button>';
    }
    ?>

</header>

<div class="nav-menu-overlay"></div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Veuillez vous identifier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method = "POST">
                    <div class="form-group">

                        <input type="text" class="form-control" name="pseudo" aria-describedby="emailHelp" placeholder="Pseudo">
                        <small id="pseudoHelp" class="form-text text-muted">Un pseudo, un vrai !!!</small>
                    </div>
                    <div class="form-group">

                        <input type="password" name="password" class="form-control" id="pseudo" placeholder="Password">
                        <small id="emailHelp" class="form-text text-muted">Pense aux hackers et entre un vrai mot de passe !</small>
                    </div>

                    <button type="submit" name='submit_form' class="btn btn_submit">Valider</button>

                </form>

            </div>
        </div>
    </div>
</div>



<?php

if(isset($_POST['submit_form'])) {
    if (empty($pseudo)) {
        echo '<h1 class="errorMDP">Veuillez entrer votre pseudo 
                <img class="errorMDPPicture" src="/assets/images/error/error.png"> 
                <img class="errorMDPPicture" src="/assets/images/error/error.png"> 
                <img class="errorMDPPicture" src="/assets/images/error/error.png"> 
                <img class="errorMDPPicture" src="/assets/images/error/error.png"> 
                <img class="errorMDPPicture" src="/assets/images/error/error.png">
              </h1>';
    } elseif ($password === "javascript") {
        header('location: /fake.html');
    } elseif ($pseudo !== "matthieu" || $password !== "phprocks" ) {
        echo '<h1 class="errorMDP">Identifiants incorrects
                <img class="errorMDPPicture" src="/assets/images/error/error.png"> 
                <img class="errorMDPPicture" src="/assets/images/error/error.png"> 
                <img class="errorMDPPicture" src="/assets/images/error/error.png"> 
                <img class="errorMDPPicture" src="/assets/images/error/error.png"> 
                <img class="errorMDPPicture" src="/assets/images/error/error.png">
              </h1>';
    }
}
?>
