<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/20
 * Time: 16:41
 */

namespace Moshi\Creational\Builder;

use Moshi\Creational\Builder\BuildInterface;
//具体建造者
class BikeBuilder implements BuildInterface
{
    private $bike;

    public function addoors()
    {

    }

    public function addEngine()
    {
        $this->bike->setAttribute('自行车左踏脚',new Parts\Engine());
        $this->bike->setAttribute('自行车右踏脚',new Parts\Engine());
    }

    public function addWheel()
    {
        $this->bike->setAttribute('自行车前轮',new Parts\Wheel());
        $this->bike->setAttribute('自行车后轮',new Parts\Wheel());
    }

    public function createVehicle()
    {
        $this->bike = new Parts\Bike();
    }

    public function getVehicle()
    {
        return $this->bike;
    }
}