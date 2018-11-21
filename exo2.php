<!DOCTYPE html>
    <?php 
     session_start();
     $_SESSION['lastname'] = 'Dudikoff';
     $_SESSION['firstname'] = 'Michaël';
     $_SESSION['age'] = 42;
  ?>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>ExoPhp2 - Partie8</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" /> 
        <link href="style.css" rel="stylesheet"/>  
    </head>
    <body>
        <div class="container">
            <h1>ExoPhp2 - Partie8</h1>
            <p>Sur la page index, faire un liens vers une autre page. 
                <br />Passer d'une page à l'autre le contenu des variables <b>lastname</b>, <b>firstname</b> et <b>age</b> grâce aux sessions. Ces variables auront été définies directement dans le code.
                <br />Il faudra afficher le contenu de ces variables sur la deuxième page.</p>
    </div>    
    <div class="container">
        <a href = "exo2_2.php">Clique pour voir les variables sur l'autre page</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
