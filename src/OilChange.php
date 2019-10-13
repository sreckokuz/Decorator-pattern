<?php
/**
 * Created by PhpStorm.
 * User: sreckokuzmanovic
 * Date: 30/09/2019
 * Time: 10:02
 */

namespace App;


class OilChange implements CarService
{
    private $service;
    public function __construct(CarService $service)
    {
        $this->service = $service;
    }

    public function getCost()
    {
        return 50 + $this->service->getCost();
    }

    public function getDescription()
    {
        echo $this->service->getDescription() ." and Oil change";
    }
}