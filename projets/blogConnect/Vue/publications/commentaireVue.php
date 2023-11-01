<p><a href="../compte/accueilVue.php"> Retour </a></p>

<h5>Publication de [onshow.pseudo] </h5>
<p> Titre : [onshow.titre]</p>
<p> Contenu : [onshow.contenu]</p>

<br />
<h2>Commentaires:</h2>
<form method="POST">
    <input type="text" name="pseudo" placeholder="Votre pseudo" /><br />
    <textarea name="commentaire" placeholder="Votre commentaire..."></textarea><br />
    <input type="submit" value="Poster mon commentaire" name="submit_commentaire" />
</form>
<?php if(isset($c_msg)) { echo $c_msg; } ?>
<br /><br />
<?php while($c = $commentaires->fetch()) { ?>
    <b><?= $c['pseudo'] ?>:</b> <?= $c['commentaire'] ?><br />
<?php } ?>


$pseudoAvis = $c['pseudo'];
$commAvis = $c['commentaire'];