<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/6
 * Time: 14:45
 */

namespace Moshi\Creational\AbstractFactory\Json;

use Moshi\Creational\AbstractFactory\Picture as bPicture;

class Picture extends bPicture
{
    public function render()
    {
        return json_encode(array('name' => $this->name, 'path' => $this->path));
    }
}