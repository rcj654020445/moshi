<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/24
 * Time: 16:02
 */

namespace Moshi\Creational\Prototype;


abstract class BookPrototype
{
    private $title;
    private $category;

    abstract public function __clone();
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
}