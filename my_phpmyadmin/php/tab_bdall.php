<?php
	if (isset($_GET['id']) && $_GET['id'] == 1)
	{
?>
		<div class="nav-tabs-custom">
        	<ul class="nav nav-tabs">
        		<li class="pull-left header"><i class="fa fa-th"></i></li>
				<li><a href="#tab_1-1" data-toggle="tab">Base de Donees</a></li>
                <li class="active"><a href="#tab_2-2" data-toggle="tab">SQL</a></li>
                <li><a href="#tab_3-3" data-toggle="tab">Exporter</a></li>
                <li><a href="#tab_4-4" data-toggle="tab">Importer</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="tab_1-1">
                    <?php include("../php/tab_bdall/tab_bdall_aff.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3-3">
                    <?php include("../php/tab_bdall/tab_bdall_export.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_4-4">
                    <?php include("../php/tab_bdall/tab_bdall_import.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane active" id="tab_2-2">
                     <?php include("../php/tab_bdall/tab_bdall_sql.php"); ?>
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
                <li><a href="#tab_1-1" data-toggle="tab">Base de Donees</a></li>
                <li><a href="#tab_2-2" data-toggle="tab">SQL</a></li>
                <li class="active"><a href="#tab_3-3" data-toggle="tab">Exporter</a></li>
                <li><a href="#tab_4-4" data-toggle="tab">Importer</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="tab_1-1">
                    <?php include("../php/tab_bdall/tab_bdall_aff.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane active" id="tab_3-3">
                    <?php include("../php/tab_bdall/tab_bdall_export.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_4-4">
                    <?php include("../php/tab_bdall/tab_bdall_import.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2-2">
                     <?php include("../php/tab_bdall/tab_bdall_sql.php"); ?>
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
                <li><a href="#tab_1-1" data-toggle="tab">Base de Donees</a></li>
                <li><a href="#tab_2-2" data-toggle="tab">SQL</a></li>
                <li><a href="#tab_3-3" data-toggle="tab">Exporter</a></li>
                <li class="active"><a href="#tab_4-4" data-toggle="tab">Importer</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="tab_1-1">
                    <?php include("../php/tab_bdall/tab_bdall_aff.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3-3">
                    <?php include("../php/tab_bdall/tab_bdall_export.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane active" id="tab_4-4">
                    <?php include("../php/tab_bdall/tab_bdall_import.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2-2">
                     <?php include("../php/tab_bdall/tab_bdall_sql.php"); ?>
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
                <li class="active"><a href="#tab_1-1" data-toggle="tab">Base de Donees</a></li>
                <li><a href="#tab_2-2" data-toggle="tab">SQL</a></li>
                <li><a href="#tab_3-3" data-toggle="tab">Exporter</a></li>
                <li><a href="#tab_4-4" data-toggle="tab">Importer</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1-1">
                    <?php include("../php/tab_bdall/tab_bdall_aff.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3-3">
                    <?php include("../php/tab_bdall/tab_bdall_export.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_4-4">
                    <?php include("../php/tab_bdall/tab_bdall_import.php"); ?>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2-2">
                     <?php include("../php/tab_bdall/tab_bdall_sql.php"); ?>
                </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
        </div><!-- nav-tabs-custom -->
<?php
    }
?>

