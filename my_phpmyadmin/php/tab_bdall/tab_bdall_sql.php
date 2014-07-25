<section class="content">
                                        <form action="database.php?id=1" method="post" class="form" enctype="multipart/form-data" id="form">
                                            <fieldset style = "border:radius 1px black;">
                                        <legend>Exécuter une ou des requêtes SQL sur le serveur localhost</legend>
                                            <div class="form-group" style="vertical-align:middle;">
                                                <textarea name = "txt_query" cols = "157px" rows = "10px" placeholder = "Type SQL Query here ..."></textarea><br><br>
                                                <button type="submit" name = "launch_sql" class="btn bg-olive" style="width:100px;font-size:20px">Executer</button>
                                            </div>  
                                        </fieldset>                                         
                                        </form>
                                        <br><br>
                                        <?php
                                            if (isset($_POST['launch_sql']))
                                            {
                                                $result = mysql_query($_POST['txt_query'], $link);
                                                ?>
                                        <div class="box">
                                <div class="box-body table-responsive">
                                                <?php include("../pages/tab_bdall.php");
                                            } ?>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                    </section>