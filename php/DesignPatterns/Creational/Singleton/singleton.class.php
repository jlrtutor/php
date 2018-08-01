<?php


/**
 * PHP SINGLETON EXAMPLE
 *
 * private method __construct
 * exception to __clone method 
 * override __wakeup and __sleep method with exception
 */

class Log{

    private static $_singletonInstance;
    private $msgLog;

    private function __construct(){}

    public static function getInstance(){
        if(self::$_singletonInstance == null){
            echo "Creating new Instance!\r\n";
            self::$_singletonInstance = new Log();
        }else{
            echo "Return created instance\r\n";
        }
        return self::$_singletonInstance;
    }

    public function addMessageLog($message) {
        $this->msgLog[] = !empty($message)?($message):"Empty message";
    }

    //override __clone and __wakeup
    private function __clone(){}
    private function __wakeup(){}
}