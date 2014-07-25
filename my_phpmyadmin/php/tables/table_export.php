<section class="content">
                    <p><b>Exporter les enregistrements au format SQL</b></p><br>
                    <form action="show.php?id=4&db=<?php echo $_GET['db'] ?>&tab=<?php echo $_GET['tab'] ?>" method="post" class="form" enctype="multipart/form-data" id="form">
                    <fieldset style = "border:radius 1px black;">
                        <legend>Exporter</legend>
                            <div class="form-group" style="vertical-align:middle;">
                                <button type="submit" name = "export_tabsql" class="btn bg-olive" style="width:100px;font-size:20px">Exporter</button>
                            </div>  
                    </fieldset>                                         
                    </form>
    <br>
    <?php include("../php/export.php"); ?>
</section>