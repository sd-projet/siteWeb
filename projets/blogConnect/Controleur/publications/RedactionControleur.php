<?php
session_start();
require("../../BaseDonnee/connect.php");
require("../../tbs_3132/tbs_class.php");

$tbs = new clsTinyButStrong;
$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $login, $password);

$mode_edition = 0;
if(isset($_GET['edit']) AND !empty($_GET['edit'])) {
    $mode_edition = 1;
    $edit_id = htmlspecialchars($_GET['edit']);
    $edit_publication = $bdd->prepare('SELECT * FROM publications WHERE id_photo = ?');
    $edit_publication->execute(array($edit_id));
    if($edit_publication->rowCount() == 1) {
        $edit_publication = $edit_publication->fetch();
    } else {
        die('Erreur : l\'publication n\'existe pas...');
    }
}
if(isset($_POST['publication_titre'], $_POST['publication_contenu'], $_SESSION['id'])) {
    if(!empty($_POST['publication_titre']) AND !empty($_POST['publication_contenu'])) {

        $publication_titre = htmlspecialchars($_POST['publication_titre']);
        $publication_contenu = htmlspecialchars($_POST['publication_contenu']);

        if($mode_edition == 0) {

            $id_session = $_SESSION['id'];

            $ins = $bdd->prepare("INSERT INTO publications (titre, contenu, date_time_publication, id_memb) VALUES(?, ?, NOW(),$id_session)");
            $ins->execute(array($publication_titre,$publication_contenu));

            //$ins = $bdd->prepare('INSERT INTO publications (titre, contenu, date_time_publication,id_memb) VALUES (?, ?, NOW(),?)');
            //$ins->execute(array($publication_titre, $publication_contenu,$membre));
            $lastid = $bdd->lastInsertId();

            if(isset($_FILES['miniature']) AND !empty($_FILES['miniature']['name'])) {
                $destination = '../miniatures/'.$lastid.'.jpg';
                $res = move_uploaded_file($_FILES["miniature"]["tmp_name"], $destination);
                if ($res) $etat = "Fichier téléchargé avec succès";
                else $etat = $_FILES["photo"]["error"];
            }
            $message = 'Votre publication a bien été posté';
            header('Location: publication.php');

        } else {
            //$update = $bdd->prepare('UPDATE publications SET titre = ?, contenu = ?, date_time_edition = NOW() WHERE id = ?');
            $update = $bdd->prepare('UPDATE publications SET titre = ?, contenu = ?, date_time_edition = NOW() WHERE id_photo = ? ');

            $update->execute(array($publication_titre, $publication_contenu, $edit_id));
            header('Location: ../article.php?id='.$edit_id);
            $message = 'Votre publication a bien été mis à jour !';
        }
    } else {
        $message = 'Veuillez remplir tous les champs';
    }
}

$tbs->LoadTemplate("../../Vue/publications/redaction.html");
$tbs->Show();


?>
