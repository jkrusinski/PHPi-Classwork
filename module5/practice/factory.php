<?php

//Car factory, Toyota Corolla example

class CarFactory
{
    public static function getCar($make, $model)
    {
        $model = ucfirst(strtolower($model));

        if (!class_exists($model)) {
            throw new Exception($model . ' is not a valid model');
        }

        $newCar = new $model();

        $parent = get_parent_class($newCar);

        $make = ucfirst(strtolower($make));

        //can also use is_subclass_of($child, $parent)
        if ($parent != $make) {
            throw new Exception($make . ' is not a valid make for this model');
        }

        return $newCar;
    }
}

class Toyota
{

}

class Corolla extends Toyota
{

}

class Prius extends Toyota
{

}

try {
    $prius = CarFactory::getCar('Honda', 'Prius');
    echo '<pre>';
    print_r($prius);
} catch (Exception $e) {
    echo $e->getMessage();
}
