<?php
/**
 * 设计模式 适配器模式  适配接口
 */

interface Sourceable{

    public function method1();

    public function method2();
}

abstract class Wrapper implements Sourceable{
    public function method1()
    {
        // TODO: Implement method1() method.
    }

    public function method2()
    {
        // TODO: Implement method2() method.
    }
}


class SourceSub1 extends Wrapper{
    public function method1(){

    }
}

class SourceSub2 extends Wrapper{
    public function method2(){

    }
}

$s1 = new SourceSub1();
$s2 = new SourceSub2();

$s1->method1();
$s1->method2();

$s2->method1();
$s2->method2();