<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <!--lien bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../public/css/style.css" type="text/css">

    <title><?= $title ?></title>
</head>

<body>
    <div class="view mb-5" style="background-image :url('../public/img/angela-leshchinskiy-9opmgpTotJY-unsplash.jpg');background-size: 100%">
        <div class="bg-dark">

            <div class="container">
                <div class="row">

                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">

                        <img src="../public/img/logo.png" width="60" height="50" alt="Blog logo">

                        <a class="navbar-brand ml-3" href="#">Jean Forteroche<br><small>Auteur et écrivain</small></a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarContent">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="navbarContent" class="collapse navbar-collapse ">

                            <ul class="navbar-nav ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="../public/index.php"><i
                                            class="fas fa-igloo"></i>Accueil</a>
                                </li>

                                <?php if (isset($_SESSION["role"]) && $_SESSION["role"] == "admin") { ?>
                                
                                <li class="nav-item active ">
                                <a class="nav-link " href="../public/index.php?route=administration">Espace Administration</a>
                                </li>
                                <?php } ?>

                                <?php if (isset($_SESSION["role"])) { ?>

                                <li class="nav-item active ">
                                    <a class="nav-link " href="../public/index.php?route=logout"><i
                                            class="fas fa-sign-out-alt"></i>Déconnexion</a>
                                </li>
                                <li class="nav-item active ">
                                    <a class="nav-link " href="../public/index.php?route=profile"><i
                                            class="fas fa-user"></i>Mon profil</a>
                                </li>

                                <?php } else{ ?>

                                <li class="nav-item active ">
                                    <a class="nav-link" href="../public/index.php?route=register">Inscription</a>
                                </li>

                                <li class="nav-item active ">
                                    <a class="nav-link " href="../public/index.php?route=login"><i
                                            class="fas fa-sign-in-alt"></i>Connexion</a>
                                </li>

                                <li class="nav-item active ">
                                    <a class="nav-link " href="../public/index.php?route=contact"><i
                                            class="fas fa-envelope-open"></i>Contact</a>
                                </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </nav>

                </div>
            </div>
        </div>

        <div id="content">

            <?= $content ?>

        </div>


        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>




        <footer class="fixed-bottom">
            <div class="bg-dark">
                <div class="container"></div>
                <div class="row mt-2">
                    <div class="col">
                        <ul class="list-inline text-center mt-3">

                            <li class="list-inline-item">&middot;</li>
                            <li class="fab fa-twitter text-primary" title="Twitter"> Twitter</li>
                            <li class="list-inline-item">&middot;</li>
                            <li class="fab fa-facebook text-primary" title="Facebook"> Facebook</li>
                            <li class="list-inline-item">&middot;</li>
                            <li class="far fa-envelope text-primary" title="Contact"> Contact</li>
                            <li class="list-inline-item">&middot;</li>
                            <li class="far fa-file text-primary" title="Mentions légales"> Mentions légales</li>
                        </ul>
                    </div>

                </div>
            </div>
        
    </footer>
    </div>
</body>

</html>