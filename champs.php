<?php
session_start();
?>
<!DOCTYPE html>
<head></head>
<body>
<form action='inscription.php' method='post'>
<input type='text' placeholder='votre prenom' id='prenom' name='prenom' value='<?php echo $_SESSION['prenom']; ?>' autocomplete='no'> <br>
<input type='text' placeholder='votre nom' name='nom' autocomplete="no" value='<?php echo $_SESSION['nom']; ?>' ><br>
<input type='text' placeholder='votre pseudo' name='pseudo' autocomplete="no" value='<?php echo $_SESSION['pseudo']; ?>' > <br>
<input type='mail' placeholder='votre mail' name='mail' autocomplete="no" value='<?php echo $_SESSION['mail'];?>' ><br>
<input type='password' placeholder='votre mot de passe'  name='pass' autocomplete="no" value=<?php echo $_SESSION['pass']; ?>> <br>
<input type='password' placeholder='retapez votre mot de passe' name='pass_r' value='<?php echo $_SESSION['passr']; ?>' > <br>
<button name='sub'>valider</button>
</form>
</body>
</html>
