<!DOCTYPE html>
<?php
if (isset($_POST['login']) && isset($_POST['password'])){
setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, null, null, false, true);
setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, null, null, false, true);
header('location:exo3.php');
}
?>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>ExoPhp3 - Partie8</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" /> 
        <link href="style.css" rel="stylesheet"/>  
    </head>
    <body>
        <div class="container">
            <h1>ExoPhp3 - Partie8</h1>
            <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur.
                <br />A la validation du formulaire, stocker les informations dans un cookie.</p>
        </div>    
        <div class="container">
            <form action="" method="post">
                <fieldset>
                    <legend>CONNEXION</legend>
                    <label for="login">Pseudo : </label><input type="text" name="login" id="login" placeholder="Jonjon76" />
                    <label for="password">Mot de passe : </label><input type="text" name="password" id="password" placeholder="Mot_de_passe" />
                    <input type="submit" name="submit" value="Valider" />
                </fieldset>
            </form>
            <a href = "exo4.php">Clique pour aller vérifier ton login et ton mot de passe</a>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
