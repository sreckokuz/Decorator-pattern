<?php
/**
 * Created by PhpStorm.
 * User: sreckokuzmanovic
 * Date: 30/09/2019
 * Time: 08:44
 */

namespace App;


class BasicInspection implements CarService
{

    public function getCost()
    {
        return 50;
    }

    public function getDescription()
    {
        echo "Basic inspection";
    }
}