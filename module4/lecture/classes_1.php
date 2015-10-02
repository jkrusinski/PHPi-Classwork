<?php

//This is called defining the class
class Person
{
    //These are properties
    public $name;

    public $age;

    public $location;

    protected $socialSecurityNumber;

    private $bankAccountNumber;

    //This is a method
    function isThisPersonCool()
    {
        if ($this->location == 'Austin') {

            return 'Yeah, you are cool.';

        } else {

            return 'No you\'re not, but please don\'t move here.';

        }
    }
}

//This is when you use the class
//i.e. instantiate the class into an object
$chelsea = new Person();

$chelsea->name = 'Chelsea';
$chelsea->age = 24;
$chelsea->location = 'New York';

$samir = new Person();

$samir->name = 'Samir';
$samir->location = 'Austin';
$samir->age = 31;

echo '<pre>';

print_r($chelsea);
echo $chelsea->isThisPersonCool();
echo '<br />';

print_r($samir);
echo $samir->isThisPersonCool();
echo '<br />';