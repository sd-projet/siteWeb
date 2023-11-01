<?php
session_start();
require("../../BaseDonnee/connect.php");
require("../../tbs_3132/tbs_class.php");

$tbs = new clsTinyButStrong;

$bdd = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
if(isset($_SESSION['id'])) {
    header('Location: profil.php?id='.$_SESSION['id']);
}
$tbs->LoadTemplate("../../Vue/compte/profil.html");
$tbs->Show();
?>