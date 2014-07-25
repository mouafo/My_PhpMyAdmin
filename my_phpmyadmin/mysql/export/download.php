<?php 
	header("Content-type: application/sql"); 
	header("Content-Disposition: attachment; filename=$_GET[sql]"); 
	 
	// On teste l'extension souhaitée pour plus de sécurité (ici c'est un PDF) 
	if(strtolower(substr(strrchr($_GET['sql'],'.'),1)) != 'sql') { 
	  header("location:../pages/index.php"); 
	  exit; 
	} // sinon on lance le téléchargement 
	else  
	  readfile($_GET['sql']); 
?>