<?php
require("../../tbs_3132/tbs_class.php");
require("../../BaseDonnee/connect.php");

$tbs = new clsTinyButStrong;

$bdd = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);

$tbs->LoadTemplate("../../Vue/messages/messages.php");
$tbs->Show();
?>