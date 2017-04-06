<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/6
 * Time: 16:12
 */

namespace Moshi\Creational\FactoryMethod;

use Moshi\Creational\FactoryMethod\FactoryMethod;

class ItalianFactory extends FactoryMethod
{
    protected function createVehicle($type)
    {
        switch ($type){
            case parent::CHEAP:
                return new Bicycle();
                break;
            case parent::FAST:
                $obj = new Ferrari();
                return $obj;
                break;
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
                break;
        }
    }
}