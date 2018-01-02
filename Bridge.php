<?php
/**
 * 设计模式  桥接模式
 */

interface IDriver{

    public function connect();
}

class MysqlDriver implements IDriver{

    public function connect()
    {
        // TODO: Implement connect() method.
    }
}

class SqliteDriver implements IDriver{

    public function connect()
    {
        // TODO: Implement connect() method.
    }
}

abstract class Bridge {

    private $driver;

    public function setDriver($driver){
        $this->driver = $driver;
    }

    public function connect(){
        return $this->driver->connect();
    }

    public function getDriver(){
        return $this->driver;
    }


}

class DriverManager extends Bridge{

}

$driverManager = new DriverManager();
$driverManager->setDriver(new MysqlDriver());
$driverManager->connect();