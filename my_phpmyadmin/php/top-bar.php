<?php
	if (isset($_SESSION['user']))
	{
?>
<SCRIPT LANGUAGE="JavaScript">
	<!-- Begin
	startday = new Date();
	clockStart = startday.getTime();
	function initStopwatch() { 
		var myTime = new Date(); 
		return((myTime.getTime() - clockStart)/1000); 
	}
	function getSecs() { 
		var tSecs = Math.round(initStopwatch()); 
		var iSecs = tSecs % 60;
		var iMins = Math.round((tSecs-30)/60);   
		var sSecs ="" + ((iSecs > 9) ? iSecs : "0" + iSecs);
		var sMins ="" + ((iMins > 9) ? iMins : "0" + iMins);
		document.getElementById("timespent").textContent = "connecter depuis "+sMins+":"+sSecs+" min";
		window.setTimeout('getSecs()',1000); 
	}
	// End -->
</script>

		<header class="header">
            <a href="../pages/index.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
				My_phpMyAdmin
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $_SESSION['user']; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../img/user.jpg" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo $_SESSION['user']; ?>
										<form>
											<small id="timespent">0</small>
										</form>
									 </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="../php/deconnect.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
<?php
	}
	else
	{
		header('Location: ../index.php');
	}
?>