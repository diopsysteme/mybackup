<?php // Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
//header("Content-Type:Application/json");
// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://localhost/read.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$json=json_decode($result,true);
//echo $json;
$chaine="<table border='1px'> <tr><td>Id</td><td> Prenom</td><td>nom</td></tr>";
 foreach($json as $row)
 {
 $chaine=$chaine."<table border='1px' cellspacing='2px' width='100px' cellpadding='8px'> <tr><td>$row[id]</td><td>$row[prenom]</td><td>$row[nom]</td></tr>";
 }
 $chaine=$chaine."</table>";
 echo $chaine;
?>