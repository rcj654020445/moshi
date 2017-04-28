<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/25
 * Time: 16:56
 */

namespace Moshi\Structural\Adapter;

//客户端期待的接口
interface PaperBookInterface
{
    public function open();
    public function turnPage();
}