<?php

class Manager implements Countable
{
    public $sales = [];
    public function addSale($sale) : void
    {
        $this->sales[] = $sale;
    }
    public function count() : int {
        return count($this->sales);
    }
}

$manager = new Manager();
$manager->addSale('MacBook Pro');
$manager->addSale('ThinkPad');
$manager->addSale('HP EliteBook');

echo 'Менеджер продал ' . count($manager) . ' ноутбуков.' . PHP_EOL;