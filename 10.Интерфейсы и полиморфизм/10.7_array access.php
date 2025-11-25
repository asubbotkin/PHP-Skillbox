<?php

class Manager implements ArrayAccess
{
    public $sales = [];
    public $department = 'Отдел продаж';
    public $name = "Василий";

    public function addSale($sale): void
    {
        $this->sales[] = $sale;
    }
    public function offsetGet(mixed $offset): mixed
    {
        return $this->sales[$offset];
    }
    public function offsetSet(mixed $offset, mixed $value): void
    {
        $this->sales[$offset] = $value;
    }
    public function offsetUnset(mixed $offset): void
    {
        unset($this->sales[$offset]);
    }
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->sales[$offset]);
    }
}

$manager = new Manager();
$manager->addSale('MacBook Pro');
$manager->addSale('ThinkPad');
$manager->addSale('HP EliteBook');

$manager[3] = 'Acer';

echo $manager[1] . PHP_EOL;
echo $manager[3] . PHP_EOL;
