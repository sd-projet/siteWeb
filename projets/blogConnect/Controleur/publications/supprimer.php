<?php
require("../../BaseDonnee/connect.php");
$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $login, $password);
if(isset($_GET['id']) AND !empty($_GET['id'])) {
    $suppr_id = htmlspecialchars($_GET['id']);
    $suppr = $bdd->prepare('DELETE FROM publications WHERE id_photo = ?');
    $suppr->execute(array($suppr_id));
    header('Location: publication.php');
}
?>