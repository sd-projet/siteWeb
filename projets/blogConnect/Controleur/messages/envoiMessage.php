<?php

session_start();
require("../../BaseDonnee/connect.php");
require("../../tbs_3132/tbs_class.php");
$tbs = new clsTinyButStrong;


$bdd = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);

if(isset($_SESSION['id']) AND !empty($_SESSION['id'])) {
    if (isset($_POST['envoi_message'])) {
        if (isset($_POST['destinataire'], $_POST['message'], $_POST['objet']) and !empty($_POST['destinataire']) and !empty($_POST['message']) and !empty($_POST['objet'])) {
            $destinataire = htmlspecialchars($_POST['destinataire']);
            $message = htmlspecialchars($_POST['message']);
            $objet = htmlspecialchars($_POST['objet']);
            $id_destinataire = $bdd->prepare('SELECT id FROM membres2 WHERE pseudo = ?');
            $id_destinataire->execute(array($destinataire));
            $dest_exist = $id_destinataire->rowCount();
            if ($dest_exist == 1) {
                $id_destinataire = $id_destinataire->fetch();
                $id_destinataire = $id_destinataire['id'];
                $ins = $bdd->prepare('INSERT INTO messages(id_expediteur,id_destinataire,message,objet) VALUES (?,?,?,?)');
                $ins->execute(array($_SESSION['id'], $id_destinataire, $message, $objet));
                $error = "Votre message a bien été envoyé !";
            } else {
                $error = "Cet utilisateur n'existe pas...";
            }
        } else {
            $error = "Veuillez compléter tous les champs";
        }
    }
    $destinataires = $bdd->query('SELECT pseudo FROM membres2 ORDER BY pseudo');
    if (isset($_GET['r']) and !empty($_GET['r'])) {
        $r = htmlspecialchars($_GET['r']);
    }
    if (isset($_GET['o']) and !empty($_GET['o'])) {
        // $o = urldecode($_GET['o']);
        $o = htmlspecialchars($_GET['o']);
        if (substr($o, 0, 3) != 'RE:') {
            $o = "RE:" . $o;
        }
    }

    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
    alert("Message envoyé avec succès !");

}

$tbs->LoadTemplate("../../Vue/messages/messages.php");
$tbs->Show();
?>