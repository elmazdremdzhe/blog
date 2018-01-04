<?php


namespace App;


class Redis
{

    protected $key;

    public function __construct($key){
        $this->key = $key;
    }

}