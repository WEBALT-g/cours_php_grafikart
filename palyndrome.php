<?php

$mot = readline('Veuillez entrezr un mot : ');
$reverse = strtolower(strrev($mot));
    if (strtolower($mot) === $reverse) {
        echo 'Ce mot est un palyndrome';
    } else {
        echo 'Ce mot n\'est pas un palyndrome';
    }