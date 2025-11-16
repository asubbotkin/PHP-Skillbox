<?php

$employee_1 = ['age' => 30, 'gender' => 'male', 'name' => 'Ivan', 'surname' => 'Ivanov', 'position' => 'CEO'];
$employee_2 = ['age' => 28, 'gender' => 'female', 'name' => 'Irina', 'surname' => 'Petrova', 'position' => 'CTO'];

function displayName($employee)
{
    echo $employee['name'] . PHP_EOL;
}

function displayAge($employee)
{
    echo $employee['age'] . PHP_EOL;
}

function changePosition(&$employee, $newPosition) {
    $employee['position'] = $newPosition;
}

displayName($employee_1);
displayName($employee_2);

displayAge($employee_1);
displayAge($employee_2);

changePosition($employee_2, 'HR');
print_r($employee_2);

class Employee
{
    public $age, $gender, $name, $surname, $position;
    public function displayName()
    {
        echo $this->name . PHP_EOL;
    }

    public function displayAge()
    {
        echo $this->age . PHP_EOL;
    }

    public function changePosition($newPosition) {
        $this->position = $newPosition;
    }
}

$employee_1 = new Employee();
$employee_2 = new Employee();

$employee_1 -> age  = 30;
$employee_1 -> gender = 'male';
$employee_1 -> name = 'Ivan';
$employee_1 -> surname = 'Ivanov';
$employee_1 -> position = 'CEO';

$employee_2 -> age  = 28;
$employee_2 -> gender = 'female';
$employee_2 -> name = 'Irina';
$employee_2 -> surname = 'Petrova';
$employee_2 -> position = 'CTO';

$employee_1->displayName();
$employee_2->displayName();

$employee_1->displayAge();
$employee_2->displayAge();

$employee_2->changePosition('HR');

print_r($employee_2);