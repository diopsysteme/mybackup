<?php

if(isset($_POST['sub']))
{
session_start();
$con=mysqli_connect('localhost','root','','student');
$perenom = $_POST['pseu_m']; 
$nom=$_POST['pass'];
	if(!empty($_POST['prenom']) && !empty($_POST['nom']))
	{
		$rec = mysqli_query($con,"select * from nit where pseudo='$prenom' or mail='$nom' ");
		$count= mysqli_num_rows($rec);
		//echo$count.'<br>';
		//echo $pass;
		if($count >= 1)
		{
			$mql=mysqli_query($con,"select *from nit where pseudo='$pseu_m' or mail='$pseu_m'");
			$tab=mysqli_fetch_assoc($mql);
			$pass_h= $tab['pass'];
			//echo $tab['pseudo'];
			//echo $pass_h;
			//$pass_h2=password_hash($pass, PASSWORD_DEFAULT);
			// $a_=(int) password_verify($pass,$pass_h);
			//password_verify() prend en premier parametre me passwod hacher et
			// ensuite le mot de pass saisi par le user  dans cet ordre 
			//echo $a_;
			if(password_verify($pass,$pass_h))
			{
				$_SESSION['user']=$tab['prenom'];
				$_SESSION['user']=$tab['prenom'];
				header('Location:index.php');
			}else
			{
				echo 'login ou mot de passe incorrects';	
			}
				
		}else
		{
			echo 'login ou mot de passe incorrects';
		}
	}
	else
	{
		echo 'veuillez remplir tous champs svp';
	}
		
}else 
	$pseu_m="";

?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="copy.css">
</head>
<body>
	<div class="conteneur" align="center">
		<form id="form"  align="center" method="post">
					<h1>Log In</h1>
					<div class="inputcontrol">
						<input class="" type="text"  name="pseu_m" placeholder="Pseudo or Email" value='<?=$pseu_m; ?>'>
					</div>
					<div class="inputcontrol">
						<input class="" type="password" name="pass" placeholder=" Password" value=''>
					
					</div>
					<div class="inputcontrol">
						<button  name='sub'>Log In</button>
					</div>
					<h4 style="color:rgb(99, 95, 95);">Don't have an account<a style="text-decoration:none;color:rgb(33, 165, 158);" href="inscription.php"> Sign Up</a></h4>

		</form>
	</div>
</body>
</html>
