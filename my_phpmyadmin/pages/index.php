<!DOCTYPE html>
<?php
	session_start();
	if (isset($_SESSION['user']))
	{
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard - my_phpMyAdmin</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue"  onLoad="window.setTimeout('getSecs()',1)">
        <!-- header logo: style can be found in header.less -->
        <?php include("../php/top-bar.php");?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php include("../php/side-bar.php");?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Bienvenu Sur My_PhpmyAdmin
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
				<?php
					if ($_SESSION['password'] == "")
					{
				?>
						<div class="alert alert-warning alert-dismissable">
                            <i class="fa fa-warning"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <b>Attention !!! </b> Votre fichier de configuration fait référence à l'utilisateur « <?php echo $_SESSION['user']; ?>» 
							sans mot de passe. Votre serveur MySQL est donc ouvert aux intrusions, 
							et vous devriez corriger ce problème de sécurité.
                        </div>
				<?php
					}
				?>
					<div class="alert alert-success alert-dismissable">
						<i class="fa fa-check"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<b>Felicitation !!! </b>  Votre connection au nouveau S.G.B.D.R. toute generation <b>my_phpMyAdmin</b> c'est terminer avec succes.
					</div>
					<div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
									<br>
                                    <h3><a href = "../pages/database.php"  style="color:white;">
                                        Base de <br>Donnees
                                    </a>
									</h3>
									
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
								<br><br>
                                    <h3><a href = "../pages/database.php?id=1" style="color:white;">
                                        SQL
                                    </a>
									</h3>
									<br>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
								<br><br>
                                    <h3><a href = "../pages/database.php?id=3"  style="color:white;">
                                        Importer
                                    </a>
									</h3>
									<br>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-cloud"></i>
                                </div>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <br><br>
                                    <h3><a href = "../pages/database.php?id=2"  style="color:white;">
                                        Exporter
                                    </a>
									</h3>
									<br>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-cloud"></i>
                                </div>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->
					<div class="row">
                        <div class="col-md-6">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <i class="fa fa-building-o"></i>
                                    <h3 class="box-title">Serveur de Base de Donnees</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <ul>
                                        <li><dt>Serveur: localhost via TCP/IP</dt></li>
										<li><dt>Type de serveur: MySQL</dt></li>
                                        <li><dt>Version du serveur: 5.6.12-log - MySQL Community Server (GPL)</dt></li>
										<li><dt>Version du protocole: 10</dt></li>
                                        <li><dt>Utilisateur: <?php echo $_SESSION['user']; ?>@localhost</dt></li>
										<li><dt>Jeu de caractères du serveur: UTF-8 Unicode (utf8)</dt></li>
                                    </ul>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- ./col -->
						<div class="col-md-6">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <i class="fa fa-group"></i>
                                    <h3 class="box-title">My_PhpmyAdmin</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <ul>
                                        <li><dt>Version: 4.0.4, dernière version stable : 4.2.3</dt></li>
										<li><a target = "_blank" href = "http://localhost/phpmyadmin/doc/html/index.html">Documentation</a></li>
                                        <li><a target = "_blank" href = "http://wiki.phpmyadmin.net/pma/Welcome_to_phpMyAdmin_Wiki">Wiki</a></li>
										<li><a target = "_blank" href = "http://www.phpmyadmin.net/home_page/index.php">Site officiel</a></li>
                                        <li><a target = "_blank" href = "http://localhost/phpmyadmin/changelog.php">Obtenir de l'aide</a></li>
										<li><a target = "_blank" href = "http://www.phpmyadmin.net/home_page/improve.php">Contribuer</a></li>
                                    </ul>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- ./col -->
                    </div><!-- /.row -->
					
					<div class="row">
                        <div class="col-md-6">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <i class="fa fa-sitemap"></i>
                                    <h3 class="box-title">Serveur Web</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <ul>
                                        <li><dt>Apache/2.4.4 (Win64) PHP/5.4.12</dt></li>
										<li><dt>Version du client de base de données: libmysql - mysqlnd 5.0.10 - 
										20111026 - $Id: e707c415db32080b3752b232487a435ee0372157 $</dt></li>
                                        <li><dt>Extension PHP: mysqli <i class="fa-question-circle"></i></dt></li>
                                    </ul>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- ./col -->
                        <div class="col-md-6">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <i class="fa fa-gears"></i>
                                    <h3 class="box-title">Plus de Parametre</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    Vous pouvez régler d'autres paramètres en modifiant config.inc.php, 
									par exemple au moyen du script d'installation.<i class="fa-question-circle"></i>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="../js/jquery-2.1.1.js"></script>
        <!-- Bootstrap -->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../js/AdminLTE/app.js" type="text/javascript"></script>

    </body>
</html>
<?php
	}
	else
	{
		header('Location: ../pages/index.php');
	}
?>