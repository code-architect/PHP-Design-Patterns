<?php

class Decorator {

    public $sentence = '';

    public function lower()
    {
        if(!empty($this->sentence ))
        {
            return strtolower($this->sentence);
        }
        return 'Please enter proper sentence';
    }

    public function upper()
    {
        if(!empty($this->sentence ))
        {
            return strtoupper($this->sentence);
        }
        return 'Please enter proper sentence';
    }


}