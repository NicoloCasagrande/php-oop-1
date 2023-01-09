<?php

class Movie {
    public $name;
    public $description;
    public $categories = [];

    public function __construct(string $_name, string $_description, array $_categories)
    {
        $this->name = $_name;
        $this->description = $_description;
        for ($i = 0; $i < count($_categories) ; $i++) { 
            $this->categories += $_categories[$i];
        }
    }

    public function setName($_name){
        $this->name = $_name;
    }

    public function addCategory($_category){
        $this->categories += $_category;
    }
}