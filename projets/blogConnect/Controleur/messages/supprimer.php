<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet-php', 'root', '');
if(isset($_SESSION['id']) AND !empty($_SESSION['id'])) {
    if(isset($_GET['id']) AND !empty($_GET['id'])) {
        $id_message = intval($_GET['id']);
        $msg = $bdd->prepare('DELETE FROM messages WHERE id_message = ? AND id_destinataire = ?');
        $msg->execute(array($_GET['id'],$_SESSION['id']));
        header('Location:reception.php');
    }
} 
?>