<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/6
 * Time: 14:40
 */

namespace Moshi\Creational\AbstractFactory\Html;

use Moshi\Creational\AbstractFactory\Picture as bPicture;
class Picture extends bPicture
{
    public function render()
    {
        return sprintf('<img src="%s" title="%s"/>', $this->path, $this->name);
    }
}