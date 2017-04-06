<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/6
 * Time: 17:26
 */

namespace Moshi\Creational\FactoryMethod;

use Moshi\Creational\FactoryMethod\VehicleInterface;

class Porsche implements VehicleInterface
{
    protected $color;

    public function setColor($rgb)
    {
        $this->color = $rgb;
        return $this;
    }

    public function addTuningAMG()
    {

    }

    public function getColor()
    {
        return $this->color;
    }
}