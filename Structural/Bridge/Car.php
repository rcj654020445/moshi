<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/25
 * Time: 17:48
 */

namespace Moshi\Structural\Bridge;

use Moshi\Structural\Bridge\Vehicle;

class Car extends Vehicle
{
    public function __construct($workShop1, $workShop2)
    {
        parent::__construct($workShop1, $workShop2);
    }

    public function manuFacture()
    {
        echo 'Car';
        $this->workShop1->work();
        $this->workShop2->work();
    }
}