<?php


	
					//////////////////////////**************************\\\\\\\\\\\\\\\\\\\\\\\\\\\
	if(isset($_POST['sub']))
	{  
		
		$prenom = htmlspecialchars($_POST['prenom']); $nom = htmlspecialchars($_POST['nom']);$pseudo = htmlspecialchars($_POST['pseudo']);
		$mail=htmlspecialchars($_POST['mail']);$pass=htmlspecialchars($_POST['pass']);$pass_r=htmlspecialchars($_POST['pass_r']); 
		if(!empty($_POST["prenom"])&&!empty($_POST["nom"])&&!empty($_POST["pseudo"])&&!empty($_POST["mail"])&&!empty($_POST["pass"])&&!empty($_POST["pass_r"]))
		{
		 if(strpos($mail,'@')>0 && strpos($mail,'.')>0)
		 {
		
			if(strlen($pseudo)<=20 )
			{
			if(str_word_count($pseudo)==1)
				{
					if(strcmp($pass,$pass_r)==0)
					{
						$recu = mysqli_query($con,"select *from nit where pseudo='$pseudo' or mail='$mail'");
						$count= mysqli_num_rows($recu);
						if($count<1)
						{
							session_start();
							$con=mysqli_connect('localhost','kagna','passer','daba');
							$pass_h=password_hash($pass, PASSWORD_DEFAULT);
							$sql="insert into nit(prenom,nom,pseudo,mail,pass) values('$prenom','$nom','$pseudo','$mail','$pass_h')";
							$ex=mysqli_query($con,$sql);
							$_POST['pass']="";$_POST['pass_r']="";
							echo '<br><center><h1 style="color:lightgreen;">inscription reussie</h1></center>';	
							//sleep(10);
							?> 
							<script>
								if(confirm("voulez vous qu'on vous redirige vers la page connexion"))
									window.location.href="login.php"
								
							</script>
							<?php
							session_destroy();
							//header('Location:login.php');	
						}else 
						{
							$mail="";$pseudo="";
							echo "le mail ou le pseudo exist deja";
						}
								
					}
					else
					{
						$pass_r="";
						echo "password don't match";
					}
				}else
				 {
					$pseudo="";
					echo "le pseudo ne doit pas contenir d'espaces ni de caracteres speciaux";
				 } 	
				

			}else 
			{
				$_POST['pseudo']="";
				echo "le pseudo est trop long";
				
		     }
			}else 
			{
				$mail="";
				echo "le format du mail est incorrect";
			 }
     
 		}else
		 {
			 echo "veuillez remplir tous les champs ";
		 }

	}else{
		$prenom="";$nom="";$pass="";$pass_r="";$mail="";$pseudo="";
	}
?>
<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="copy.css">
</head>
<center>
<body>
<div class="conteneur" align="center">
        <form id="form" action="" align="center" method="post">
            <h1>REGISTRATION</h1>
            <div class="inputcontrol">
                <input class="" type="text" id="prenom" name="prenom" placeholder="First Name" value='<?=$prenom; ?>'>
                <div class="erreur"></div>
            </div>
            <div class="inputcontrol">
                <input class="" type="text" id="nom" name="nom" placeholder="Last Name" value='<?=$nom; ?>'>
                <div class="erreur"></div>
            </div>
            <div class="inputcontrol">
                <input class="" type="text" id="pseudo" name="pseudo" placeholder="Pseudo" value='<?=$pseudo; ?>'>
                <div class="erreur"></div>
            </div>
            <div class="inputcontrol">
                <input class="" type="text" id="mail" name="mail" placeholder="Email" value='<?=$mail; ?>'>
                <div class="erreur"></div>
            </div>
            <div class="inputcontrol">
                <input class="" type="password" id="pass" name="pass" placeholder="Password" value='<?=$pass; ?>'>
                <div class="erreur"></div>
            </div>
            <div class="inputcontrol">
                <input class="" type="password" id="pass_r" name="pass_r" placeholder="Confirm Password " value='<?=$pass_r; ?>'>
                <div class="erreur"></div>
            </div>
            <button  name="sub" style="font-weight:bold">Sign Up</button>
			<h4 style="color:rgb(99, 95, 95);">already have an account <a style="text-decoration:none;color:rgb(33, 165, 158);" href='login.php'> Log In</a></h4>
        </form>
		<br>
        
    </div>

</body>	
</center>
</html>
