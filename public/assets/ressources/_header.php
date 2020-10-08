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

    <button class="login"  data-toggle="modal" data-target="#exampleModalCenter">Login</button>

    <?php
    /*
    if (isset($_POST['password']) && $_POST['password'] == "php")
    {
        echo '<img class="logo-icon" src="../images/login/profilMatthieu.png">';
    } else
    {
        echo '<button class="login button_header"  data-toggle="modal" data-target="#exampleModalCenter">Login</button>';
    }*/
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
/*
if (empty($_POST['pseudo']) && isset($_POST['submit_form']))
{
    echo 'Veuiller entrer votre pseudo<br />';
}
if (isset($_POST['password']) && $_POST['password'] == "php")
{
    echo 'login ok<br />';
} elseif (isset($_POST['password']) && $_POST['password'] ==  "javascript")
{
    header('location: /login_redirect_page.html');
} else if (isset($_POST['password']) && (($_POST['password'] !=  "php") || $_POST['password'] !=  "javasript"))
{
    echo "Mot de passe incorrect<br />";
}
*/
?>

