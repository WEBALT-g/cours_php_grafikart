<?php

$creneaux = [];

while (true) {
    $debut = (int)readline('Heure d\'ouverture : ');
    $fin = (int)readline('Heure de fin de fermeture : ');
    if ($debut >= $fin) {
        echo "Le créneaux ne peut pas être enregistré car l\'heure de début ($debut) est supérieur à l\'heure de fermeture";
    } else {
        $creneaux[]= [$debut, $fin];
        $action = readline('Entrer un nouveau créneau ? (n) : ');
        if ($action === 'n') {
            break;
        }
    }
}

/*
$heure =(int)readline("A qu'elle heure voulez-vous visiter le magasin ?");
$creneauTrouve = false;

foreach($creneaux as $creneau) {
    if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
        $creneauTrouve = true;
        break;
    }
}

if ($creneauTrouve) {
    echo 'Le magasin sera ouvert';
} else {
    echo 'Le magasin sera fermé';
}*/

echo 'Le magasin est ouvert de :';
foreach($creneaux as $k => $creneau) {
    if ($k > 0) {
        echo ' et de';
    }
    echo " {$creneau[0]}h à {$creneau[1]}h ";
}