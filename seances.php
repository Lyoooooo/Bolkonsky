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
        CONTRE PLONGEE CINE
    </div>
    <div class="container text-center">
        <!-- WHILE il rest des cinés avec des films, row avec les films -->
        <?php $cines = 0;
        while($cines <2){?>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <hr>
                    </div>
                    <div class="col">
                        Nom du ciné
                    </div>
                    <div class="col">
                        <hr>
                    </div>
                </div>
                <?php 
                $films = 0;
                while($films<2){ ?>
                <div class="row" style="height: 300px;"> <!-- exemple film -->
                    <div class="col-4">
                        <div class="photoSeance">
                            <img src="images/placeholderAffiche.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class = "titreFilm" style = "background-color:beige;">
                            PROMARE LE MEILLEUR FILM DE TOUS LES TEMPS
                        </div>
                        <div class = "descriFilm" style = "background-color: bisque;">
                            Une énorme tempête de feu a dévasté la moitié des villes du monde, affaiblissant les hommes et donnant naissance à des mutants capables de manier le feu, les Burnish. 30 ans plus tard, un groupe de mutants terroristes, appelés les Mad Burnish, menacent de détruire de nouveau la Terre. Le seul rempart de l'humanité ? La Burning Rescue, une équipe de pompiers d'un nouveau genre qui vont entrer en collision avec les Mad Burnish.
                        </div>
                        <div class="nextSeances" style = "background-color: blanchedalmond;">
                            SEANCES
                        </div>
                    </div>
                </div>
                <?php $films++; } ?>
                <!-- WHILE il rest des films dans ce ciné, row avec les infos -->
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <hr>
                    </div>
                    <div class="col">
                        Nom du ciné
                    </div>
                    <div class="col">
                        <hr>
                    </div>
                </div>
                <div class="row" style="height: 300px;"> <!-- exemple film -->
                    <div class="col-4">
                        <div class="photoSeance">
                            <img src="images/placeholderAffiche.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class = "titreFilm" style = "background-color:beige;">
                            PROMARE LE MEILLEUR FILM DE TOUS LES TEMPS
                        </div>
                        <div class = "descriFilm" style = "background-color: bisque;">
                            Une énorme tempête de feu a dévasté la moitié des villes du monde, affaiblissant les hommes et donnant naissance à des mutants capables de manier le feu, les Burnish. 30 ans plus tard, un groupe de mutants terroristes, appelés les Mad Burnish, menacent de détruire de nouveau la Terre. Le seul rempart de l'humanité ? La Burning Rescue, une équipe de pompiers d'un nouveau genre qui vont entrer en collision avec les Mad Burnish.
                        </div>
                        <div class="nextSeances" style = "background-color: blanchedalmond;">
                            SEANCES
                        </div>
                    </div>
                </div>
                <!-- WHILE il rest des films dans ce ciné, row avec les infos -->
            </div>
        </div>


        <?php $cines++;}?>
    </div>
</body>
<?php footer(); ?>
</html>