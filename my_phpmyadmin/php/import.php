<?php
	if (isset($_POST['importsql']))
    {
        //Export the database and output the status to the page
        if (isset($_GET['db'])) {
            $chemin_destination = '../mysql/';     
            move_uploaded_file($_FILES['file_toImport']['tmp_name'], $chemin_destination.$_FILES['file_toImport']['name']);     
            $file = $chemin_destination.$_FILES['file_toImport']['name'];
            $output = array();
            exec("../mysql/mysql --host=".$_SESSION['server']." --user=".$_SESSION['user']." --password=".$_SESSION['password']." ".$_GET['db']." < ".$file, $output, $worked);
            switch($worked){
                case 0:
                    echo '<span style="font-style:italic; color:green;">La Base de donnee '.$_GET['tab'].' a ete Importer avec succes</span>';
                    break;
                case 1:
                    echo '<span style="font-style:italic; color:red;">Une erreur est survenue lors de l\'importation. De ce fait l\'operation est annuler</span>';
                    break;
                case 2:
                    echo '<span style="font-style:italic; color:red;">Impossible de trouver le fichier</span>';
                    break;
                case 3:
                    echo '<span style="font-style:italic; color:red;">Le systeme ne peut retrouver le chemin specifier</span>';
                    break;
                case 4:
                    echo '<span style="font-style:italic; color:red;">Impossible d\'ouvrir le fichier</span>';
                    break;
                case 5:
                    echo '<span style="font-style:italic; color:red;">Acces au fichier refuser</span>';
                    break;
                default:
                    echo '<span style="font-style:italic; color:red;">Une erreur avec le code <a href="http://www.hiteksoftware.com/knowledge/articles/049.htm" target="_blank">'.$worked.'</a> est survenu.<br>
                    Pour connaitre a quoi correspond cette erreur, allez sur le <a href="http://www.hiteksoftware.com/knowledge/articles/049.htm" target="_blank">lien suivant</a></span>';
            }
            if( file_exists ( $file))
                unlink( $file ) ;
        }
        else {
            $chemin_destination = '../mysql/';     
            move_uploaded_file($_FILES['file_toImport']['tmp_name'], $chemin_destination.$_FILES['file_toImport']['name']);     
            $file = $chemin_destination.$_FILES['file_toImport']['name'];
            $output = array();
            exec("../mysql/mysql --host=".$_SESSION['server']." --user=".$_SESSION['user']." --password=".$_SESSION['password']." < ".$file, $output, $worked);
            switch($worked){
                case 0:
                    echo '<span style="font-style:italic; color:green;">Les Bases de donnees ont ete Importer avec succes</span>';
                    break;
                case 1:
                    echo '<span style="font-style:italic; color:red;">Une erreur est survenue lors de l\'importation. De ce fait l\'operation est annuler</span>';
                    break;
                case 2:
                    echo '<span style="font-style:italic; color:red;">Impossible de trouver le fichier</span>';
                    break;
                case 3:
                    echo '<span style="font-style:italic; color:red;">Le systeme ne peut retrouver le chemin specifier</span>';
                    break;
                case 4:
                    echo '<span style="font-style:italic; color:red;">Impossible d\'ouvrir le fichier</span>';
                    break;
                case 5:
                    echo '<span style="font-style:italic; color:red;">Acces au fichier refuser</span>';
                    break;
                default:
                    echo '<span style="font-style:italic; color:red;">Une erreur avec le code <a href="http://www.hiteksoftware.com/knowledge/articles/049.htm" target="_blank">'.$worked.'</a> est survenu.<br>
                    Pour connaitre a quoi correspond cette erreur, allez sur le <a href="http://www.hiteksoftware.com/knowledge/articles/049.htm" target="_blank">lien suivant</a></span>';
            }
            if( file_exists ( $file))
                unlink( $file ) ;
        }

    }
?>