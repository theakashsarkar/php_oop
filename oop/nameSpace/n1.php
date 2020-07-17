<?php
namespace Project;
include "c1.php";
include "c2.php";
use \Project\MotorCycle\Bike as Hornet;
use \Project\Bike as Pulsar;

$b = new Bike();
echo $b->getName();
$b = new Hornet;
echo $b->getName();
$b = new Pulsar;
echo $b->getName();
