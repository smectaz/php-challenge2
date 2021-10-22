<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle();
var_dump($bike);
$bike->setcolor('blue');
$bike->setCurrentSpeed(24);
var_dump($bike); 

echo $bike->forward();
echo '<br> Vitesse du vélo bike: ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle();
$rockrider->setcolor('yellow');
$rockrider->setCurrentSpeed(28);

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle();
$tornado->setcolor('black');
$tornado->setCurrentSpeed(22);

var_dump($tornado);
var_dump($rockrider);

echo $tornado->forward();
echo '<br> Vitesse du vélo tornado : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
echo $tornado->brake();
echo '<br> Vitesse du vélo : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
echo $tornado->brake();

echo $rockrider->forward();
echo '<br> Vitesse du vélo rockrider : ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>';
echo $rockrider->brake();
echo '<br> Vitesse du vélo : ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>';
//echo $rockrider->brake();


//objet voiture

$tacot = new Car('jaune fluo', 4, 'diesel');
var_dump($tacot);
echo $tacot->startCar();
echo '<br>';
echo $tacot->forwardCar();
echo '<br> Vitesse de la voiture : ' . $tacot->getCurrentSpeed() . ' km/h' . '<br>';
echo $tacot->brakeCar();
echo '<br> Vitesse de la voiture : ' . $tacot->getCurrentSpeed() . ' km/h' . '<br>';
echo $tacot->brakeCar();

echo '<br> Ma voiture est ' . $tacot->getColor() . ', c\'est moche mais je la vois de loin avec ' . $tacot->getNbSeats() . ' places' . ' et roule au '. $tacot->getfuelType();
