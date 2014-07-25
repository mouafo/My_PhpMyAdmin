<section class="content">
                    <h1>
                                            Base de Donnees
                                        </h1>
                                        <br> <i class="fa fa-plus-circle"></i> Creer une Base de Donnee . <br>
                                        <form action="../php/launch_query.php" method="post" class="form" enctype="multipart/form-data" id="form">
                                            <span style="font-style:italic; color:red;"><?php if (!empty($_GET['erreur'])) {echo $_GET['erreur']; } ?></span>
                                            <span style="font-style:italic; color:green;"><?php if (!empty($_GET['success'])) {echo $_GET['success']; } ?></span>
                                            <div class="form-group" style="vertical-align:middle;">
                                                <input type="text" name="bd_name" style="width:300px; border-radius:5px;" placeholder="Nom de la Base de donnee ..." required/>
                                                <button type="submit" name = "creer_db" class="btn bg-olive" style="width:100px;font-size:20px">Creer</button>
                                            </div>                                                              
                                        </form>
                                        <div class="box">
                                <div class="box-body table-responsive">
                                    <table id="db_mysql" class="table table-bordered table-hover">
                                        <thead>
                                            <tr  style="text-align:center; font-size:20px;">
                                                <th>Database</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $link = mysql_connect ($_SESSION['server'],$_SESSION['user'], $_SESSION['password']) or die ('Erreur : '.mysql_error() );
                                            $result = mysql_query("SHOW DATABASES", $link) or die ('Erreur : ' .mysql_error() );
                                            while($row = mysql_fetch_array($result)) {
                                                echo '<tr><td><a href="../pages/db.php?db='.$row["Database"].'">'.$row["Database"].'</a></td></tr>';
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                     </section>