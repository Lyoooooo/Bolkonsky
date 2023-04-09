<?php
include "fonction.php";
$pdo = connexion();
mainHeader();

$res = $pdo->prepare("SELECT * FROM article ORDER BY datepost DESC limit 10");
$res->execute();
$tab = $res->fetchAll();

if (isset($_GET['order']) && $_GET['order'] == 'asc') {
    $order = 'ASC';
} else {
    $order = 'DESC';
}

if (isset($_GET['sort'])) {
    switch ($_GET['sort']) {
        case 'titre':
            $col = 'titre';
            break;
        case 'datesortie':
            $col = 'datesortie';
            break;
        case 'datepost':
            $col = 'datepost';
            break;
        default:
            $col = 'datepost';
            break;
    }
} else {
    $col = 'datepost';
}

$res = $pdo->prepare("SELECT * FROM article ORDER BY $col $order limit 10");
$res->execute();
$tab = $res->fetchAll();

if (isset($_POST["reset"])) {
    $res = $pdo->prepare("SELECT * FROM article ORDER BY datepost DESC limit 10");
    $res->execute();
    $tab = $res->fetchAll();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icons/pp.png" />
    <title>Article</title>
    <script src="back.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="titre">
        ARTICLE
    </div>
    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="position: fixed; bottom: 10%; right: 5%; border: 0px; background-color:rgba(0,0,0,0); z-index: 1;">
        <img src="icons/boutonAddPost.webp" alt="" style="height: 60px;">
    </button>
    <?php ajoutarticle(); ?>

    <div class="boxArticles">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php
                                if (isset($_GET['sort'])) {
                                    if ($_GET['sort'] == 'titre') {
                                        echo 'Titre';
                                    } elseif ($_GET['sort'] == 'date') {
                                        echo 'Date de sortie';
                                    } elseif ($_GET['sort'] == 'datepost') {
                                        echo 'Date de poste';
                                    }
                                } else {
                                    echo "Date de l'article";
                                }
                                ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?sort=titre">Titre</a></li>
                                <li><a class="dropdown-item" href="?sort=date">Date de sortie</a></li>
                                <li><a class="dropdown-item" href="?sort=datepost">Date de poste</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php
                                if (isset($_GET['order'])) {
                                    if ($_GET['order'] == 'asc') {
                                        echo 'Croissant';
                                    } elseif ($_GET['order'] == 'desc') {
                                        echo 'Décroissant';
                                    }
                                } else {
                                    echo 'Croissant';
                                }
                                ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?order=desc">Croissant</a></li>
                                <li><a class="dropdown-item" href="?order=asc">Décroissant</a></li>
                            </ul>
                        </li>
                        <button class="btn btn-outline-success" type="submit" name="reset">Reset</button>
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
    foreach ($tab as $article) {
    ?>
        <div class="boxArticles">
            <hr>
            <div class="row" style="height: 150px;">
                <div class="col-2">
                    <div class="photoSeance" style="margin-left:20%">
                        <img src="<?php echo $article['photo']; ?>" alt="">
                    </div>
                </div>
                <div class="col-10">
                    <div class="titreArticle">
                        <?php echo $article['titre']; ?>
                    </div>
                    <div class="descriArticle" style="max-height: 100px;">
                        <!-- <div class="descriArticle" style="overflow-y: auto; max-height: 100px;"> -->
                        <?php echo $article['description']; ?>...
                    </div>
                    <div>
                        <a href="articleIndiv.php?article=<?php echo $article['ida'] ?>">Lire la suite></a>
                    </div>
                </div>

            </div>
            <hr>
        </div>
    <?php
    }
    ?>
</body>
<?php
footer();
?>

</html>