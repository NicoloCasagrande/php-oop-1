<?php

class Category {
    public $name;
    public $description;

    public function __construct(string $_name)
    {
        $this->name = $_name;
    }
}