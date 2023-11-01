<?php
require("../tbs_3132/tbs_class.php");
require("../BaseDonnee/connect.php");

$tbs = new clsTinyButStrong;

$bdd = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);

$publications = $bdd->query('SELECT * FROM publications ORDER BY date_time_publication DESC');

while($a = $publications->fetch()) {

    $tbs->LoadTemplate("../Vue/accueil.html");
    $tbs->Show();
}
?>

