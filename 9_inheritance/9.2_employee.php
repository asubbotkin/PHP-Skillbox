<?php

class Employee
{
    public string $name;
    public string $age;
    public string $position;

    public function setParameters($name, $age, $position){
        $this->name = $name;
        $this->age = $age;
        $this->position = $position;
    }

    public function showEmployeeInfo()
    {
        echo "Сотрудник " . $this->name . " в должности " . $this->position . PHP_EOL;
    }
}

class Accountant extends Employee
{
    public function prepareReport()
    {
        echo "Я готовлю отчет";
    }
}

class CEO extends Employee
{
    public function fireEmployee($name)
    {
        echo "Я уволил " . $name . PHP_EOL;
    }
}

class Welder extends Employee
{
    public function makeWeld()
    {
        echo "Я делаю сварку";
    }
}

$accountant = new Accountant();
$accountant->setParameters('Ольга', '40', 'Главный бухгалтер');

$accountant->showEmployeeInfo();
$accountant->prepareReport();