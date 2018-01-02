<?php
/**
 * 设计模式 简单工厂模式
 */

interface iSender{

    public function sendMessage($code,$text);

}

class EmailSender implements iSender{

    public function sendMessage($code, $text)
    {

        // TODO: Implement sendMessage() method.
    }
}

class SMSSender implements iSender{
    public function sendMessage($code, $text)
    {
        // TODO: Implement sendMessage() method.
    }
}


class SenderFactory{
    static $finstance = null;

    private function __construct()
    {

    }
    // 这里使用单例模式
    public static function Instance(){
        self::$finstance = (self::$finstance)?self::$finstance:new SenderFactory();

        return self::$finstance;
    }
    //-------------传递参数---------------
    public function produce($msg_type){
        $sender = null;
        switch ($msg_type){
            case 'email':
                $sender = new EmailSender();
                break;
            case 'sms':
                $sender = new SMSSender();
                break;
        }

        return $sender;
    }
    //---------------多个方法-----------------
    public function produceEmail(){
        return new EmailSender();
    }

    public function produceSms(){
        return new SMSSender();
    }
    //--------------多个静态方法-------------
}

//总结 对于简单工厂模式也没有什么特定的限制。主要是理解其思想。和应用场景。