<?php

require '../vendor/autoload.php';

/*$car = new \App\Car('blue', '5', 'fuel');
$bike = new \App\Bicycle('yellow', '1');

$motorway = new \App\MotorWay();
$motorway->addVehicle($car);
$motorway->addVehicle($bike);
$tonyHawk = new \App\Skateboard('red', '8');
$motorway->addVehicle($tonyHawk);
var_dump($motorway);


$campingCar = new \App\Car('black', '10', 'gasoil');
$residential = new \App\ResidentialWay();
$residential->addVehicle($campingCar);
var_dump($residential);

$truck = new \App\Truck('green', '1', 'electric', '200');
$residential = new \App\ResidentialWay();
$residential->addVehicle($truck);
var_dump($residential);

$peugeot = new \App\Car('red', '9', 'super');
$pedestrian = new \App\PedestrianWay();
$residential->addVehicle($peugeot);
$bicyle = new \App\Bicycle('pink', '6');
$pedestrian->addVehicle($bicyle);

$skate = new \App\Skateboard('white', '1', 'foot');
$pedestrian->addVehicle($skate);

var_dump($pedestrian);
*/

$twingo = new \App\Car('pink', '22', 'nuclear');
echo $twingo->switchOn();
var_dump($twingo);

$rockrider = new \App\Bicycle('purple', '1');
$rockrider->setCurrentSpeed(10);
echo $rockrider->switchOn();
var_dump($rockrider);

$bike = new \App\Bicycle('red', '52');
$bike->setCurrentSpeed(5);
echo $bike->switchOn();
var_dump($bike);

$car = new \App\Car('black', '4', 'sans plomb');

try {
    $car->start();
} catch(Exception $e){
    echo $e->getMessage();
    $car->setParkBrake();
}finally{
    echo "Ma voiture roule comme un donut";
}
var_dump($car);