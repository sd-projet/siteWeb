<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Message</title>
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
                            <li class="breadcrumb-item"><a href="messages.html">Messages</a></li>
                            <li class="breadcrumb-item"><a href="#!">Mes messages</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-md-12">
            <div class="card latest-update-card">
                <div class="card-body">
                    <br>
                    <h1 class="mt-4">Messages</h1>
                    <hr>
                    <div class="col-sm-12">
                        <div >
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <li><a class="nav-link text-left active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Boite de reception</a></li>
                                            <li><a class="nav-link text-left" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Nouveau message</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9 col-sm-12">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
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
                                                        $p_exp = $bdd->prepare('SELECT pseudo FROM membres WHERE id = ?');
                                                        $p_exp->execute(array($m['id_expediteur']));
                                                        $p_exp = $p_exp->fetch();
                                                        $p_exp = $p_exp['pseudo'];
                                                        ?>

                                                            <a href="../../Controleur/messages/lectureMessageControleur.php?id=<?= $m['id_message'] ?>"<?php if($m['lu'] == 1) { ?>
                                                                <span style="color:grey"><?php } ?>
                                                            <b><?= $p_exp ?></b> vous a envoyé un message<br />
                                                            <b>Objet :</b> <?= $m['objet'] ?><?php if($m['lu'] == 1) { ?>
                                                                </span><?php } ?>
                                                            </a><br />
                                                    <?php } }?>

                                                <div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                <form class="needs-validation" novalidate action="../../Controleur/messages/envoiMessage.php" method="post">
                                                    <div class="form-row">
                                                        <div class="col-md-4 mb-3">
                                                            <label for="destinataire">Pseudo du destinataire</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="destinataire">@</span>
                                                                </div>
                                                                <input type="text" class="form-control" name="destinataire" id="destinataire" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                                                <div class="invalid-feedback">
                                                                    Please choose a username.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="objet">Objet</label>
                                                            <input type="text" class="form-control" name="objet" id="objet" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-8 mb-3">
                                                            <label for="message">Contenu du message</label>
                                                            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="2" cols="20"></textarea>
                                                        </div>
                                                    </div>
                                                    <button class="btn  btn-primary" type="submit" name="envoi_message">Envoyer le message</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <!-- Warning Section start -->

    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="../../assets/js/vendor-all.min.js"></script>

    <script src="../../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../../assets/js/pcoded.min.js"></script>
</div>

<!-- custom-chart js -->
</body>

</html>
