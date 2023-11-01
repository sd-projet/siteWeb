<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/styleMenu.css">

</head>
<body>
<ul>
    <li><a class="active" href="#!">Accueil</a></li>
    <li><a href="../../Controleur/connexionControleur.php">Mon compte</a></li>
</ul>
<br>
<br>
<h1>Partagez vos photos !!</h1>
<br> <br>
<?php
require("../..//BaseDonnee/connect.php");
$bdd = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
$articles = $bdd->query('SELECT * FROM publications ORDER BY date_time_publication DESC');

while($a = $articles->fetch()) { ?>
    <div class="card-body" style="display: inline-block;">
        <img class="card-img-top img-fluid" src="../miniatures/<?= $a['id_photo'] ?>.jpg" style="height:100%; width:100%" alt="Card image cap">
        <div class="card-body">
            <br>
            <h5 class="card-title "><?= $a['titre'] ?></h5>
            <p class="card-text"><a href="article.php?id=<?= $a['id_photo'] ?>"> </a></p>
            <div class="btn-group" role="group" aria-label="button groups">
                <a class="btn  btn-secondary" href="../../Controleur/publications/commentaires.php?id=<?= $a['id_photo'] ?>">En savoir plus </a>
            </div>
        </div>
    </div>
<?php }?>

</body>

</html>
