<?php
 if (isset($_POST['val'])){
    $conn=mysqli_connect('localhost','kagna','passer','student');
    $sql="delete from etud where id=".$_POST['val'];
    $fin=mysqli_query($conn,$sql);
} else header('location:affi.php');
?>
