<?php
/*
$insultes = ['merde', 'con'];
$phrase = readline('Entrer une phrase : ');
foreach($insultes as $insulte) {
    $replace = str_repeat('*', strlen($insulte));
    $phrase = str_replace($insulte, $replace, $phrase);
}
echo $phrase;
*/

$insultes = ['merde', 'con'];
$asterisque = [];
foreach ($insultes as $insulte) {
    $asterisque[] = substr($insulte, 0, 1) . str_repeat('*', strlen($insulte) - 1);
}
$phrase = readline('Entrer une phrase : ');
$phrase = str_replace($insultes, $asterisque, $phrase);

echo $phrase;