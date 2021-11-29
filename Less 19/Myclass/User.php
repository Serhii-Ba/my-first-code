<?php

namespace Less19\Myclass;

class User {

    public $name;

    public $age;

    public function __construct($name, $age = null) {
        $this->name = $name;
        $this->age = $age = rand(1,100);
    }

    public function getName () {
        return $this->name;
    }

    public function getAge () {
        return $this->age;
    }
}

