<?php

interface ProductPriceInterface
{
    public function getPrice();
}

class Product implements ProductPriceInterface
{
    protected $name;

    protected $price;

    public function __construct($name, $price)
    {
        $this->name = $name;

        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }


}

