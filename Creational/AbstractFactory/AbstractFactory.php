<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/5
 * Time: 15:43
 */

namespace Moshi\Creational\AbstractFactory;

abstract class AbstractFactory
{
    abstract public function createText($content);

    abstract public function createPicture($path , $name);
}
