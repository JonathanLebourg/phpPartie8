<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>ExoPhp1 - Partie8</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" /> 
        <link href="style.css" rel="stylesheet"/>  
    </head>
    <body>
        <div class="container">
            <h1>ExoPhp1 - Partie8</h1>
            <p>Faire une page HTML permettant de donner à l'utilisateur :
            <ul>
                <li>son User Agent</li>
                <li>son adresse ip</li>
                <li>le nom du serveur</li>
            </ul>
        </p>
    </div>    
    <div class="container">
        <p><b>User Agent :</b> <?= $_SERVER['HTTP_USER_AGENT'] ?><br />
            <b>Adresse ip :</b> <?= $_SERVER['REMOTE_ADDR'] ?><br />
            <b>Nom du serveur :</b> <?= $_SERVER['SERVER_NAME'] ?></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
