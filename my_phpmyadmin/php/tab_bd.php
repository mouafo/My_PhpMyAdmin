<?php
	if (isset($_GET['id']) && $_GET['id'] == 1)
	{
?>
		<div class="nav-tabs-custom">
        	<ul class="nav nav-tabs">
        		<li class="pull-left header"><i class="fa fa-th"></i></li>
				<li><a href="#tab_1-1" data-toggle="tab">Structure</a></li>
                <li class="active"><a href="#tab_2-2" data-toggle="tab">SQL</a></li>
                <li><a href="#tab_3-3" data-toggle="tab">Exporter</a></li>
                <li><a href="#tab_4-4" data-toggle="tab">Importer</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="tab_1-1">
                    <?php include("../php/tab_bd/tab_bd_struct.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3-3">
                    <?php include("../php/tab_bd/tab_bd_export.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_4-4">
                    <?php include("../php/tab_bd/tab_bd_import.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane active" id="tab_2-2">
                    <?php include("../php/tab_bd/tab_bd_sql.php"); ?>
                </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
        </div><!-- nav-tabs-custom -->
<?php
    }
    else if (isset($_GET['id']) && $_GET['id'] == 2)
    {
?>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="pull-left header"><i class="fa fa-th"></i></li>
                <li><a href="#tab_1-1" data-toggle="tab">Structure</a></li>
                <li><a href="#tab_2-2" data-toggle="tab">SQL</a></li>
                <li class="active"><a href="#tab_3-3" data-toggle="tab">Exporter</a></li>
                <li><a href="#tab_4-4" data-toggle="tab">Importer</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="tab_1-1">
                    <?php include("../php/tab_bd/tab_bd_struct.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane active" id="tab_3-3">
                    <?php include("../php/tab_bd/tab_bd_export.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_4-4">
                    <?php include("../php/tab_bd/tab_bd_import.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2-2">
                    <?php include("../php/tab_bd/tab_bd_sql.php"); ?>
                </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
        </div><!-- nav-tabs-custom -->
<?php
    }
        else if (isset($_GET['id']) && $_GET['id'] == 3)
    {
?>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="pull-left header"><i class="fa fa-th"></i></li>
                <li><a href="#tab_1-1" data-toggle="tab">Structure</a></li>
                <li><a href="#tab_2-2" data-toggle="tab">SQL</a></li>
                <li><a href="#tab_3-3" data-toggle="tab">Exporter</a></li>
                <li class="active"><a href="#tab_4-4" data-toggle="tab">Importer</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="tab_1-1">
                    <?php include("../php/tab_bd/tab_bd_struct.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3-3">
                    <?php include("../php/tab_bd/tab_bd_export.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane active" id="tab_4-4">
                    <?php include("../php/tab_bd/tab_bd_import.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2-2">
                    <?php include("../php/tab_bd/tab_bd_sql.php"); ?>
                </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
        </div><!-- nav-tabs-custom -->
<?php
    }
    else
	{
?>
		<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="pull-left header"><i class="fa fa-th"></i></li>
                <li class="active"><a href="#tab_1-1" data-toggle="tab">Structure</a></li>
                <li><a href="#tab_2-2" data-toggle="tab">SQL</a></li>
                <li><a href="#tab_3-3" data-toggle="tab">Exporter</a></li>
                <li><a href="#tab_4-4" data-toggle="tab">Importer</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1-1">
                    <?php include("../php/tab_bd/tab_bd_struct.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3-3">
                    <?php include("../php/tab_bd/tab_bd_export.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_4-4">
                    <?php include("../php/tab_bd/tab_bd_import.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2-2">
                    <?php include("../php/tab_bd/tab_bd_sql.php"); ?>
                </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
        </div><!-- nav-tabs-custom -->
<?php
    }
    mysql_close();
?>

<script type="text/javascript">
    function drop(table, db) {
        if (confirm("Etes vous sure de vouloir supprimer la table '" + table + "' ?")) {
            location.href = "../php/drop.php?db=" + db + "&tab=" + table;
        }
    }

    function truncate(table, db) {
        if (confirm("Etes vous sure de vouloir supprimer tous les enregistrements de la table avec la commande TRUNCATE TABLE '" + table + "' ?")) {
            location.href = "../php/truncate.php?db=" + db + "&tab=" + table;
        }
    }
</script>
