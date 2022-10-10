<?php

require_once'Bicycle.php';
require_once'Car.php';


$bike = new Bicycle('yellow');
var_dump($bike);

// $bike->color = 'blue';
// $bike->currentSpeed = 0;
// var_dump($bike);

var_dump($bike);
$bike->dump();

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
echo $bike->brake();

$rockrider = new Bicycle('black');


// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('pink');

$tornado->forward();

// $car est une instance de Car. C'est l'instance que l'on dump
$car = new Car('blue', 2, 'fuel');
var_dump($car);


// Moving car
echo $car->forward();
echo '<br> Vitesse du vélo : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse du vélo : ' . $car->getCurrentSpeed(). ' km/h' . '<br>';
echo $car->brake();