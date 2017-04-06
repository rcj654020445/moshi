<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/6
 * Time: 16:00
 */

namespace Moshi\Creational\FactoryMethod;


abstract class FactoryMethod
{
    const CHEAP = 1;
    const FAST = 2;

    abstract protected function createVehicle($type);

    public function create($type){
        $obj = $this->createVehicle($type);
        return $obj;
    }
}