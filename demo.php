<?php

function repondre_oui_non($phrase) {
    while (true) {
        $reponse = readline($phrase . "(O/N) ");
        if ($reponse === "O") {
            return true;
        } elseif ($reponse === "N") {
            return false;
        }        
    }
}

function demander_creneau ($phrase = 'Veuillez entrer votre creneau : ') {
    echo $phrase . "\n";
    while (true) {
        $ouverture = (int)readline('Heure d\'ouvrture : ');
        if ($ouverture >= 0 && $ouverture <= 23) {
            break;
        }
    }
    while (true) {
        $fermeture = (int)readline('Heure de fermeture  : ');
        if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture) {
            break;
        }
    }
    return [$ouverture, $fermeture];
}

function demander_creneaux ( $phrase = 'Veillez entrer vos créneaux : ') {
    $creneaux = [];
    $continuer = true;
    while ($continuer) {
        $creneaux[] = demander_creneau();
        $continuer = repondre_oui_non('Voulez vous continuer ? ');
    }
    return $creneaux;

}

/*
$creneau = demander_creneau();
$creneau2 = demander_creneau('Veuillez entrer votre créneau : ');

var_dump($creneau, $creneau2);
*/

$creneaux = demander_creneaux('Entrer vos créneaux : ');
var_dump($creneaux);