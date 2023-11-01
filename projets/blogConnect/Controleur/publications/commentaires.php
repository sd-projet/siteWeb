<?php
require("../../tbs_3132/tbs_class.php");
require("../../BaseDonnee/connect.php");
require("../../Modele/requeteClass.php");

$tbs = new clsTinyButStrong;

$bdd = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);

//$pseudo2 = $bdd->prepare('SELECT pseudo FROM `membres`,`publications` WHERE publications.id_memb = ? and ? =  membres.id');
//$pseudo2->execute(array($$_GET['idmemb']));
//$pseudo2 = $pseudo2->fetch();
/*
if(isset($_GET['id']) AND !empty($_GET['id'])) {
    $getid = htmlspecialchars($_GET['id']);
    $publication = $bdd->prepare('SELECT * FROM publications WHERE id_photo = ?');
    $publication->execute(array($getid));
    $publication = $publication->fetch();
    if (isset($_POST['submit_commentaire'])) {
        if (isset($_POST['pseudo'], $_POST['commentaire']) and !empty($_POST['pseudo']) and !empty($_POST['commentaire'])) {
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $commentaire = htmlspecialchars($_POST['commentaire']);
            if (strlen($pseudo) < 25) {
                $ins = $bdd->prepare('INSERT INTO commentaires (pseudo, commentaire, id_article) VALUES (?,?,?)');
                $ins->execute(array($pseudo, $commentaire, $getid));
                $c_msg = "<span style='color:green'>Votre commentaire a bien été posté</span>";
            } else {
                $c_msg = "Erreur: Le pseudo doit faire moins de 25 caractères";
            }
        } else {
            $c_msg = "Erreur: Tous les champs doivent être complétés";
        }
    }
    $commentaires = $bdd->prepare('SELECT * FROM commentaires WHERE id_article = ? ORDER BY id_comm DESC');
    $commentaires->execute(array($getid));
    while ($c = $commentaires->fetch()){
        $pseudoAvis = $c['pseudo'];
        $commAvis = $c['commentaire'];
    }

}


$contenu = $publication['contenu'];
$titre = $publication['titre'];*/

// Mise en œuvre du gabarit
if (isset ($_SESSION['id'])){

    $tbs->LoadTemplate("../../Vue/publications/commentairesVueProfil.php");}
else {
    $tbs->LoadTemplate("../../Vue/publications/commentaireVue.php");
}
$tbs->Show();
?>