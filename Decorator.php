<?php
/**
 * 设计模式 装饰器模式
 */

interface IStream{

    public function getStream();
}

class InputStream implements IStream{

    public function getStream()
    {
        // TODO: Implement getStream() method.
    }
}

class JsonStream implements IStream{

    private $stream;

    public function __construct($stream)
    {
        $this->stream = $stream;
    }

    public function getStream()
    {
        return $this->stream->getStream();
    }

    public function getJSON(){

    }
}


$istream = new InputStream();

$jsonStream = new JsonStream($istream);

$jsonStream->getJSON();

/**
 * 装饰器模式的应用场景：

1、需要扩展一个类的功能。

2、动态的为一个对象增加功能，而且还能动态撤销。（继承不能做到这一点，继承的功能是静态的，不能动态增删。）

缺点：产生过多相似的对象，不易排错！
 */