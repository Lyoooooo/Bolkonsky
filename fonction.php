<?php
function connexion()
{
    try {
        $pdo = new PDO('mysql:dbname=cpc;host=127.0.0.1', 'root', '');
        $pdo->exec("SET CHARACTER SET utf8mb4");
    } catch (PDOException $e) {
        $pdo = new PDO('mysql:dbname=cpc;host=127.0.0.1;port=3307', 'root', '');
        $pdo->exec("SET CHARACTER SET utf8mb4");
    }
    return $pdo;
}

?>

<?php
function footer()
{
?>
    <footer class='text-center text-white' style='background-color: rgba(0, 0, 0, 0.904);color:white; width: 100%;'>

        <div class='container pt-4'>
            <section class='text-center text-light'>
                <p>
                    Contre Plongée Ciné est un site deposé par JESAISPAS. <br>
                    Tous droits réservés.
                </p>
            </section>
        </div>
        <div class='text-center text-light p-3' style='background-color: rgba(0, 0, 0, 0.2);'>
            © <?php $year = date("Y");
                echo $year; ?> Contre Plongée Ciné<br>
        </div>
    </footer>
<?php
}

function mainHeader()
{
?>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Contre Plongée Ciné</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link active" href="seances.php">Séances</a>
                    <a class="nav-link active" href="article.php">Article</a>
                    <a class="nav-link active" href="gazette.php">Gazette</a>
                </div>
            </div>
        </div>
    </nav>
<?php
}
?>
<?php
function ajoutgazette()
{
?>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nouvelle Gazette</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            Titre :<span class="etoile"> *</span>
                            <input type="text" class="form-control" id="floatingInput" name="nomgazette" value="Gazette du " required>
                        </div>
                        <label for="validationDefault01" class="form-label">Selectionnez la date de l'ajout du post :</label> <span class="etoile">*</span><br> <!-- permet de rentré le champ date de naissance-->
                        <input type="date" class="form-control" name="dategazette" id="dategazette" value=" " required><br>
                        <script>
                            // Obtenir la date actuelle
                            var currentDate = new Date();

                            // Formater la date dans le format YYYY-MM-DD attendu par l'élément "date"
                            var formattedDate = currentDate.toISOString().substr(0, 10);

                            // Définir la valeur par défaut de l'élément "date" sur la date actuelle
                            document.getElementById("dategazette").value = formattedDate;
                        </script>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">PDF</label>
                            <input class="form-control" name="pdf" type="file" id="formFile" accept=".pdf"><br>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary" name="bouton">Poster</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST["bouton"])) {
        extract($_POST);
        extract($_FILES);
        // $idu = $_SESSION["idu"];
        $pdo = connexion();
        // if ($_FILES['photo']['name'] == "" || $_FILES['photo']['error'] == 4 || $_FILES['photo']['error'] == 1) {
        //   $photo = NULL;
        // } else {
        $pdf = ajoutpdf($nomgazette, $dategazette);
        // }
        $stmt = $pdo->prepare("INSERT INTO gazette VALUES(?,?,?,?)");
        $stmt->execute([null, $nomgazette, $dategazette, $pdf]);
    ?>
        <meta http-equiv="refresh" content="1">
<?php   }
}

function ajoutpdf($nomgazette, $dategazette)
{
    $extensions = array('pdf'); //liste des extensions
    $ext = strtolower(substr(strrchr($_FILES['pdf']['name'], '.'), 1)); //extrait l'extension de l'image et la rend en minuscule
    if ((in_array($ext, $extensions)) && ($_FILES['pdf']['size'] < 20971520)) { //limite la taille et compare l'extension
        $pdf = 'gazette/' . $nomgazette . '-' . $dategazette . '.pdf';
        move_uploaded_file($_FILES['pdf']['tmp_name'], $pdf); //place l'image dans le dossier
    }
    return $pdf;
}
