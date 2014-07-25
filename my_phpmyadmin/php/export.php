<?php
    $output = array();
	if (isset($_POST['export_Allsql']))
    {
        //Export the database and output the status to the page
        $command = '../mysql/mysqldump --opt -h'.$_SESSION['server'].'  -u'.$_SESSION['user'].' -p'.$_SESSION['password'].' --all-databases > ~/Downloads/'.$_SESSION['server'].'.sql';
        exec($command, $output, $worked);
        if ($worked == 0){
            echo '<span style="font-style:italic; color:green;">La Base de donnee a ete Exporter avec succes dans le repertoire ~/Downloads/'.$_SESSION['server'].'.sql</span>';
        }
        else{
            $command = '../mysql/mysqldump --opt -h'.$_SESSION['server'].'  -u'.$_SESSION['user'].' -p'.$_SESSION['password'].' --all-databases > ../mysql/export/'.$_SESSION['server'].'.sql';
            exec($command, $output, $worked);
            switch($worked){
                case 0:
                    echo '<span style="font-style:italic; color:green;">La Base de donnee a ete Exporter avec succes. <a href="../mysql/export/download.php?sql='.$_SESSION['server'].'.sql" >Cliquez ici</a> pour le telecharger</span>'; 
                    break;
                case 1:
                    echo '<span style="font-style:italic; color:red;">Une erreur est survenue lors de l\'exportation. De ce fait l\'operation est annuler</span>';
                    break;
                case 3:
                    echo '<span style="font-style:italic; color:red;">Le systeme ne peut retrouver le chemin de sauvegarde specifier</span>';
                    break;
                case 4:
                    echo '<span style="font-style:italic; color:red;">Impossible d\'ouvrir le fichier</span>';
                    break;
                default:
                    echo '<span style="font-style:italic; color:red;">Une erreur avec le code <a href="http://www.hiteksoftware.com/knowledge/articles/049.htm" target="_blank">'.$worked.'</a> est survenu.<br>
                    Pour connaitre a quoi correspond cette erreur, allez sur le <a href="http://www.hiteksoftware.com/knowledge/articles/049.htm" target="_blank">lien suivant</a></span>';
            }
        }
    }
	else if (isset($_POST['export_bdsql']))
    {
        //Export the database and output the status to the page
        $command = '../mysql/mysqldump --opt -h'.$_SESSION['server'].'  -u'.$_SESSION['user'].' -p'.$_SESSION['password'].' '.$_GET['db'].' > ~/Downloads/'.$_GET['db'].'.sql';
        exec($command, $output, $worked);
        if ($worked == 0){
            echo '<span style="font-style:italic; color:green;">La Base de donnee a ete Exporter avec succes dans le repertoire ~/Downloads/'.$_GET['db'].'.sql</span>'; 
        }
        else{
            $command = '../mysql/mysqldump --opt -h'.$_SESSION['server'].'  -u'.$_SESSION['user'].' -p'.$_SESSION['password'].' '.$_GET['db'].' > ../mysql/export/'.$_GET['db'].'.sql';
            exec($command, $output, $worked);
            switch($worked){
                case 0:
                    echo '<span style="font-style:italic; color:green;">La Base de donnee a ete Exporter avec succes. <a href="../mysql/export/download.php?sql='.$_GET['db'].'.sql" >Cliquez ici</a> pour le telecharger</span>';                
                    break;
                case 1:
                    echo '<span style="font-style:italic; color:red;">Une erreur est survenue lors de l\'exportation. De ce fait l\'operation est annuler</span>';
                    break;
                case 3:
                    echo '<span style="font-style:italic; color:red;">Le systeme ne peut retrouver le chemin de sauvegarde specifier</span>';
                    break;
                case 4:
                    echo '<span style="font-style:italic; color:red;">Impossible d\'ouvrir le fichier</span>';
                    break;
                default:
                    echo '<span style="font-style:italic; color:red;">Une erreur avec le code <a href="http://www.hiteksoftware.com/knowledge/articles/049.htm" target="_blank">'.$worked.'</a> est survenu.<br>
                    Pour connaitre a quoi correspond cette erreur, allez sur le <a href="http://www.hiteksoftware.com/knowledge/articles/049.htm" target="_blank">lien suivant</a></span>';
            }
        }
    }
    else if (isset($_POST['export_tabsql']))
    {
        //Export the database and output the status to the page
        
        $command='../mysql/mysqldump --opt -h'.$_SESSION['server'].'  -u'.$_SESSION['user'].' -p'.$_SESSION['password'].' '.$_GET['db'].' '.$_GET['tab'].' > ~/Downloads/'.$_GET['tab'].'.sql';
        exec($command, $output, $worked);
        if ($worked == 0){
            echo '<span style="font-style:italic; color:green;">La Base de donnee a ete Exporter avec succes dans le repertoire ~/Downloads/'.$_GET['tab'].'.sql</span>'; 
        }
        else{
            $command = '../mysql/mysqldump --opt -h'.$_SESSION['server'].'  -u'.$_SESSION['user'].' -p'.$_SESSION['password'].' '.$_GET['db'].' '.$_GET['tab'].' > ../mysql/export/'.$_SESSION['server'].'.sql';
            exec($command, $output, $worked);
            switch($worked){
                case 0:
                    echo '<span style="font-style:italic; color:green;">La Base de donnee a ete Exporter avec succes. <a href="../mysql/export/download.php?sql='.$_GET['tab'].'.sql" >Cliquez ici</a> pour le telecharger</span>'; 
                    break;
                case 1:
                    echo '<span style="font-style:italic; color:red;">Une erreur est survenue lors de l\'exportation. De ce fait l\'operation est annuler</span>';
                    break;
                case 3:
                    echo '<span style="font-style:italic; color:red;">Le systeme ne peut retrouver le chemin de sauvegarde specifier</span>';
                    break;
                case 4:
                    echo '<span style="font-style:italic; color:red;">Impossible d\'ouvrir le fichier</span>';
                    break;
                default:
                    echo '<span style="font-style:italic; color:red;">Une erreur avec le code <a href="http://www.hiteksoftware.com/knowledge/articles/049.htm" target="_blank">'.$worked.'</a> est survenu.<br>
                    Pour connaitre a quoi correspond cette erreur, allez sur le <a href="http://www.hiteksoftware.com/knowledge/articles/049.htm" target="_blank">lien suivant</a></span>';
            }
        }
    }
?>