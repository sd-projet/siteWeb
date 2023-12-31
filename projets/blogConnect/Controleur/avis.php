<meta charset="utf-8" />
<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet-php;charset=utf8','root','');
if(isset($_GET['id']) AND !empty($_GET['id'])) {
    $getid = htmlspecialchars($_GET['id']);
    $publication = $bdd->prepare('SELECT * FROM publications WHERE id_photo = ?');
    $publication->execute(array($getid));
    $publication = $publication->fetch();
    if(isset($_POST['submit_commentaire'])) {
        if(isset($_POST['pseudo'],$_POST['commentaire']) AND !empty($_POST['pseudo']) AND !empty($_POST['commentaire'])) {
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $commentaire = htmlspecialchars($_POST['commentaire']);
            if(strlen($pseudo) < 25) {
                $ins = $bdd->prepare('INSERT INTO commentaires (pseudo, commentaire, id_publication) VALUES (?,?,?)');
                $ins->execute(array($pseudo,$commentaire,$getid));
                $c_msg = "<span style='color:green'>Votre commentaire a bien été posté</span>";
            } else {
                $c_msg = "Erreur: Le pseudo doit faire moins de 25 caractères";
            }
        } else {
            $c_msg = "Erreur: Tous les champs doivent être complétés";
        }
    }
    $commentaires = $bdd->prepare('SELECT * FROM commentaires WHERE id_publication = ? ORDER BY id_comm DESC');
    $commentaires->execute(array($getid));
    ?>
    <h2>publication:</h2>
    <p><?= $publication['contenu'] ?></p>
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
    <?php
}
?>