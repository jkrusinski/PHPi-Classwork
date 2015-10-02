<?php

class Animal
{
    public $name;

    public $hasHair;

    //Can only be used in the class it exists in, or classes that extend the one it's in.
    protected $isWealthy;
}

class Human extends Animal
{
    public function __construct($isWealthy)
    {
        $this->isWealthy = $isWealthy;
    }

    /**
     * If the person is wealthy, say they are, otherwise, say they are not.
     * @return string
     */
    public function checkWealth()
    {
        if($this->isWealthy){
            return "Yeah, you're doing good!";
        } else {
            return "Do more work!";
        }
    }
}

$dog = new Animal();

$dog->name = 'Maximus';

$dog->hasHair = true;

$brian = new Human(true);

echo '<pre>';
print_r($dog);
print_r($brian);