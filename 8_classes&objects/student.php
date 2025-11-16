<?php

class Student {
    public static $department = 'Иностранных языков';
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getDepartment() {
        echo self::$department . PHP_EOL;
    }

    /**
     * @param string $department
     */
//    public function setDepartment(string $department): void
    public static function setDepartment(string $department): void
    {
        self::$department = $department;
    }
}

$studentOne = new Student('Вася');
$studentTwo = new Student('Петя');

Student::setDepartment('Факультет туризма');
echo $studentOne->getDepartment();
echo $studentTwo->getDepartment();

// После изменения поля STATIC в любом из объектов класса
// его значение изменится !!!ВО ВСЕХ!!! экземплярах этого класса
$studentOne->setDepartment('Физмат');
echo $studentOne->getDepartment();

echo $studentTwo->getDepartment();

