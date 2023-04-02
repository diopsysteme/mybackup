
<?php
 $n=5;
 $p=1;
        while( $p<=$n){
            echo("TABLE:".$p."");
          for ($i=1;$i<=10;$i++)
          {
            $m =$p*$i;
           echo($p."*".$i."=".$m."<br>");
            }
          $p=$p+1;
        }  
    ?>