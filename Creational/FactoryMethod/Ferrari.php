<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/6
 * Time: 17:28
 */

namespace Moshi\Creational\FactoryMethod;

use Moshi\Creational\FactoryMethod\VehicleInterface;

class Ferrari implements VehicleInterface
{
    protected $color;

    public function setColor($rgb)
    {
        $this->color = $rgb;
        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }
}