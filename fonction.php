<?php
function footer()
{
?>
    <footer class='text-center text-white' style='background-color: rgba(0, 0, 0, 0.904);color:white; width: 100%;'>
    
        <div class='container pt-4'>
            <section class='text-center text-light'>
                <p>
                    NOMDUSITE est un site deposé par JESAISPAS. <br>
                    Tous droits réservés.
                </p>
            </section>
        </div>
        <div class='text-center text-light p-3' style='background-color: rgba(0, 0, 0, 0.2);'>
            © <?php $year = date("Y"); echo $year; ?> NOMDUSITE<br>
        </div>
    </footer>
<?php
}

function mainHeader()
{
?>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" >NOMDUSITE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link active" href="seances.php">Séances</a>
                    <a class="nav-link active" href="gazette.php">Gazette</a>
                </div>
            </div>
        </div>
    </nav>
<?php
}
?>