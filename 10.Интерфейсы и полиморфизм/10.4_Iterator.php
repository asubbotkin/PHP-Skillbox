<?php

class Manager implements Iterator
{
    public $sales = [];
    public $position = 0;
    public function addSale($sale) : void
    {
        $this->sales[] = $sale;
    }

    public function current()
    {
        return $this->sales[$this->position];
    }
    public function key()
    {
        return $this->position;
    }
    public function next()
    {
        ++$this->position;
    }
    public function rewind() : void
    {
        $this->position = 0;
    }
    public function valid() : bool
    {
        return isset($this->sales[$this->position]);
    }
}

$manager = new Manager();
$manager->addSale('MacBook Pro');
$manager->addSale('ThinkPad');
$manager->addSale('HP EliteBook');

echo 'Менеджер продал ' . PHP_EOL;
foreach ($manager as $sale) {
    echo $sale . PHP_EOL;
}
