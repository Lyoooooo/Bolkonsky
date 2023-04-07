<?php
include "fonction.php";
$pdo = connexion();
mainHeader();

if (isset($_POST["bouton"])) {
    extract($_POST);
    if ($user == "test" && $mdp == "test") {
        session_start();
        header("location:index.php");
    } else {
        $erreur = "❕ User ou mot de passe incorrect !";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin</title>
    <script src="back.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: white;">
    <?php if (isset($erreur)) : ?> <!--affichage d'un message d'erreur si jamais le user ou le mot de passe n'est pas bon-->
        <div class="alert alert-danger d-flex align-items-center">

            <?php echo $erreur ?>
        </div>
        <script>
            setTimeout(function() { // affiche l'alerte seulement 4 secondes
                document.querySelector('.alert').remove();
            }, 4000);
        </script>
    <?php
    endif;
    ?>
    <div class="row g-3 position-absolute top-50 start-50 translate-middle rounded shadow text-center" id="primal">
        <div class="tab-pane fade show active" id="insc1-tab-pane" role="tabpanel" aria-labelledby="insc1-tab" tabindex="0">
            <div class="h1">
                <h1>Formulaire de Connexion</h1>
            </div>
            <hr>
            <div class="container">
                <form action="" method="post">
                    <label for="validationDefault01" class="form-label">User</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2"><svg xmlns="http://www.w3.org/2000/svg" width="400%" height="15" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
                                <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z" />
                            </svg></span>
                        <input type="text" class="form-control" id="user" name="user" required placeholder="User"><br>
                    </div><br>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Entrez votre mot de passe</label> <!--formulaire pour rentrer son mot de passe-->
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2"> <svg fill="none" viewBox="0 0 24 24" height="20" width="15" xmlns="http://www.w3.org/2000/svg" class="icon"> <!--icone de cadena-->
                                    <path stroke-linecap="round" stroke-width="1.5" stroke="#141B34" d="M18 11.0041C17.4166 9.91704 16.273 9.15775 14.9519 9.0993C13.477 9.03404 11.9788 9 10.329 9C8.67911 9 7.18091 9.03404 5.70604 9.0993C3.95328 9.17685 2.51295 10.4881 2.27882 12.1618C2.12602 13.2541 2 14.3734 2 15.5134C2 16.6534 2.12602 17.7727 2.27882 18.865C2.51295 20.5387 3.95328 21.8499 5.70604 21.9275C6.42013 21.9591 7.26041 21.9834 8 22"></path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#141B34" d="M6 9V6.5C6 4.01472 8.01472 2 10.5 2C12.9853 2 15 4.01472 15 6.5V9"></path>
                                    <path fill="#141B34" d="M21.2046 15.1045L20.6242 15.6956V15.6956L21.2046 15.1045ZM21.4196 16.4767C21.7461 16.7972 22.2706 16.7924 22.5911 16.466C22.9116 16.1395 22.9068 15.615 22.5804 15.2945L21.4196 16.4767ZM18.0228 15.1045L17.4424 14.5134V14.5134L18.0228 15.1045ZM18.2379 18.0387C18.5643 18.3593 19.0888 18.3545 19.4094 18.028C19.7299 17.7016 19.7251 17.1771 19.3987 16.8565L18.2379 18.0387ZM14.2603 20.7619C13.7039 21.3082 12.7957 21.3082 12.2394 20.7619L11.0786 21.9441C12.2794 23.1232 14.2202 23.1232 15.4211 21.9441L14.2603 20.7619ZM12.2394 20.7619C11.6914 20.2239 11.6914 19.358 12.2394 18.82L11.0786 17.6378C9.86927 18.8252 9.86927 20.7567 11.0786 21.9441L12.2394 20.7619ZM12.2394 18.82C12.7957 18.2737 13.7039 18.2737 14.2603 18.82L15.4211 17.6378C14.2202 16.4587 12.2794 16.4587 11.0786 17.6378L12.2394 18.82ZM14.2603 18.82C14.8082 19.358 14.8082 20.2239 14.2603 20.7619L15.4211 21.9441C16.6304 20.7567 16.6304 18.8252 15.4211 17.6378L14.2603 18.82ZM20.6242 15.6956L21.4196 16.4767L22.5804 15.2945L21.785 14.5134L20.6242 15.6956ZM15.4211 18.82L17.8078 16.4767L16.647 15.2944L14.2603 17.6377L15.4211 18.82ZM17.8078 16.4767L18.6032 15.6956L17.4424 14.5134L16.647 15.2945L17.8078 16.4767ZM16.647 16.4767L18.2379 18.0387L19.3987 16.8565L17.8078 15.2945L16.647 16.4767ZM21.785 14.5134C21.4266 14.1616 21.0998 13.8383 20.7993 13.6131C20.4791 13.3732 20.096 13.1716 19.6137 13.1716V14.8284C19.6145 14.8284 19.619 14.8273 19.6395 14.8357C19.6663 14.8466 19.7183 14.8735 19.806 14.9391C19.9969 15.0822 20.2326 15.3112 20.6242 15.6956L21.785 14.5134ZM18.6032 15.6956C18.9948 15.3112 19.2305 15.0822 19.4215 14.9391C19.5091 14.8735 19.5611 14.8466 19.5879 14.8357C19.6084 14.8273 19.6129 14.8284 19.6137 14.8284V13.1716C19.1314 13.1716 18.7483 13.3732 18.4281 13.6131C18.1276 13.8383 17.8008 14.1616 17.4424 14.5134L18.6032 15.6956Z"></path>
                                </svg></span>
                            <input type="password" class="form-control" id="exampleInputPassword1" id="mdp" name="mdp" placeholder="Mot de passe" required>
                        </div>
                    </div>
                    <input type="reset" class="btn btn-primary" value="ANNULER">&nbsp;&nbsp;&nbsp;&nbsp; <!--reset le formulaire-->
                    <input type="submit" class="btn btn-primary" value="ENVOYER" name="bouton"> <br> <!--valide le formulaire et redirige vers index.php-->
                </form>

            </div>
        </div>
    </div>

</body>
<?php
footer();
?>

</html>