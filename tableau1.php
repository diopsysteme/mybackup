<?php
$bd = array(
    array('mouhamadou','diop',19),
    array('madicke','cisse',22),
    array('medzo','sall',23),
    array('youga','cisse',30)
   );
for ($i=0;$i<3;$i++)
{
  echo " membre".($i+1).":"; 
    for ($j=0;$j<3;$j++)
{
    echo ' '.$bd[$i][$j].' ';
}
echo '</br>';
}

?>