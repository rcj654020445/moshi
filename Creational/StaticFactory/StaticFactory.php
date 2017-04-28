<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/10
 * Time: 14:11
 */

namespace Moshi\Creational\StaticFactory;

use Moshi\Creational\StaticFactory\FormatterInterface;

class StaticFactory
{
    public static function creteFormatter(FormatterInterface $type)
    {
        $className = __NAMESPACE__.'\Formatter'.ucfirst($type);
        if(class_exists($className)){
            throw new \InvalidArgumentException('Missing format class.');
        }
        return new $className();
    }
}