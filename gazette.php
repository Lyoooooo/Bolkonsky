<?php
include "fonction.php";
$pdo = connexion();
mainHeader();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gazette</title>
    <script src="back.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="titre">
        GAZETTE
    </div>
    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="position: fixed; bottom: 10%; right: 5%; border: 0px; background-color:rgba(0,0,0,0); z-index: 1;">
        <img src="icons/boutonAddPost.webp" alt="" style="height: 60px;">
    </button>
    <?php ajoutgazette(); ?>


    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="post" style="width: 80%; height:400px; background-color:grey; margin-top: 50px; margin-bottom: 50px; margin-left: 10%; position:relative">
                    GAZETTE JJ/MM/AAA
                </div>
            </div>
            <div class="col">
                <div class="post" style="width: 80%; height:400px; background-color:grey; margin-top: 50px; margin-bottom: 50px; margin-left: 10%; position:relative">
                    GAZETTE JJ/MM/AAA
                </div>
            </div>
            <div class="col">
                <div class="post" style="width: 80%; height:400px; background-color:grey; margin-top: 50px; margin-bottom: 50px; margin-left: 10%; position:relative">
                    GAZETTE JJ/MM/AAA
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="post" style="width: 80%; height:400px; background-color:grey; margin-top: 50px; margin-bottom: 50px; margin-left: 10%; position:relative">
                    GAZETTE JJ/MM/AAA
                </div>
            </div>
            <div class="col">
                <div class="post" style="width: 80%; height:400px; background-color:grey; margin-top: 50px; margin-bottom: 50px; margin-left: 10%; position:relative">
                    GAZETTE JJ/MM/AAA
                </div>
            </div>
            <div class="col">
                <div class="post" style="width: 80%; height:400px; background-color:grey; margin-top: 50px; margin-bottom: 50px; margin-left: 10%; position:relative">
                    GAZETTE JJ/MM/AAA
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="post" style="width: 800px; height:850px;  background-color:grey; margin-top: 50px; margin-bottom: 50px; margin-left: 30%; position:relative">
        Inserer Gazette
    </div> -->
</body>
<?php
footer();
?>

</html>