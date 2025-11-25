<?php


class Manager implements Serializable
{
    public $sales = [];
    public $department = 'Отдел продаж';
    public $name = "Василий";

    public function addSale($sale): void
    {
        $this->sales[] = $sale;
    }

    public function serialize(){
        return serialize($this->sales);
    }

    public function unserialize($data){
        return $this->sales = unserialize($data);
    }
}

$manager = new Manager();
$manager->addSale('MacBook Pro');
$manager->addSale('ThinkPad');
$manager->addSale('HP EliteBook');

echo serialize($manager);