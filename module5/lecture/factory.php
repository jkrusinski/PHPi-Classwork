<?php

class CarFactory
{
    //factories are usually static, you don't usually instantiate a factory
    //a factory is a static function apart of a class that returns an object
    //need some safety to make sure a class exists
    //

    /**
     * Make a car!
     * @param string $make Make of the car i.e. toyota, honda etc...
     * @param string $model The type of the car i.e. corolla, prius, etc...
     * @throws Exception
     * @return mixed
     */
    public static function getCar($make, $model)
    {
        // Makes the first character uppercase
        $className = ucfirst($model);

        if (!class_exists($className)) {
            throw new Exception($className . ' has not been created!');
        }

        //make sure they didn't type in honda corolla
        $carObject = new $className();
        $parentClass = get_parent_class($carObject);

        if (ucfirst($make) != $parentClass) {
            throw new Exception($parentClass . ' has not been created!');
        }

        return $carObject;
    }
}

abstract class Toyota
{

}

class Corolla extends Toyota
{

}

class Camry extends Toyota
{

}

class Prius extends Toyota
{

}

try {
    $car = CarFactory::getCar('toyota', 'corolla');
    echo '<pre>';
    print_r($car);
} catch (Exception $e) {
    echo $e->getMessage();
}




