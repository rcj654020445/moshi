<?php
/**
 * Created by PhpStorm.
 * User: RCJ
 * Date: 2017/4/25
 * Time: 16:58
 */

namespace Moshi\Structural\Adapter;

use Moshi\Structural\Adapter\PaperBookInterface;
//定义适配器
class EBookAdapter implements PaperBookInterface
{
    private $ebook;

    public function __construct(EbookInterface $ebook)
    {
        $this->ebook = $ebook;
    }

    public function open()
    {
        $this->ebook->pressStart();
    }
    public function turnPage()
    {
        $this->ebook->pressNext();
    }
}