<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/24
 * Time: 16:05
 */

namespace Moshi\Creational\Prototype;


class BarBookPrototype
{
    private $category = 'Bar';
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}