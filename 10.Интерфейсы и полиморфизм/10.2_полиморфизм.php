<?php

interface Animal
{
    public function makeSound();
    public function makeMotion();
}

class Bird implements Animal
{
    public function makeSound()
    {
        echo 'Кукареку' . PHP_EOL;
    }
    public function makeMotion()
    {
        echo 'Я лечу!' . PHP_EOL;
    }
}

// Mammal - млекопитающее
class Mammal implements Animal
{
    public function makeSound()
    {
        echo 'Муууууууу' . PHP_EOL;
    }
    public function makeMotion()
    {
        echo 'Иду и никуда не спешу' . PHP_EOL;
    }
}

class Farm {
    private $animal = [];
    public function addAnimal(Animal $animal){
        $this->animal[] = $animal;
    }

    public function showAnimals(){
        foreach ($this->animal as $animal){
            echo $animal->makeSound();
            echo $animal->makeMotion();
        }
    }
}

$cow = new Mammal();
$dog = new Mammal();
$penguin = new Bird();
$rooster = new Bird(); // rooster - петух

$farm = new Farm();

$farm->addAnimal($cow);
$farm->addAnimal($dog);
$farm->addAnimal($penguin);
$farm->addAnimal($rooster);

$farm->showAnimals();