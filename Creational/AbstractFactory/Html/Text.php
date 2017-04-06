<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/6
 * Time: 14:40
 */

namespace Moshi\Creational\AbstractFactory\Html;

use Moshi\Creational\AbstractFactory\Text as bText;

class Text extends bText
{
    public function render()
    {
        return '<div>'.htmlspecialchars($this->text).'</div>';
    }
}