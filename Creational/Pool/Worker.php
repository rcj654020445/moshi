<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/20
 * Time: 14:56
 */

namespace Moshi\Creational\Pool;

//对象
class Worker
{
    public function __construct()
    {

    }

    public function run($image, array $callback)
    {
        //处理images
        echo $image;
        //处理完成后回调管理者的完成方法
        call_user_func($callback,$this);
    }
}