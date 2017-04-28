<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/25
 * Time: 16:57
 */

namespace Moshi\Structural\Adapter;

//定义需要适配的类
interface EbookInterface
{
    public function pressNext();
    public function pressStart();
}