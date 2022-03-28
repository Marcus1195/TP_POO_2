<?php

session_start();
if(!isset($_SESSION['user']))
header ('location: index.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Bonjour !</title>
</head>

 <body>
     <h1>Bonjour ! <?php echo $_SESSION['user']; ?></h1>
     <a href="d_connexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
 </body>
</html>