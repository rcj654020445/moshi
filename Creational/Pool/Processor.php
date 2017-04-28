<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/20
 * Time: 14:48
 */

namespace Moshi\Creational\Pool;

//对象池管理者
class Processor
{
    private $pool;
    private $processing;
    private $maxProcess=3;
    private $waitQueue = [];

    public function __construct($pool)
    {
        $this->pool = $pool;
    }

    public function process($image)
    {

        if($this->processing++ < $this->maxProcess){
            $this->createWorker($image);
        }else{
            $this->pushToWaitingQueue($image);
        }
    }

    private function createWorker($image)
    {
        $work = $this->pool->get();//从池中获取对象
        $work->run($image,array($this,'processDone'));
    }

    public function processDone($worker)
    {
        $this->processing--;
        $this->pool->dispose($worker);//将对象放入对象池中
        if(count($this->waitQueue) > 0){
            $this->createWorker($this->popFromWaitingQueue());
        }
    }

    private function pushToWaitingQueue($image)
    {
        $this->waitQueue[] = $image;
    }

    private function popFromWaitingQueue()
    {
        return array_pop($this->waitQueue);
    }
}