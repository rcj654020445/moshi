<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/6
 * Time: 10:04
 */

namespace Moshi\Creational\AbstractFactory;

use Moshi\Creational\AbstractFactory\MediaInterface;

abstract class Text implements MediaInterface
{
    protected $text;

    public function __construct($text)
    {
        $this->text = $text;
    }
}