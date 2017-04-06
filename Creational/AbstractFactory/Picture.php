<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/6
 * Time: 14:35
 */

namespace Moshi\Creational\AbstractFactory;

use Moshi\Creational\AbstractFactory\MediaInterface;

abstract class Picture implements MediaInterface
{
    protected $path;
    protected $name;

    public function __construct($path, $name = '')
    {
        $this->path = $path;
        $this->name = $name;
    }
}