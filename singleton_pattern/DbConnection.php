<?php

class DbConnection
{
    private function __construct()
    {
        echo "new object created <br>\n";
    }

    public static function getInstance()
    {
        static $instance = null;
        if(null == $instance)
        {
            $instance = new static();
        }else{
            echo "Using the same object <br>\n";
        }
        return $instance;
    }
}