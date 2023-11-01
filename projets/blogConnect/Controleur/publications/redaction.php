<?php

require("../../BaseDonnee/connect.php");
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
        die('Erreur : la publication n\'existe pas...');
    }
}
if(isset($_POST['publication_titre'], $_POST['publication_contenu'])) {
    if(!empty($_POST['publication_titre']) AND !empty($_POST['publication_contenu'])) {

        $publication_titre = htmlspecialchars($_POST['publication_titre']);
        $publication_contenu = htmlspecialchars($_POST['publication_contenu']);
        if($mode_edition == 0) {
            // var_dump($_FILES);
            // var_dump(exif_imagetype($_FILES['miniature']['tmp_name']));
            $ins = $bdd->prepare('INSERT INTO publications (titre, contenu, date_time_publication) VALUES (?, ?, NOW())');
            $ins->execute(array($publication_titre, $publication_contenu));
            $lastid = $bdd->lastInsertId();

            if(isset($_FILES['miniature']) AND !empty($_FILES['miniature']['name'])) {
                if(exif_imagetype($_FILES['miniature']['tmp_name']) == 2) {
                    $chemin = 'miniatures/'.$lastid.'.jpg';
                    move_uploaded_file($_FILES['miniature']['tmp_name'], $chemin);
                } else {
                    $message = 'Votre image doit être au format jpg';
                }
            }
            $message = 'Votre publication a bien été posté';
        } else {
            $update = $bdd->prepare('UPDATE publications SET titre = ?, contenu = ?, date_time_edition = NOW() WHERE id_photo = ?');
            $update->execute(array($publication_titre, $publication_contenu, $edit_id));
            header('article.php?id='.$edit_id);
            $message = 'Votre article a bien été mis à jour !';
        }
    } else {
        $message = 'Veuillez remplir tous les champs';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Rédaction / Edition</title>
    <meta charset="utf-8">
</head>
<body>
<form method="POST" enctype="multipart/form-data">
    <input type="text" name="publication_titre" placeholder="Titre"<?php if($mode_edition == 1) { ?> value="<?=
    $edit_publication['titre'] ?>"<?php } ?> /><br />
    <textarea name="publication_contenu" placeholder="Contenu de l'publication"><?php if($mode_edition == 1) { ?><?=
      $edit_publication['contenu'] ?><?php } ?></textarea><br />
    <?php if($mode_edition == 0) { ?>
        <input type="file" name="miniature" /><br />
    <?php } ?>
    <input type="submit" value="Envoyer la publication" />
</form>
<br />
<?php if(isset($message)) { echo $message; } ?>
</body>
</html>