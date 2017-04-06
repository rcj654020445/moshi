<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/6
 * Time: 14:53
 */


require str_replace('\\','/',dirname(dirname(__FILE__))).'/vendor/autoload.php';

/*
 * 抽象工厂
 *
use Moshi\Creational\AbstractFactory\AbstractFactory;
use Moshi\Creational\AbstractFactory\HtmlFactory;
use Moshi\Creational\AbstractFactory\JsonFactory;

//获取工厂
$factorys = array(
    new JsonFactory(),
    new HtmlFactory()
);

//工厂1创建产品族
echo $factorys[0]->createText('hell word')->render();
echo $factorys[0]->createPicture('/image.jpg', 'caption')->render();
//工厂2创建产品族
echo $factorys[1]->createText('hell word')->render();
echo $factorys[1]->createPicture('/image.jpg', 'caption')->render();
*/

/*
 * 工厂方法
 * */
use Moshi\Creational\FactoryMethod\FactoryMethod;
use Moshi\Creational\FactoryMethod\GermanFactory;
use Moshi\Creational\FactoryMethod\ItalianFactory;

$factorys = array(
    new GermanFactory(),
    new ItalianFactory()
);

$types = [
    FactoryMethod::CHEAP,
    FactoryMethod::FAST
];
foreach ($factorys as $o) {
    foreach ($types as $v) {
        $obj = $o->create($v);
        echo $obj->setColor($v)->getColor();
    }
}