<?php

abstract class A
{

}

//$aObj = new A(); // Ошибка! из абстрактного класса нельзя создать объект

class B extends A // Но его можно наследовать
{

}

$bObj = new B();

abstract class Vehicle
{
    abstract function move();
}

class Car extends Vehicle
{
    public function move() : void {
        echo "Завести мотор" . PHP_EOL;
    }
}

class Bicycle extends Vehicle
{
    public function move() : void {
        echo "Крутить педали" . PHP_EOL;
    }
}

$car = new Car();
$bicycle = new Bicycle();

$car->move();
$bicycle->move();
