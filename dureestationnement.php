<?php
session_start();

// Stockage de la date et de l'heure d'accès dans la session
$_SESSION['date_heure_acces'] = date('Y-m-d H:i:s');


// Calcul de la durée de stationnement
if (session_status() != PHP_SESSION_ACTIVE) {
    $date_acces = strtotime($_SESSION['date_heure_acces']);
    $date_actuelle = time();
    $duree_stationnement = $date_actuelle - $date_acces;
    echo "Vous avez stationné sur ce site pendant ".gmdate('H:i:s', $duree_stationnement).".";
}
?>

