<?php
$film = [
    'L\'île au trésor' => [' Charlton Heston, Christian Bale, Oliver Reed' => ['1990' => ['Fraser C. Heston']]],
    'Dr Jekyll et Ms Hyde ' => ['Anthony Perkins, Glynis Barber, Sarah Maur Thorp' => ['1989' => ['Gérard Kikoîne']]],
    'Kidnapped' => ['Michael Caine, Lawrence Douglas, Vivien Heilbron' => ['1971' => ['Delbert Mann']]],
];

foreach ($film as $key => $film) {

    echo $key;
    echo ' avec comme acteurs principaux ';
    foreach ($film as $key => $film) {
        echo $key;

        echo ', est sortis en ';
        foreach ($film as $key => $film) {

            echo $key;

            echo ' et a été réalisé par ';

            foreach ($film as $key => $film) {

                echo $film;
                echo '.';
                echo '<br>';

            }

        }

        echo '<br>';

    }
    echo '<br>';

}

/*résultat

L'île au trésor avec comme acteurs principaux Charlton Heston, Christian Bale, Oliver Reed, est sortis en 1990 et a été réalisé par Fraser C. Heston.

Dr Jekyll et Ms Hyde avec comme acteurs principaux Anthony Perkins, Glynis Barber, Sarah Maur Thorp, est sortis en 1989 et a été réalisé par Gérard Kikoîne.

Kidnapped avec comme acteurs principaux Michael Caine, Lawrence Douglas, Vivien Heilbron, est sortis en 1971 et a été réalisé par Delbert Mann.*/