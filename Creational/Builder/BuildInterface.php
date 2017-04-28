<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/20
 * Time: 16:39
 */

namespace Moshi\Creational\Builder;

//抽象建造者角色
interface BuildInterface
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addoors();

    public function getVehicle();
}