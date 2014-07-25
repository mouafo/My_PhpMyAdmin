<section class="content">
    <p><b>Importer depuis un fichier au format SQL</b></p><br>
    <form action="database.php?id=3" method="post" class="form" enctype="multipart/form-data" id="form">
        <fieldset style = "border:radius 1px black;">
            <legend>Importer</legend>
            <div class="form-group" style="vertical-align:middle;">
                <input type="file" name="file_toImport" size="50" /><br><br>
                <button type="submit" name = "importsql" class="btn bg-olive" style="width:100px;font-size:20px">Importer</button>
            </div>  
        </fieldset>                                         
    </form>
    <br>
    <?php include("../php/import.php"); ?>
</section>