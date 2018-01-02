<?php

/**
 * 设计模式 抽象工厂
 * 适用场景 当需要创建的对象是一系列相互关联或相互依赖的产品族时，
 * 便可以使用抽象工厂模式。说的更明白一点，就是一个继承体系中，
 * 如果存在着多个等级结构（即存在着多个抽象类），并且分属各个等级结构中的实现类之间存在着一定的关联或者约束，
 * 就可以使用抽象工厂模式。假如各个等级结构中的实现类之间不存在关联或约束，则使用多个独立的工厂来对产品进行创建，
 * 则更合适一点。
 */

interface iMouse{
    public function cursor();
}

interface iKeyboard{
    public function keypress();
}


class Mouse implements iMouse{

    public function cursor()
    {
        // TODO: Implement cursor() method.
    }
}

class KeyBoard implements iKeyboard{

    public function keypress()
    {
        // TODO: Implement keypress() method.
    }
}

interface IFactory {

    public function produceMouse();

    public function produceKeyBoard();
}

/**
 * 简单理解一个抽象工厂生成 不同类型的商品
 */

class InterFactory implements IFactory{
    public function produceKeyBoard()
    {
        return new Mouse();
        // TODO: Implement produceKeyBoard() method.
    }

    public function produceMouse()
    {
        return new KeyBoard();
        // TODO: Implement produceMouse() method.
    }
}

class LuoJiFactory implements IFactory{
    public function produceKeyBoard()
    {
        return new Mouse();
        // TODO: Implement produceKeyBoard() method.
    }

    public function produceMouse()
    {
        return new KeyBoard();
        // TODO: Implement produceMouse() method.
    }
}


