<?php
/**
 * 设计模式  单例模式
 */

class Singleton{

    static $ins;

    private function __construct()
    {

    }

    // php 不用考虑线程问题
    public static function getInstance(){

        self::$ins = (self::$ins)?self::$ins:new Singleton();

        return self::$ins;
    }

}