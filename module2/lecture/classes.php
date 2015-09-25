<?php

class Vehicle
{
    public $Wheels;
    public $Hydraulics;
    public $Brand;

    private $Vin;

}

class SUV extends Vehicle
{
    public $Name;
    public $Price;

    function __construct($wheels, $hydraulics, $brand, $name, $price)
    {
        $this->Wheels = $wheels;
        $this->Hydraulics = $hydraulics;
        $this->Brand = $brand;
        $this->Name = $name;
        $this->Price = $price;
    }
}

function makeJeep()
{
    $Jeep = new SUV('Off Road', 'High Performance', 'Jeep', 'Wrangler', 20000);

    return $Jeep;
}

$myJeep = makeJeep();

echo '<pre>';
print_r($myJeep);
echo '</pre>';

