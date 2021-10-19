<?php
function writeSecretSentence(string $objet, string $metier)
{
    $sesame = $objet . " s'incline face " . $metier . '.';
    echo "<br>";
    return $sesame;
}

echo writeSecretSentence('L\'enclume', 'au forgeron');
echo writeSecretSentence('Le programme', 'au développeur');
echo writeSecretSentence('La serrure', 'au serrurier');
echo writeSecretSentence('Le coffre fort', 'au voleur');
echo '<br>';
echo '<br>';

//deuxième façon

function writeSecretSentence2(string $objet, string $metier)
{
    return "$objet s’incline face  $metier";
}

echo writeSecretSentence2('L\'enclume', 'au forgeron');

echo '<br>';

echo writeSecretSentence2('Le programme', 'au développeur');

echo '<br>';

echo writeSecretSentence2('La serrure', 'au serrurier');

echo '<br>';

echo writeSecretSentence2('Le coffre fort', 'au voleur');