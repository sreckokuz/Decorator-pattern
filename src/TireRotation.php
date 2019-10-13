<?php
/**
 * Created by PhpStorm.
 * User: sreckokuzmanovic
 * Date: 30/09/2019
 * Time: 10:39
 */

namespace App;


class TireRotation implements CarService
{
    /**
     * @var CarService
     */
    private $service;

    public function __construct(CarService $service)
    {
        $this->service = $service;
    }

    public function getCost()
    {
        echo 50 + $this->service->getCost();
    }

    public function getDescription()
    {
       return $this->service->getDescription() .'and Tire rotation';
    }
}