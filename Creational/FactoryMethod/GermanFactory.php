<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/6
 * Time: 16:06
 */

namespace Moshi\Creational\FactoryMethod;

use Moshi\Creational\FactoryMethod\FactoryMethod;

class GermanFactory extends FactoryMethod
{
    protected function createVehicle($type)
    {
        switch ($type){
            case parent::CHEAP:
                return new Bicycle();
                break;
            case parent::FAST:
                $obj = new Porsche();
                $obj->addTuningAMG();
                return $obj;
                break;
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
                break;
        }

    }
}