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