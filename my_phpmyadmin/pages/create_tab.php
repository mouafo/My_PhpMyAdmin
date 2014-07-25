<!DOCTYPE html>
<?php
	session_start();
    $link = mysql_connect ($_SESSION['server'],$_SESSION['user'], $_SESSION['password']) or die ('Erreur : '.mysql_error() );
    $_SESSION['db'] = $_GET['db'];
    if (isset($_SESSION['user']))
	{
?>
<html>
    <head>
        <meta charset="UTF-8"> 
        <title>Create table - my_php_MyAdmin</title>
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
            if (isset($_POST['col_num'])) { 
                $_SESSION['num'] = $_POST['col_num'];
                $_SESSION['table_name'] = $_POST['table_name'];
            }
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
                        <li class="active"><?php echo $_SESSION['table_name']; ?></li>
                    </ol>
                </section>
                <br>
                            <!-- Custom Tabs (Pulled to the right) -->
            <div class="row">
                        <!-- left column -->
                <div class="col-md-12" style="text-align:center;">
                <form action="#" method="post" class="form" enctype="multipart/form-data" id="form">
                    nom de la table : <input type="text" name="champ_name" style="width:300px; border-radius:5px;" value="<?php echo $_SESSION['table_name']; ?>"/>
                    add <input type="number" name="num" min="1" style="width:50px; border-radius:5px;" value="1"/> colonnes
                    <button type="submit" name = "add_col" class="btn bg-olive" style="width:100px;font-size:20px">Aller</button>
                </form>
                </div><!--/.col (left) -->
            </div>   <!-- /.row -->
                            <section class="content">
            <div class="row">
                        <!-- left column -->
                <div class="col-md-12" style="text-align:center;">
                    <h2>Structure</h2>
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
        <form action="../php/launch_query.php" method="post" class="form" enctype="multipart/form-data" id="form"> 
        <section class="content">
             
<?php 
if (isset($_POST['num'])) {
    $_SESSION['num'] += $_POST['num'];
}

for ($i = 0; $i < $_SESSION['num']; $i++) { ?>
            <div class="row" style="text-align:center;">
                        <!-- left column -->
                <div class="col-md-4">
                    <input type="text" name="champ_name<?php echo $i; ?>" style="width:300px; border-radius:5px;" placeholder="Nom du champ..."/>
                </div><!--/.col (left) -->
                <div class="col-md-2">
                    <select class="form-control" name="champ_type<?php echo $i; ?>" style="width:150px; border-radius:5px;">
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
                    <input type="text" name="champ_longueur<?php echo $i; ?>" style="width:150px; border-radius:5px;"/>
                </div><!--/.col (left) -->
                <div class="col-md-1">
                    <div class="radio">
                        <label>
                            <input type="radio" name="champ_pk" id="champ_pk<?php echo $i; ?>" value="champ_pk<?php echo $i; ?>">
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="checkbox">
                        <label><input name="champ_null<?php echo $i; ?>" type="checkbox"/></label>                                                
                    </div>
                </div><!--/.col (left) -->
                <div class="col-md-2">
                    <div class="checkbox">
                        <label><input name="champ_AI<?php echo $i; ?>" type="checkbox"/></label>                                                
                    </div>
                </div><!--/.col (left) -->
            </div>   <!-- /.row -->
            <br>
<?php } ?>
        </section><!-- /.content -->
             <div class="row">
                        <!-- left column -->
                <div class="col-md-12" style="text-align:center;">
                    <button type="submit" name = "creer_table" class="btn bg-olive" style="width:100px;font-size:20px">Creer</button>
                </div><!--/.col (left) -->
            </div>   <!-- /.row -->               
                <!-- Content Header (Page header) -->
                <!-- Main content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
    </form> 

        <!-- jQuery 2.0.2 -->
        <script src="../js/jquery-2.1.1.js"></script>
        <!-- Bootstrap -->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
		 <!-- DATA TABES SCRIPT -->
        <script src="../js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../js/AdminLTE/app.js" type="text/javascript"></script>
		<script type="text/javascript">
            $(function() {
                $("#db_mysql").dataTable({
                    "scrollX": true
                });
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>
    </body>
</html>
<?php
	}
	else
	{
		header('Location: ../pages/index.php');
	}
?>