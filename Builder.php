<?php
/**
 * 设计模式 建造者模式
 */


class Product{

    public function add(){

    }
}

abstract class IBuilder {
    private $product;
    public function __construct()
    {
        $this->product = new Product();
    }

    public abstract function builderHead();
    public abstract function builderBody();
    public abstract function builderFeet();

    public function getResult(){
        return $this->product;
    }
}

class FatBuilder extends IBuilder {

    public function builderBody()
    {
        // TODO: Implement builderBody() method.
    }
    public function builderFeet()
    {
        // TODO: Implement builderFeet() method.
    }
    public function builderHead()
    {
        // TODO: Implement builderHead() method.
    }
}

class Director {

    public function construct($builder){
        $builder->builderHead();
        $builder->builderBody();
        $builder->builderFeet();
    }
}

$director = new Director();

$fat = new FatBuilder();

$director->construct($fat);

$fat->getResult();
/*
使用建造者模式的好处：

1.使用建造者模式可以使客户端不必知道产品内部组成的细节。

2.具体的建造者类之间是相互独立的，对系统的扩展非常有利。

3.由于具体的建造者是独立的，因此可以对建造过程逐步细化，而不对其他的模块产生任何影响。

使用建造模式的场合：

1.创建一些复杂的对象时，这些对象的内部组成构件间的建造顺序是稳定的，但是对象的内部组成构件面临着复杂的变化。

2.要创建的复杂对象的算法，独立于该对象的组成部分，也独立于组成部分的装配方法时。
*/