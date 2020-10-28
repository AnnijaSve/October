<?php

require_once 'FuelGauge.php';
require_once 'Odometer.php';

$fuelGauge = new FuelGauge(15);
$odometer = new Odometer(0);


$odometer = $odometer->getCurrentMileage();
$currentFuel = $fuelGauge->getCurrentFuel();

while ($currentFuel > 0) {
    if ($odometer % 10 == 0) {
        $currentFuel--;
    }
    if ($currentFuel < 10) {
        echo 'Low fuel' . PHP_EOL;
    }
    $odometer += 10;
    echo 'Odometer : ' . $odometer . 'km, ';
    echo 'Fuel left : ' . $currentFuel . 'l';
    echo PHP_EOL;


    sleep(1);

}