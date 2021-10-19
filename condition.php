<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0, 2)];
echo 'l\'arme de l\'adversaire est : ';
echo $opponentWeapon;
if ($opponentWeapon == 'gun') {

    $stevensonWeapon = $weapons[1];
    echo ', l\'arme de stevenson sera donc : ';
    echo $stevensonWeapon;

} elseif ($opponentWeapon = 'fist') {
    $stevensonWeapon = $weapons[2];
    echo ', l\'arme de stevenson sera donc : ';
    echo $stevensonWeapon;

} else {
    $stevensonWeapon = $weapons[0];
    echo ', l\'arme de stevenson sera donc : ';
    echo $stevensonWeapon;

}