<?php
require("../BaseDonnee/connect.php");
$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $login, $password);
if(isset($_GET['id_photo']) AND !empty($_GET['id_photo'])) {
    $get_id = htmlspecialchars($_GET['id_photo']);
    $article = $bdd->prepare('SELECT * FROM publications WHERE id_photo = ?');
    $article->execute(array($get_id));
    if($article->rowCount() == 1) {
        $article = $article->fetch();
        $id = $article['id_photo'];
        $titre = $article['titre'];
        $contenu = $article['contenu'];
    } else {
        die('Cet article n\'existe pas !');
    }
} else {
    die('Erreur');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <meta charset="utf-8">
</head>
<body>
<img src="../miniatures/<?= $id ?>.jpg" width="400" />
<h1><?= $titre ?></h1>
<p><?= $contenu ?></p>
</body>
</html>