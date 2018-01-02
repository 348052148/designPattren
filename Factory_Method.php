<?php
/**
 * 设计没收 工厂方法
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

interface Provider {
    public function produce();
}

class SenderEmailFactory implements Provider {
    public function produce()
    {
        return new EmailSender();
        // TODO: Implement produce() method.
    }
}

class SenderSMSFactory implements Provider{
    public function produce()
    {
        return new SMSSender();
        // TODO: Implement produce() method.
    }
}
