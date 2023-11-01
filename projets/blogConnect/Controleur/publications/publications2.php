<?php
session_start();
?>
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
                <div class="main-menu-header">
                    <div class="user-details">
                        <span>John Doe</span>
                    </div>
                </div>
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
                    <a href="profil.html" class="nav-link ">
							<span class="pcoded-micon">
								<i class="feather icon-home"></i>
							</span><span class="pcoded-mtext">Mes informations</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="editionProfil.html" class="nav-link ">
							<span class="pcoded-micon">
								<i class="feather icon-layout"></i></span>
                        <span class="pcoded-mtext">Modifier mes informations</span>
                    </a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Publications</label>
                </li>
                <li class="nav-item">
                    <a href="#!" class="nav-link ">
							<span class="pcoded-micon">
								<i class="feather icon-box"></i>
							</span><span class="pcoded-mtext">Mes publications</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../../Vue/publications/fil_actu.html" class="nav-link ">
							<span class="pcoded-micon">
								<i class="feather icon-box"></i>
							</span><span class="pcoded-mtext">Fil d'actualité</span>
                    </a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Messages</label>
                </li>
                <li class="nav-item">
                    <a href="messages.html" class="nav-link ">
							<span class="pcoded-micon">
								<i class="feather icon-file-text"></i>
							</span>
                        <span class="pcoded-mtext">Voir mes messages</span>
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
                            <li class="breadcrumb-item"><a href="accueil.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="publications.html">Publications</a></li>
                            <li class="breadcrumb-item"><a href="#!">Mes publications</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-md-12">
            <div class="card latest-update-card">
                <div class="card-body">
                    <br>
                    <h1 class="mt-4">Mes publications</h1>
                    <hr>
                    <div class="card-body">
                        <a  class="btn btn-primary btn-lg" href="RedactionControleur.php">Ajouter une publication</a>
                    </div>
                    <div class="pcoded-main-container">
                        <div class="pcoded-content">
                            <div class="col-xl-12">
                                <?php
                                require("../../tbs_3132/tbs_class.php");
                                $tbs = new clsTinyButStrong;

                                $bdd = new PDO("mysql:host=127.0.0.1;dbname=projet-php;charset=utf8", "root", "");

                                if(isset($_SESSION['id'])) {
                                $getid = $_SESSION['id'];
                                // $requser = $bdd->prepare('SELECT id FROM membres2 WHERE id = ?');
                                $publications = $bdd->prepare('SELECT * FROM publications,membres where membres.id = ? and publications.id_memb = membres.id ORDER BY date_time_publication DESC');
                                $publications->execute(array($getid));}
                                while($a = $publications->fetch()) {
                                    ?>
                                    <div class="card-body" style="display: inline-grid;">
                                        <img class="card-img-top" src="miniatures/<?= $a['id_photo'] ?>.jpg" width="100" alt="Card image cap">
                                        <div class="card-body">
                                            <br>
                                            <h5 class="card-title "><?= $a['titre'] ?></h5>
                                            <p class="card-text"><a href="../article.php?id=<?= $a['id_photo'] ?>"> </a></p>
                                            <div class="btn-group" role="group" aria-label="button groups">
                                                <a class="btn  btn-secondary" href="RedactionControleur.php?edit=<?= $a['id_photo'] ?>">Modifier</a>
                                                <a class="btn  btn-secondary" href="commentaires.php?id=<?= $a['id_photo'] ?>">Voir les avis </a>
                                                <a class="btn  btn-secondary" href="supprimer.php?id=<?= $a['id_photo'] ?>">Supprimer</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                                ?>
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
    <script src="../../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../../assets/js/pcoded.min.js"></script>


    <!-- custom-chart js -->
</body>

</html>
