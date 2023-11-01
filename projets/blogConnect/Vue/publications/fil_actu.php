<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Fil d'actualité</title>
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
                    <a href="fil_actu.php" class="nav-link ">
							<span class="pcoded-micon">
								<i class="feather icon-box"></i>
							</span><span class="pcoded-mtext">Fil d'actualité</span>
                    </a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Messages</label>
                </li>
                <li class="nav-item">
                    <a href="../messages/messages.php" class="nav-link ">
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
            <img src="assets/images/logo.png" alt="" class="logo">
            <img src="assets/images/logo-icon.png" alt="" class="logo-thumb">
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
                            <li class="breadcrumb-item"><a href="publications.html">Publications</a></li>
                            <li class="breadcrumb-item"><a href="#!">Fil d'actualité</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-md-12">
            <div class="card latest-update-card">
                <div class="card-body">
                    <br>
                    <h1 class="mt-4">Fil d'actualité</h1>
                    <hr>

                    <?php
                    require("../../BaseDonnee/connect.php");
                    $bdd = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
                    $articles = $bdd->query('SELECT * FROM publications ORDER BY date_time_publication DESC');
                    while($a = $articles->fetch()) { ?>
                        <div class="card-body" style="display: inline-block;">
                            <img class="card-img-top img-fluid" src="../../miniatures/<?= $a['id_photo'] ?>.jpg" style="height:100%; width:100%" alt="Card image cap">
                            <div class="card-body">
                                <br>
                                <h5 class="card-title "><?= $a['titre'] ?></h5>
                                <p class="card-text"><a href="article.php?id=<?= $a['id_photo'] ?>"> </a></p>
                                <div class="btn-group" role="group" aria-label="button groups">
                                    <a class="btn  btn-secondary" href="commentairesVueProfil.php?id=<?= $a['id_photo'] ?>">En savoir plus </a>
                                </div>
                            </div>
                        </div>
                    <?php }?>
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
</div>

<!-- custom-chart js -->
</body>

</html>
