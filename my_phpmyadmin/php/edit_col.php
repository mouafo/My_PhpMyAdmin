<!DOCTYPE html>
<?php
    session_start();
    $link = mysql_connect ($_SESSION['server'],$_SESSION['user'], $_SESSION['password']) or die ('Erreur : '.mysql_error() );
    $_SESSION['db'] = $_GET['db'];
    mysql_select_db ($_GET['db'], $link);
    if (isset($_SESSION['user']))
	{
?>
<html>
    <head>
        <meta charset="UTF-8"> 
        <title>Modifier colonne - my_php_MyAdmin</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'> <!-- layout -->
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
        <?php 
        	include("../php/top-bar.php");
        ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php include("../php/side-bar.php");?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Bienvenu Sur My_PhpmyAdmin
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="../pages/database.php"><i class="fa fa-dashboard"></i> Bases de donnees</a></li>
                        <li><a href="../pages/db.php?db=<?php echo $_GET['db']; ?>"><?php echo $_GET['db']; ?></a></li>
                        <li class="active"><?php echo $_GET['tab']; ?></li>
                    </ol>
                </section>
                <br>
                            <!-- Custom Tabs (Pulled to the right) -->
       <section class="content">
            <div class="row">
                        <!-- left column -->
                <div class="col-md-12" style="text-align:center;">
                    Structure
                </div><!--/.col (left) -->
            </div>   <!-- /.row -->
            <div class="row" style="text-align:center;">
                        <!-- left column -->
                <div class="col-md-4">
                    Nom
                </div><!--/.col (left) -->
                <div class="col-md-2">
                    Type
                </div><!--/.col (left) -->
                <div class="col-md-2">
                    Longueur
                </div><!--/.col (left) -->
                <div class="col-md-1">
                    Primary_key
                </div><!--/.col (left) -->
                <div class="col-md-1">
                    Null
                </div><!--/.col (left) -->
                <div class="col-md-2">
                    Auto Increment
                </div><!--/.col (left) -->
            </div>   <!-- /.row -->
        </section><!-- /.content -->


<?php
    $sql = "DESC ".$_GET['tab'];
    $result = mysql_query($sql);
    if (!$result) {
        echo "Erreur DB, impossible de lister les enregistrements\n";
        echo 'Erreur MySQL : ' . mysql_error();
        exit;
    }
    $tab_title = array_keys(mysql_fetch_array(mysql_query($sql)));
    while ($row = mysql_fetch_array($result)) {
        if ($row[0] == $_GET['col']) {
?>
                    <!--    <div class="box">
                            <div class="box-body table-responsive">
                                <table id="db_mysql2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr  style="text-align:center;">
                                            <th>Nom de la Table</th>
                                            <th>Type</th>
                                            <th>Null</th>
                                            <th>Key</th>
                                            <th>Default</th>
                                            <th>Extra</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                         <tr>-->
        <form action="../php/launch_query.php?db=<?php echo $_GET["db"]; ?>&tab=<?php echo $_GET["tab"]; ?>&col=<?php echo $row[0]; ?>" method="post" class="form" enctype="multipart/form-data" id="form"> 
        <section class="content">
            <div class="row" style="text-align:center;">
                        <!-- left column -->
                <div class="col-md-4">
                    <input type="text" value="<?php echo $row[0]; ?>" name="champ_name" style="width:300px; border-radius:5px;" placeholder="Nom du champ..."/>
                </div><!--/.col (left) -->
                <?php if (preg_match_all("#(\w+)\((\d+)\)#i", $row[1], $matches)) { ?>
                <div class="col-md-2">
                    <select class="form-control" name="champ_type" style="width:150px; border-radius:5px;">
                        <option value="<?php echo $matches[1][0]; ?>"><?php echo $matches[1][0]; ?></option>
                        <option value="INT">INT</option>
                        <option value="DECIMAL">DECIMAL</option>
                        <option value="DOUBLE">DOUBLE</option>
                        <option value="FLOAT">FLOAT</option>
                        <option value="CHAR">CHAR</option>
                        <option value="VARCHAR">VARCHAR</option>
                        <option value="TEXT">TEXT</option>
                        <option value="BIT">BIT</option>
                        <option value="BOOLEAN">BOOLEAN</option>
                        <option value="DATE">DATE</option>
                        <option value="DATETIME">DATETIME</option>
                        <option value="TIMESPAN">TIMESPAN</option>
                    </select>
                </div><!--/.col (left) -->
                <div class="col-md-2">
                    <input type="text" value="<?php echo $matches[2][0]; ?>" name="champ_longueur" style="width:150px; border-radius:5px;"/>
                </div><!--/.col (left) -->
                <?php }
                else {  ?>

                    <div class="col-md-2">
                    <select class="form-control" name="champ_type" style="width:150px; border-radius:5px;">
                        <option value="<?php echo $row[1]; ?>">$row[1]</option>
                        <option value="INT">INT</option>
                        <option value="DECIMAL">DECIMAL</option>
                        <option value="DOUBLE">DOUBLE</option>
                        <option value="FLOAT">FLOAT</option>
                        <option value="CHAR">CHAR</option>
                        <option value="VARCHAR">VARCHAR</option>
                        <option value="TEXT">TEXT</option>
                        <option value="BIT">BIT</option>
                        <option value="BOOLEAN">BOOLEAN</option>
                        <option value="DATE">DATE</option>
                        <option value="DATETIME">DATETIME</option>
                        <option value="TIMESPAN">TIMESPAN</option>
                    </select>
                </div><!--/.col (left) -->
                <div class="col-md-2">
                    <input type="text" name="champ_longueur" style="width:150px; border-radius:5px;"/>
                </div><!--/.col (left) -->

                <?php } ?>
                <div class="col-md-1">
                <?php if ($row[3] == "PRI") {?>    
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" checked disabled/>
                        </label>
                    </div>
                <?php } else { ?>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="champ_pk" />
                        </label>
                    </div>
                <?php } ?>
                </div>
                <div class="col-md-1">
                    <?php if ($row[2] == "YES") {?>
                     <div class="checkbox">
                        <label><input name="champ_null" type="checkbox" checked/></label>                                                
                    </div>
                    <?php } else { ?>
                    <div class="checkbox">
                        <label><input name="champ_null" type="checkbox"/></label>                                                
                    </div>
                    <?php } ?>
                </div><!--/.col (left) -->
                <div class="col-md-2">
                    <?php if ($row[5] == "auto_increment") {?>
                    <div class="checkbox">
                        <label><input name="champ_AI" type="checkbox" checked/></label>                                                
                    </div>
                    <?php } else { ?>
                    <div class="checkbox">
                        <label><input name="champ_AI" type="checkbox"/></label>                                                
                    </div>
                    <?php } ?>
                </div><!--/.col (left) -->
            </div>   <!-- /.row -->
            <br>
        </section><!-- /.content -->
             <div class="row">
                        <!-- left column -->
                <div class="col-md-12" style="text-align:center;">
                    <button type="submit" name = "edit_table" class="btn bg-olive" style="width:100px;font-size:20px">Modifier</button>
                </div><!--/.col (left) -->
            </div>   <!-- /.row -->               
                <!-- Content Header (Page header) -->
                <!-- Main content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
    </form> 
<?php
            }
        }
        mysql_free_result($result);
?>
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