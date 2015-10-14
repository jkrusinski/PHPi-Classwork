<?php

class Door
{
    /**
     * small|big|gigantic
     * @var string
     */
    protected $size;

    /**
     * Door constructor.
     * @param string $size
     */
    public function __construct($size)
    {
        $this->size = $size;
    }


}

class Window
{
    /**
     * sliding|opening
     * @var string
     */
    protected $type;

    /**
     * Window constructor.
     * @param string $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }


}

class Floor
{
    /**
     * title\carpet\linoleum
     * @var string
     */
    protected $material;

    /**
     * Wiring constructor.
     * @param string $material
     */
    public function __construct($material)
    {
        $this->material = $material;
    }


}

###############################################
################# MAKE A HOUSE ################
###############################################

class House
{
    protected $door;

    protected $window;

    protected $floor;

    public function __construct(Door $door, Window $window, Floor $floor)
    {
        $this->door = $door;
        $this->window = $window;
        $this->floor = $floor;
    }
}

// The mighty Service Container!!!
// The SC is a location for you to instantiate all your objects and manage dependencies
$mainDoor = new Door('gigantic');

$kitchenWindow = new Window('sliding');

$bedroomFloor = new Floor('carpet');

echo '<pre>';

$house = new House($mainDoor, $kitchenWindow, $bedroomFloor);

print_r($house);