<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/20
 * Time: 16:49
 */

namespace Moshi\Creational\Builder;

//指导者
class Director
{
    public function builder(BuildInterface $builder)
    {
        $builder->createVehicle();
        $builder->addWheel();
        $builder->addEngine();
        $builder->addoors();
        return $builder->getVehicle();
    }

}