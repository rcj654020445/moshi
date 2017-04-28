<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/10
 * Time: 15:40
 */

namespace Moshi\Creational\Singleton;


class Singleton
{
    protected static $instance;

    protected function __construct()
    {
    }

    public static function getInstance(){
        if(!self::$instance instanceof self)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    protected function __clone()
    {
        // TODO: Implement __clone() method.
    }

    protected function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}