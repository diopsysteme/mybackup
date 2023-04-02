<?php

	session_start();
	if (isset($_SESSION['user'])){
	echo '<center>'.$_SESSION['user'].' bienvenue dans votre repertoire de connexion <br>'.'</center>' ;
	echo "<center><a color='red' href='decon.php'><button name='decon'>deconnexion</button></a></center>";
	}
	else {
		
		header('Location:login.php');
		die();
	}
	 
	
	
?>
