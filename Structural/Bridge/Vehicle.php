<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/25
 * Time: 17:40
 */

namespace Moshi\Structural\Bridge;


abstract class Vehicle
{
    protected $workShop1;
    protected $workShop2;

    //制造
    protected function __construct($workShop1,$workShop2)
    {
        $this->workShop1 = $workShop1;
        $this->workShop2 = $workShop2;
    }

    public function manuFacture()
    {

    }
}