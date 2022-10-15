<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'vehicle.php';
 

// $bike = new Bicycle('yellow');
// var_dump($bike);

// $bike->color = 'blue';
// $bike->currentSpeed = 0;
// var_dump($bike);

// var_dump($bike);
// $bike->dump();

// Moving bike
// echo $bicycle->forward();
// echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bicycle->brake();
// echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed(). ' km/h' . '<br>';
// echo $bicycle->brake();

// $rockrider = new Bicycle('black');


// Instanciation d'un nouvel objet $tornado
// $tornado = new Bicycle('pink');

// $tornado->forward();


// Bicycle 
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

echo $bicycle->forward();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed(). ' km/h' . '<br>';
echo $bicycle->brake();


// Car 
$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

// Moving car
echo $car->forward();
echo '<br> Vitesse de la voiture: ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed(). ' km/h' . '<br>';
echo $car->brake();

// Instanciation nouveaux objets car 
$tesla = new Car('black', 4);
$ferrari = new Car('red', 2);
$schoolBus = new Bus('yellow', 40);

// Truck
$truck = new Truck('blue', 1, "fuel", 100);
echo $truck->forward();
var_dump($truck);

var_dump(Truck::ALLOWED_ENERGIES);

// Moving truck
echo $truck->forward();
echo '<br> Vitesse du camion, : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed(). ' km/h' . '<br>';
echo $truck->brake();
echo $truck->getLoad();
