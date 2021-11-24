<?php

require_once "Car.php";
$car = new Car("verte",25);

$car->setParkBrake(true);

try{
    $car->start();
} catch(Exception $e){
    echo "Exception received  : ". $e->getMessage() . "<br>";
    $car->setParkBrake(false);
} finally{
    echo "Ma voiture roule comme un donut";
}

?>