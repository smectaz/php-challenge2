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