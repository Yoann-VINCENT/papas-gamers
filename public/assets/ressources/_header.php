<!DOCTYPE html>
<html>
<head>
    <title>Les papagamers</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="../style/index.css" type="text/css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


    <meta name="viewport" content="device-width=width, initial-scale=1.0">
</head>
<body>
<header>

    <button class="button_header">Ham</button>
    <img class="logo-icon" src="../images/icone/troll.png">
    <button class="login button_header"  data-toggle="modal" data-target="#exampleModalCenter">Login</button>

    <!-- Modal -->


    </div>

</header>


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

        if (empty($_POST['pseudo']) && isset($_POST['submit_form']))
        {
            echo 'Veuiller entrer votre pseudo<br />';
        }
        if (isset($_POST['password']) && $_POST['password'] == "php")
        {
            echo 'login ok<br />';
        } elseif (isset($_POST['password']) && $_POST['password'] ==  "javascript")
        {
            header('location: message.html');
        } else if (isset($_POST['password']) && (($_POST['password'] !=  "php") || $_POST['password'] !=  "javasript"))
        {
            echo "Mot de passe incorrect<br />";
        }

        ?>


        <div class="nav-menu-overlay"></div>
<script src="../js/header.js"></script>
</body>
</html>