<?php
    mysql_select_db ($_GET['db'], $link);
	if (isset($_GET['id']) && $_GET['id'] == 1)
	{
?>
		<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="pull-left header"><i class="fa fa-th"></i></li>
                <li><a href="#tab_1-1" data-toggle="tab">Afficher</a></li>
                <li class="active"><a href="#tab_2-2" data-toggle="tab">Structure</a></li>
                <li><a href="#tab_3-3" data-toggle="tab">SQL</a></li>
                <li><a href="#tab_4-4" data-toggle="tab">Insert</a></li>
                <li><a href="#tab_5-5" data-toggle="tab">Export</a></li>
                <li><a href="#tab_6-6" data-toggle="tab">Import</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="tab_1-1">
                    <?php include("../php/tables/table_aff.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_5-5">
                    <?php include("../php/tables/table_export.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_6-6">
                    <?php include("../php/tables/table_import.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_4-4">
                    <?php include("../php/tables/table_insert.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane active" id="tab_2-2">
                    <?php include("../php/tables/table_struct.php"); ?>
                </div><!-- /.tab-pane -->
                
                <div class="tab-pane" id="tab_3-3">
                    <?php include("../php/tables/table_sql.php"); ?>
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
                <li><a href="#tab_1-1" data-toggle="tab">Afficher</a></li>
                <li><a href="#tab_2-2" data-toggle="tab">Structure</a></li>
                <li class="active"><a href="#tab_3-3" data-toggle="tab">SQL</a></li>
                <li><a href="#tab_4-4" data-toggle="tab">Insert</a></li>
                <li><a href="#tab_5-5" data-toggle="tab">Export</a></li>
                <li><a href="#tab_6-6" data-toggle="tab">Import</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="tab_1-1">
                    <?php include("../php/tables/table_aff.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_5-5">
                    <?php include("../php/tables/table_export.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_6-6">
                    <?php include("../php/tables/table_import.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_4-4">
                    <?php include("../php/tables/table_insert.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_2-2">
                    <?php include("../php/tables/table_struct.php"); ?>
                </div><!-- /.tab-pane -->
                
                <div class="tab-pane active" id="tab_3-3">
                    <?php include("../php/tables/table_sql.php"); ?>
                </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
        </div><!-- nav-tabs-custom -->
<?php
    }
    else  if (isset($_GET['id']) && $_GET['id'] == 3)
	{
?>
		<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="pull-left header"><i class="fa fa-th"></i></li>
                <li><a href="#tab_1-1" data-toggle="tab">Afficher</a></li>
                <li><a href="#tab_2-2" data-toggle="tab">Structure</a></li>
                <li><a href="#tab_3-3" data-toggle="tab">SQL</a></li>
                <li class="active"><a href="#tab_4-4" data-toggle="tab">Insert</a></li>
                <li><a href="#tab_5-5" data-toggle="tab">Export</a></li>
                <li><a href="#tab_6-6" data-toggle="tab">Import</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="tab_1-1">
                    <?php include("../php/tables/table_aff.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_5-5">
                    <?php include("../php/tables/table_export.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_6-6">
                    <?php include("../php/tables/table_import.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane active" id="tab_4-4">
                    <?php include("../php/tables/table_insert.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_2-2">
                    <?php include("../php/tables/table_struct.php"); ?>
                </div><!-- /.tab-pane -->
                
                <div class="tab-pane" id="tab_3-3">
                    <?php include("../php/tables/table_sql.php"); ?>
                </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
        </div><!-- nav-tabs-custom -->
<?php
    }
    else  if (isset($_GET['id']) && $_GET['id'] == 4)
    {
?>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="pull-left header"><i class="fa fa-th"></i></li>
                <li><a href="#tab_1-1" data-toggle="tab">Afficher</a></li>
                <li><a href="#tab_2-2" data-toggle="tab">Structure</a></li>
                <li><a href="#tab_3-3" data-toggle="tab">SQL</a></li>
                <li><a href="#tab_4-4" data-toggle="tab">Insert</a></li>
                <li class="active"><a href="#tab_5-5" data-toggle="tab">Export</a></li>
                <li><a href="#tab_6-6" data-toggle="tab">Import</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="tab_1-1">
                    <?php include("../php/tables/table_aff.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane active" id="tab_5-5">
                    <?php include("../php/tables/table_export.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_6-6">
                    <?php include("../php/tables/table_import.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_4-4">
                    <?php include("../php/tables/table_insert.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_2-2">
                    <?php include("../php/tables/table_struct.php"); ?>
                </div><!-- /.tab-pane -->
                
                <div class="tab-pane" id="tab_3-3">
                    <?php include("../php/tables/table_sql.php"); ?>
                </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
        </div><!-- nav-tabs-custom -->
<?php
    }
    else  if (isset($_GET['id']) && $_GET['id'] == 5)
    {
?>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="pull-left header"><i class="fa fa-th"></i></li>
                <li><a href="#tab_1-1" data-toggle="tab">Afficher</a></li>
                <li><a href="#tab_2-2" data-toggle="tab">Structure</a></li>
                <li><a href="#tab_3-3" data-toggle="tab">SQL</a></li>
                <li><a href="#tab_4-4" data-toggle="tab">Insert</a></li>
                <li><a href="#tab_5-5" data-toggle="tab">Export</a></li>
                <li class="active"><a href="#tab_6-6" data-toggle="tab">Import</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="tab_1-1">
                    <?php include("../php/tables/table_aff.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_5-5">
                    <?php include("../php/tables/table_export.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane active" id="tab_6-6">
                    <?php include("../php/tables/table_import.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_4-4">
                    <?php include("../php/tables/table_insert.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_2-2">
                    <?php include("../php/tables/table_struct.php"); ?>
                </div><!-- /.tab-pane -->
                
                <div class="tab-pane" id="tab_3-3">
                    <?php include("../php/tables/table_sql.php"); ?>
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
                <li class="active"><a href="#tab_1-1" data-toggle="tab">Afficher</a></li>
                <li><a href="#tab_2-2" data-toggle="tab">Structure</a></li>
                <li><a href="#tab_3-3" data-toggle="tab">SQL</a></li>
                <li><a href="#tab_4-4" data-toggle="tab">Insert</a></li>
                <li><a href="#tab_5-5" data-toggle="tab">Export</a></li>
                <li><a href="#tab_6-6" data-toggle="tab">Import</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1-1">
                    <?php include("../php/tables/table_aff.php"); ?>
                </div><!-- /.tab-pane -->
                
                <div class="tab-pane" id="tab_5-5">
                    <?php include("../php/tables/table_export.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_6-6">
                    <?php include("../php/tables/table_import.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_4-4">
                    <?php include("../php/tables/table_insert.php"); ?>
                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_2-2">
                    <?php include("../php/tables/table_struct.php"); ?>
                </div><!-- /.tab-pane -->
                
                <div class="tab-pane" id="tab_3-3">
                    <?php include("../php/tables/table_sql.php"); ?>
                </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
        </div><!-- nav-tabs-custom -->
<?php
    }
    mysql_close();
?>

<script type="text/javascript">
    function droptab(db, col, tab) {
        if (confirm("Etes vous sure de vouloir supprimer la colonne '" + col + "' ? Tous ses enregistrements seront egalement supprimer.")) {
            location.href = "../php/drop.php?db=" + db + "&tab=" + tab + "&col=" + col;
        }
    }
</script>
