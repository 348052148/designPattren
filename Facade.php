<?php
/**
 * 设计模式  外观模式
 */


class CPU{
    public function startup(){

    }

    public function shutdown(){

    }
}

class Memory{
    public function startup(){

    }

    public function shutdown(){

    }
}

class Disk{
    public function startup(){

    }

    public function shutdown(){

    }
}

class Compter {

    public function __construct()
    {
        $this->cpu = new CPU();
        $this->memory = new Memory();
        $this->disk = new Disk();
    }

    public function startup(){
        $this->cpu->startup();
        $this->memory->startup();
        $this->disk->startup();
    }

    public function shutdown(){
        $this->cpu->shutdown();
        $this->memory->shutdown();
        $this->disk->shutdown();
    }
}

/**
 * 如果我们没有Computer类，那么，CPU、Memory、Disk他们之间将会相互持有实例，产生关系，
 * 这样会造成严重的依赖，修改一个类，可能会带来其他类的修改，
 * 这不是我们想要看到的，有了Computer类，他们之间的关系被放在了Computer类里，
 * 这样就起到了解耦的作用，这，就是外观模式！
 */