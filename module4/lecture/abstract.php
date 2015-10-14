<?php

abstract class Product
{
    protected $name;

    protected $price;

    abstract function getPrice();

}

class HomePageProduct extends Product
{
    public function getPrice()
    {
        return $this->price;
    }
}

class ShoppingCartProduct extends Product
{
    protected $qty = 10;

    public function getPrice()
    {
        return $this->price * $this->qty;
    }
}

