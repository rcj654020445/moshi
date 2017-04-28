<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/20
 * Time: 16:46
 */

namespace Moshi\Creational\Builder;

use Moshi\Creational\Builder\BuildInterface;
//具体建造者
class CarBuilder implements BuildInterface
{
    private $car;

    public function addoors()
    {
        $this->car->setAttribute('左车门',new Parts\Door());
        $this->car->setAttribute('右车门',new Parts\Door());
    }

    public function addEngine()
    {
        $this->car->setAttribute('发动机',new Parts\Engine());
    }

    public function addWheel()
    {
        $this->car->setAttribute('左前轮',new Parts\Wheel());
        $this->car->setAttribute('右前轮',new Parts\Wheel());
        $this->car->setAttribute('左后轮',new Parts\Wheel());
        $this->car->setAttribute('左后轮',new Parts\Wheel());
    }

    public function createVehicle()
    {
        $this->car = new Parts\Car();
    }

    public function getVehicle()
    {
        return $this->car;
    }
}