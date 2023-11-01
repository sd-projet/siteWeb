<?php
session_start();
require("../BaseDonnee/connect.php");
require("../tbs_3132/tbs_class.php");
//require ("../Modele/modele.php");

$tbs = new clsTinyButStrong;

$bdd = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);

if(isset($_POST['formconnexion'])) {
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);
    if(!empty($mailconnect) AND !empty($mdpconnect)) {
        $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
        $requser->execute(array($mailconnect, $mdpconnect));
        $userexist = $requser->rowCount();
        if($userexist == 1) {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['mail'] = $userinfo['mail'];
            header("Location: compte/profil.php?id=".$_SESSION['id']);
        } else {
            $erreur = "Mauvais mail ou mot de passe !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}

//$deconnect = new Compte();
//$cible = $deconnect->deconnect();

//$tbs->MergeBlock("cible",$cible);

$tbs->LoadTemplate("../Vue/connexion.html");
$tbs->Show();

?>