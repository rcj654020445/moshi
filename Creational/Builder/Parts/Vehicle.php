<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/20
 * Time: 17:05
 */

namespace Moshi\Creational\Builder\Parts;

//产品类
abstract class Vehicle
{
    private $attribute = [];

    public function setAttribute($key, $value)
    {
        $this->attribute[$key] = $value;
    }

}