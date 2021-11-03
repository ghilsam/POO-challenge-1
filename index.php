<?php
require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('blue');
$car = new Car ('noire', 5, 'electrique');


var_dump($bike);
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed (). ' km/h' . '<br>';
echo $bike->brake();
var_dump($bike);
$bike->dump(); '<br>';'<br>';

echo $car->forward();
echo ' Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo ' Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo $car->start();
echo '<br> Ma voiture est : ' . $car->getColor() . ', avec ' . $car->getNbSeats() . ' places' . ' et roule de façon : '. $car->getEnergy();

