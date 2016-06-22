<?php

class Result{
    
    public $error = false;
    public $text;
    public $field;
    public $data;
    
    public function __construct($config = []) {
        foreach($config as $prop => $val){
            if(property_exists($this, $prop)){
                $this->$prop = $val;
            }
        }
    }


    public function json(){
        return json_encode($this, JSON_UNESCAPED_UNICODE);
    }
    
    public static function model(){
        return new self();
    }
}