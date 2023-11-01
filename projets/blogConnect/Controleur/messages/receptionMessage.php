<?php
require("../BaseDonnee/connect.php");

$bdd = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);

if(isset($_SESSION['id']) AND !empty($_SESSION['id'])) {
    $msg = $bdd->prepare('SELECT * FROM messages WHERE id_destinataire = ? ORDER BY id_message DESC');
    $msg->execute(array($_SESSION['id']));
    $msg_nbr = $msg->rowCount();

    if($msg_nbr == 0) {
        echo "Vous n'avez aucun message...";
    }
    while($m = $msg->fetch()) {
        $p_exp = $bdd->prepare('SELECT pseudo FROM membres2 WHERE id = ?');
        $p_exp->execute(array($m['id_expediteur']));
        $p_exp = $p_exp->fetch();
        $p_exp = $p_exp['pseudo'];

    }
}
?>