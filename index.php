<?php
include "fonction.php";
$pdo = connexion();
mainHeader();


$res = $pdo->prepare("SELECT * FROM article ORDER BY datepost DESC limit 2");
$res->execute();
$tab = $res->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contre Plongée Ciné</title>
    <script src="back.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="placeholderCarrou">
        <div id="carouselExample" class="carousel slide" style="width: 100%; aspect-ratio: 8 / 1; overflow: hidden;">
            <!-- METTRE UNE RECUPERATION DANS LA BDD -->

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/banner1.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/banner2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/banner3.webp" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </div>

    <div class="titre">
        CONTRE PLONGÉE CINÉ
    </div>

    <div class="hr" style="width: 90%; margin-top: 20px; margin-bottom: 20px; margin-left: 5%;">
        <hr>
    </div>

    <div id="bigInsta" style="width: 80%; height: 500px; background-color:darkred; margin-top: 20px; margin-bottom: 20px; margin-left: 10%;">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <div class="post" style="width: 80%; height:400px; background-color:grey; margin-top: 50px; margin-bottom: 50px; margin-left: 10%; position:relative">
                        POST INSTA
                    </div>
                </div>
                <div class="col">
                    <div class="post" style="width: 80%; height:400px; background-color:grey; margin-top: 50px; margin-bottom: 50px; margin-left: 10%; position:relative">
                        POST INSTA
                    </div>
                </div>
                <div class="col">
                    <div class="post" style="width: 80%; height:400px; background-color:grey; margin-top: 50px; margin-bottom: 50px; margin-left: 10%; position:relative">
                        POST INSTA
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hr" style="width: 90%; margin-top: 20px; margin-bottom: 20px; margin-left: 5%;">
        <hr>
    </div>

    <div class="container text-center">
        <div class="row">
            <div class="col-8">


                <?php
                foreach ($tab as $article) {
                ?>
                    <div class="boxArticles">
                        <hr>
                        <div class="row" style="width: 130%; height: 150px; margin-top: 20px; margin-right :100px; text-align: start;">
                            <div class="col-2">
                                <div class="photoSeance" style="margin-left:20%">
                                    <img src="<?php echo $article['photo']; ?>" alt="">
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="titreArticle">
                                    <?php echo $article['titre']; ?>
                                </div>
                                <div class="descriArticle" style=" max-height: 100px;">
                                    <?php echo $article['description']; ?>
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
            </div>
            <div class="col-4">
                <div id="placeholderCarrou" style="width: 80%; height: 400px; background-color:bisque; margin-top: 20px; margin-bottom: 20px; margin-left: 45%;">
                    EMPLACEMENT POUR NEWSLETTER
                </div>
            </div>
        </div>
    </div>
</body>
<?php
footer();
?>

</html>