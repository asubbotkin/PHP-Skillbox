<?php

trait VehicleMethods
{
    public function ride()
    {
        echo "Я могу ехать" . PHP_EOL;
    }
    public function fly()
    {
        echo "Я могу лететь" . PHP_EOL;
    }

}

class Car
{
    use VehicleMethods;
}

class Plane
{
    use VehicleMethods;
}

class PhantomasCar
{
    use VehicleMethods;
}

$phantom = new PhantomasCar();
$phantom->fly();
$phantom->ride();
