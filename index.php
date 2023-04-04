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
    <title>Contre Plongée Ciné</title>
    <script src="back.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="titre">
        CONTRE PLONGÉE CINÉ
    </div>
    <div id="placeholderCarrou" style="width: 80%; height: 400px; background-color:grey; margin-top: 20px; margin-bottom: 20px; margin-left: 10%;">
        EMPLACEMENT POUR LES BANNIERES
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

                $nbr = 0;
                while ($nbr < 2) { ?> <!-- WHILE il rest des articles (ordre à voir si on fait un tri) -->

                    <div class="boxArticles">

                        <div class="row" style="width: 130%; height: 150px; margin-top: 20px; margin-right :100px; text-align: start;">
                            <hr>
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
                            <hr>
                        </div>

                    </div>


                <?php $nbr++;
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