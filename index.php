<?php

use App\BasicInspection;
use App\OilChange;
use App\TireRotation;

require_once __DIR__ . '/vendor/autoload.php';


$basicInspection = new BasicInspection();
$tireRotationAndBasicInspection = new TireRotation($basicInspection);
$oilChangeTireRotationAndBasicInspection = new OilChange($tireRotationAndBasicInspection);
$oilChangeTireRotationAndBasicInspection->getCost();
$oilChangeTireRotationAndBasicInspection->getDescription();

