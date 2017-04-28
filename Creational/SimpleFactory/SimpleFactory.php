<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/10
 * Time: 13:46
 */

namespace Moshi\Creational\SimpleFactory;


class SimpleFactory
{
    protected $typeList;

    public function __construct()
    {
        $this->typeList = array(
            'bicycle'=>__NAMESPACE__.'\Bicycle',
            'scooter'=>__NAMESPACE__.'\Scooter',
        );
    }

    public function createVehicle($type)
    {
        if(array_key_exists($type, $this->typeList)){
            throw new \InvalidArgumentException("$type is not valid vehicle");
        }
        $className = $this->typeList[$type];
        return new $className();
    }

}