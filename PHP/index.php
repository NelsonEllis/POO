<?php
require_once ('car.php');
require_once ('uberX.php');
require_once ('account.php');
require_once ('uberPool.php');

$uberX = new UberX("LicPHP", new Account("kam", "7796737"), "Chevrolet", "Spark");
$uberX->printDataCar();

$uberPool = new UberPool("56456", new Account("Andres Herrera", "456454"), "Ford", "Ka");
$uberPool->printDataCar();