<section class="content">
                        <?php
                            $sql = "SHOW TABLES FROM ".$_GET['db'];
                            $result = mysql_query($sql);
                            $i = 0;
                            if (!$result) {
                               echo "Erreur DB, impossible de lister les tables\n";
                               echo 'Erreur MySQL : ' . mysql_error();
                               exit;
                            }
                            $result_table = mysql_query($sql);
                            while (mysql_fetch_row($result_table)) {
                               $i++;
                            }
                            if ($i != 0)
                            {

                        ?>
                        <div class="box">
                            <div class="box-body table-responsive">
                                <table id="db_mysql3" class="table table-bordered table-hover">
                                    <thead>
                                        <tr  style="text-align:center; font-size:20px;">
                                            <th>Tables</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        while ($row = mysql_fetch_row($result)) {
                                            echo '<tr><td><a href="../pages/show.php?db='.$_GET["db"].'&tab='.$row[0].'">'.$row[0].'</a></td>';
                                            echo '<td><a href="../pages/show.php?db='.$_GET["db"].'&tab='.$row[0].'"> Afficher </a> | ';
                                            echo ' <a href="../pages/show.php?id=1&db='.$_GET["db"].'&tab='.$row[0].'"> Structure </a> | ';
                                            echo ' <a href="#" onclick="truncate(\''.$row[0].'\', \''.$_GET["db"].'\');"> Vider </a> | ';
                                            echo ' <a href="#" onclick="drop(\''.$row[0].'\', \''.$_GET["db"].'\');"> Supprimer </a></td></tr>';
                                        }
                                        mysql_free_result($result);
                                    ?>
                                    </tbody>
                                </table>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                        <?php
                            }
                        ?>
                        <br> <i class="fa fa-plus-circle"></i> Creer une Table . <br>
                        <form action="../pages/create_tab.php?db=<?php echo $_GET['db'] ?>" method="post" class="form" enctype="multipart/form-data" id="form">
                            <div class="form-group" style="vertical-align:middle;">
                                    Name : <input type="text" name="table_name" style="width:300px; border-radius:5px;" placeholder="Nom de la Table..." required/>
                                    Nombre de colonnes : <input type="number" name="col_num" style="width:100px; border-radius:5px;" min="1" placeholder="Nombre de colonnes..." required/>
                                    <button type="submit" name = "creer_table" class="btn bg-olive" style="width:100px;font-size:20px">Aller</button>
                                </div>                                                              
                            </form>
                     </section>