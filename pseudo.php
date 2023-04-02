
<div style="color:red;" id="erreur"></div>
<?php
session_start();
switch ($_SESSION['err'])
{
	case 'p_long':
	?>
		<script>
			document.getElementById("erreur").innerText="votre pseudo est trop long"
		</script>
	<?php
					$_SESSION['pseudo']="";break;
	case 'pass':	
	?>
		<script>
			document.getElementById("erreur").innerText="les deux mot de pass sont differents"
		</script>
	<?php
					$_SESSION['pass']="";$_SESSION['pass_r']="";break;
	case 'champs':  $erreur = "veuillez remplir tous les champs";
	?>
		<script>
			document.getElementById("erreur").innerText="veuillez remplir tous les champs"
		</script>
	<?php
				    break;
	case 'mail':  
	?>
		<script>
			document.getElementById("erreur").innerText="le format du mail est incorrect"
		</script>
	<?php
					$_SESSION['mail']="";break;
	case 'exist':  
	?>
		<script>
			document.getElementById("erreur").innerText='le mail et (ou) le pseudo existe déja'
		</script>
	<?php
					$_SESSION['mail']="";$_SESSION['pseudo']=""; break;
	
	case 'char':    
	?>
					<script>
						document.getElementById("erreur").innerText="le pseudo ne doit pas contenir d'espace ni de caracteres spéciaux"
					</script>
	<?php
					$_SESSION['pseudo']="";break;					
}
?>
<!DOCTYPE html>
		<head>
		<link rel="stylesheet"  href="css/css1.css">
		</head>
		<body>
		
		<form action="inscription.php" method='post'>
		<input type='text' placeholder='votre prenom' id='prenom' name='prenom'  autocomplete='no'> <br>
		<input type='text' placeholder='votre nom' name='nom' autocomplete="no" value='<?=$_SESSION['nom']; ?>' ><br>
		<input type='text' placeholder='votre pseudo' name='pseudo' autocomplete="no" value='<?=$_SESSION['pseudo']; ?>' > <br>
		<input type='mail' placeholder='votre mail' name='mail' autocomplete="no" value='<?=$_SESSION['mail'];?>' ><br>
		<input type='password' placeholder='votre mot de passe'  name='pass' autocomplete="no" value=<?=$_SESSION['pass']; ?>> <br>
		<input type='password' placeholder='retapez votre mot de passe' name='pass_r' value='<?=$_SESSION['pass_r']; ?>' > <br>
		<button name='sub'>valider</button>
         <br>
        si vous avez déjà un compte <a href='login.php'> connectez vous</a>
		</form>
		</body>
		</html>

