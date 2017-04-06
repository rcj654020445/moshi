<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/6
 * Time: 17:30
 */

namespace Moshi\Creational\FactoryMethod;

use Moshi\Creational\FactoryMethod\VehicleInterface;

class Bicycle implements VehicleInterface
{
    protected $color;

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }
}