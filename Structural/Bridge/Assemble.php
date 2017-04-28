<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/25
 * Time: 17:53
 */

namespace Moshi\Structural\Bridge;

use Moshi\Structural\Bridge\WorkShop;

class Assemble implements WorkShop
{
    public function work()
    {
        echo 'Assembled';
    }
}