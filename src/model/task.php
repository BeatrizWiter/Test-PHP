<?php

namespace App\model;

class Task{
    public $title;

    function __construct($title){
        
        $this->title=$title;
    }
}