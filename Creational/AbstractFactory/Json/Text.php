<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/6
 * Time: 14:46
 */

namespace Moshi\Creational\AbstractFactory\Json;

use Moshi\Creational\AbstractFactory\Text as bText;

class Text extends bText
{
    public function render()
    {
        return json_encode(array('content' => $this->text));
    }
}