<?php


class Manager implements Stringable
{
public $sales = [];
    public $department = 'Отдел продаж';
    public $name = "Василий";

    public function addSale($sale): void
    {
        $this->sales[] = $sale;
    }
    public function __toString() : string{
        return $this->name . ' из ' . $this->department . PHP_EOL;
    }
}

$manager = new Manager();
$manager->addSale('MacBook Pro');
$manager->addSale('ThinkPad');
$manager->addSale('HP EliteBook');

echo $manager;