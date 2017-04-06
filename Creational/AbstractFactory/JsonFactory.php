<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/5
 * Time: 15:51
 */

namespace Moshi\Creational\AbstractFactory;

use Moshi\Creational\AbstractFactory\AbstractFactory;

class JsonFactory extends AbstractFactory
{
    public function createText($content)
    {
        return new Json\Text($content);
    }

    public function createPicture($path, $name)
    {
        return new Json\Picture($name, $path);
    }
}