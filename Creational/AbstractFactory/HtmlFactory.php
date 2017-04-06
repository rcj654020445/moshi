<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/5
 * Time: 15:50
 */

namespace Moshi\Creational\AbstractFactory;

use Moshi\Creational\AbstractFactory\AbstractFactory;

class HtmlFactory extends AbstractFactory
{
    public function createText($content)
    {
        return new Html\Text($content);
    }

    public function createPicture($path , $name)
    {
        return new Html\Picture($path, $name);
    }
}