<?php
include "fonction.php";
mainHeader();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="back.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="titre">
        GAZETTE
    </div>
    <div class="boxArticles">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Filtrer
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ordre
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Article" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Chercher</button>
                </form>
            </div>
        </div>
    </nav>
    </div>


    <?php

    $nbr = 0;
    while ($nbr < 3) { ?> <!-- WHILE il rest des articles (ordre ?? voir si on fait un tri) -->

        <div class="boxArticles">
            <hr>
            <div class="row" style="height: 150px;">
                <div class="col-2">
                    <div class="photoSeance" style="margin-left:20%">
                        <img src="images/placeholderAffiche.jpg" alt="">
                    </div>
                </div>
                <div class="col-10">
                    <div class="titreArticle">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet ratione repellendus consectetur dolorum itaque, ipsam quia debitis ea saepe, vel quibusdam autem quas earum vitae laborum odio quo! Quo, fugiat.
                    </div>
                    <div class="descriArticle">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, perspiciatis laborum sapiente unde velit veritatis fuga? Molestiae maiores nesciunt ad. Corporis dicta accusamus culpa est unde, quo dolorem dignissimos perferendis?
                    </div>
                    <div>
                        <a href="articleIndiv.php">Lire la suite></a>
                    </div>
                </div>
            </div>
            <hr>
        </div>


    <?php $nbr++;
    }
    ?>
</body>
<?php
footer();
?>

</html>