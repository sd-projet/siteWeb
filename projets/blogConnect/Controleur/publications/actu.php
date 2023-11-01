<?php
require("../../tbs_3132/tbs_class.php");
require("../../BaseDonnee/connect.php");

$tbs = new clsTinyButStrong;

$bdd = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);

$articles = $bdd->query('SELECT * FROM publications ORDER BY date_time_publication DESC');

while($a = $articles->fetch()) {
    $titre = $a['titre'];
    $contenu = $a['contenu'];
    $photo = $a['id_photo'];
}
$tbs->LoadTemplate("../../Vue/publications/fil_actu.php");
$tbs->Show();
?>