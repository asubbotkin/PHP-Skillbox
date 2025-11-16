<?php

class Building{
    const MAX_FLOORS = 20;
    private $floors;

    public function setFloorsNumber($floorsNumber){
        if($floorsNumber > self::MAX_FLOORS){
            echo 'Превышено максимальное количество этажей.' . PHP_EOL;
        }else {
            $this->floors = $floorsNumber;
        }
    }
    public function getFloorsNumber()
    {
        echo $this->floors . PHP_EOL;
    }

// Предопределенные методы при создании любого класса
    public function showClassName()
    {
        echo "Вызван метод " . __METHOD__ . PHP_EOL;
        echo __CLASS__ . PHP_EOL;
    }
}

$firstBuilding = new Building();
$firstBuilding->setFloorsNumber(22);
$firstBuilding->setFloorsNumber(12);
$firstBuilding->getFloorsNumber();

$firstBuilding->showClassName();

// Так же имя класса можно получить вот так
echo Building::class . PHP_EOL;