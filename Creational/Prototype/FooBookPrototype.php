<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/24
 * Time: 16:05
 */

namespace Moshi\Creational\Prototype;

use Moshi\Creational\Prototype\BookPrototype;

class FooBookPrototype extends BookPrototype
{
    private $category = 'Foo';
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

}