<?php
	session_start();
	@$link = mysql_connect ($_SESSION['server'],$_SESSION['user'], $_SESSION['password']);
	if (isset($_GET['tab']))
	{
		mysql_select_db ($_GET['db'], $link);
		if (isset($_GET['col'])) {
			@$result = mysql_query("ALTER TABLE ".$_GET['tab']." DROP ".$_GET['col']);
				if (!$result)
					header('Location: ../pages/show.php?id=1&db='.$_GET['db'].'&tab='.$_GET['tab'].'&erreur='.mysql_error());
				else
					header('Location: ../pages/show.php?id=1&db='.$_GET['db'].'&tab='.$_GET['tab'].'&success=la colonne "'.$_GET['col'].'" a ete supprimer avec succes');
		}
		else {
			@$result = mysql_query("DROP TABLE ".$_GET['tab']);
			if (!$result)
				header('Location: ../pages/db.php?db='.$_GET['db'].'&erreur='.mysql_error());
			else
				header('Location: ../pages/db.php?db='.$_GET['db'].'&success=la table "'.$_GET['tab'].'" a ete supprimer avec succes');
		}
	}
?>