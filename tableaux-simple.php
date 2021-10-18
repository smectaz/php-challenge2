<?php
$library['Catriona'] = '1892';
$library['Enlevé !'] = '1886';
$library['L\'île au trésor'] = '1882';
$library['Les nouvelles milles et une nuits'] = '1878';
asort($library);

foreach ($library as $key => $library) {

    echo $key;
    echo ' est sortis en ';
    echo $library;
    echo '<br>';

}
?>
résultat
Les nouvelles milles et une nuits est sortis en 1878
L'île au trésor est sortis en 1882
Enlevé ! est sortis en 1886
Catriona est sortis en 1892