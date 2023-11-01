<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Mes publications</title>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <!-- Favicon icon -->
    <link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">
    <!-- vendor css -->
    <link rel="stylesheet" href="../../assets/css/style.css">

</head>
<body class="">

<nav class="pcoded-navbar  ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div " >
            <div class="">

                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        <li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
                        <li class="list-group-item"><a href="auth-normal-sign-in.html"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Profil</label>
                </li>
                <li class="nav-item">
                    <a href="../../Controleur/compte/retour.php" class="nav-link ">
							<span class="pcoded-micon">
								<i class="feather icon-home"></i>
							</span><span class="pcoded-mtext">Mes informations</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../../Controleur/compte/editionprofil.php" class="nav-link ">
							<span class="pcoded-micon">
								<i class="feather icon-layout"></i></span>
                        <span class="pcoded-mtext">Modifier mes informations</span>
                    </a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Publications</label>
                </li>
                <li class="nav-item">
                    <a href="../../Controleur/publications/publication.php" class="nav-link ">
							<span class="pcoded-micon">
								<i class="feather icon-box"></i>
							</span><span class="pcoded-mtext">Mes publications</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../../Controleur/publications/actu.php" class="nav-link ">
							<span class="pcoded-micon">
								<i class="feather icon-box"></i>
							</span><span class="pcoded-mtext">Fil d'actualité</span>
                    </a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Messages</label>
                </li>
                <li class="nav-item">
                    <a href="#!" class="nav-link ">
							<span class="pcoded-micon">
								<i class="feather icon-file-text"></i>
							</span>
                        <span class="pcoded-mtext">Mes messages</span>
                    </a>
                </li>

                <li class="nav-item pcoded-menu-caption">
                    <label>Deconnexion</label>
                </li>
                <li class="nav-item">
                    <a href="../../Controleur/compte/deconnexion.php" class="nav-link ">
							<span class="pcoded-micon">
								<i class="feather icon-file-text"></i>
							</span>
                        <span class="pcoded-mtext">Me déconnecter</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->
<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        <a href="#!" class="b-brand">
            <!-- ========   change your logo hear   ============ -->
            <img src="../../assets/images/logo.png" alt="" class="logo">
            <img src="../assets/images/logo-icon.png" alt="" class="logo-thumb">
        </a>
        <a href="#!" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="feather icon-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <img src="../assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                            <span>John Doe</span>
                            <a href="../connexion.html" class="dud-logout" title="Logout">
                                <i class="feather icon-log-out"></i>
                            </a>
                        </div>
                        <ul class="pro-body">
                            <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                            <li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                            <li><a href="../connexion.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
<!-- [ Header ] end -->
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Profil</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../accueil.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="../../Controleur/publications/publication.php">Publications</a></li>
                            <li class="breadcrumb-item"><a href="../../Controleur/publications/publication.php">Mes publications</a></li>
                            <li class="breadcrumb-item"><a href="#!">Avis</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-md-12">
            <div class="card latest-update-card">
                <div class="card-body">
                    <br>
                    <h1 class="mt-4">Avis</h1>
                    <hr>
                    <!--<h5>Publication de [onshow.pseudo] </h5>-->
                    <!-- <p> Titre : [onshow.titre]</p>
                    <p> Contenu : [onshow.contenu]</p>
                    <br />-->

                    <?php
                    require("../BaseDonnee/connect.php");
                    $bdd = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);

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

                        <h5>Titre : <?= $publication['titre'] ?></h5>
                        <h5>Description : <?= $publication['contenu'] ?></h5>

                        <?php if(isset($c_msg)) { echo $c_msg; } ?>
                        <br /><br />
                        <?php while($c = $commentaires->fetch()) { ?>
                            <b><?= $c['pseudo'] ?>:</b> <?= $c['commentaire'] ?><br />
                        <?php } ?>

                        <hr>
                        <h5>Laisser un commentaire :</h5>
                        <br>

                        <form method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="pseudo">Pseudo</label>
                                    <input type="text" class="form-control" name="pseudo" placeholder="Votre pseudo">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="commentaire">Votre commentaire</label>
                                    <textarea class="form-control" name="commentaire"  rows="2" cols="20" placeholder="Votre commentaire..."></textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit" name="submit_commentaire" >Poster mon commentaire</button>

                        </form>

                        <?php
                    }
                    ?>


                </div>
            </div>
        </div>
    </div>
</div>

<![endif]-->
<!-- Warning Section Ends -->

<!-- Required Js -->
<script src="../../assets/js/plugins/bootstrap.min.js"></script>
<script src="../../assets/js/pcoded.min.js"></script>

</body>

</html>
