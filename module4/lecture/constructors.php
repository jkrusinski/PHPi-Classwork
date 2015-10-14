<?php

class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Person extends Animal
{
    protected $address;

    public function __construct($name, $address)
    {
        $this->address = $address;

        parent::__construct($name);

    }
}