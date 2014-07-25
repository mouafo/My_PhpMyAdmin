<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>My_PhpMyAdmin | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- fond etonnant pour le site -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- la source du theme a utiliser pour le site -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
    </head>
	
    <body class="bg-black">

        <div class="form-box" id="login-box">
		<div><h2>  --:::  My_PhpMyAdmin :::-- </h2></div><br><br>
            <div class="header">Connectez Vous</div>
			<!--<span style="font-style:italic; color:red;"><?php //if (!empty($_GET['erreur'])) {echo $_GET['erreur']; } ?></span>-->
            <form action="php/auth.php" method="post" class="form" enctype="multipart/form-data" id="form">
                <div class="body bg-gray">
				<span style="font-style:italic; color:red;"><?php if (!empty($_GET['erreur'])) {echo $_GET['erreur']; } ?></span>
                    <div class="form-group">
                        <input type="text" name="user" class="form-control" placeholder="Identifiant ..." required/>
                    </div>
                    <div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Mot de Passe ..."/>
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Se Connecter</button>  
                    <!--Pas de compte? 
                    <a href="register.html" class="text-center">S'inscrire</a>-->
                </div>
            </form>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="js/jquery-2.1.1.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>