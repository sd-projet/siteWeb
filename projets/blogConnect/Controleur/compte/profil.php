<?php
session_start();
require("../../tbs_3132/tbs_class.php");
require("../../BaseDonnee/connect.php");

$tbs = new clsTinyButStrong; // Créer un objet clsTinyButStrong

$bdd = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);

if(isset($_GET['id']) AND $_GET['id'] > 0) {
    $getid = $_GET['id'];
    $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();

    $pseudo = $userinfo['pseudo'];
    //echo $pseudo;
    $mail = $userinfo['mail'];
    //echo $mail;
    $tbs->LoadTemplate("../../Vue/compte/profil.html");
    $tbs->Show();

    if (isset($_SESSION['id']) and $userinfo['id'] == $_SESSION['id']) {
        $tbs->LoadTemplate("editionprofil.php");
        $tbs->Show();
    }
$tbs->MergeBlock("pseudo",$pseudo);
$tbs->MergeBlock("mail",$mail);

$tbs->Show();
}
?>