<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/home/mhd/Documents/projet2html/css/projet.css">
    <title>Document</title>
</head>
<body>
    <center>
        <form  method="post" action="logins.php">
            <input type="text"  name="log" placeholder="votrelogin" value=<?php echo $_SESSION['log']?> ><br><input  type="password" placeholder="password" name="pass" value="" ><br>
            <input type="submit" value="valider">
        </form>
    </center>
</body>
</html>

<?php ?>