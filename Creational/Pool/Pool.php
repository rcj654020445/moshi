<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/20
 * Time: 14:55
 */

namespace Moshi\Creational\Pool;

//对象池
class Pool
{
    private $class;
    private $instance = [];

    public function __construct($class)
    {
        $this->class = $class;
    }

    //获取对象
    public function get()
    {
        if(count($this->instance) > 0){
            return array_pop($this->instance);
        }
        return new $this->class();
    }

    //回收对象
    public function dispose($instance)
    {
        $this->instance[] = $instance;
    }
}