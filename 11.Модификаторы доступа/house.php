<?php

    class Building {
        protected $floors;
        protected $material;

        protected function setFloorsNumber($floorsNumber)
        {
            if($floorsNumber > 20)
            {
                echo 'Количество этажей не может превышать 20';
                return;
            } else
            {
                $this->floors = $floorsNumber;
            }
        }
    }

    class House extends Building {
        private $heatingType;
        private $adress;
        public function __construct($floorsNumber, $material, $adress, $heatingType)
        {
            $this->heatingType = $heatingType;
            $this->adress = $adress;
            $this->material = $material;
            $this->setFloorsNumber($floorsNumber);
        }

        public function showHouseDescription()
        {
            echo $this->adress . PHP_EOL;
            echo $this->material . PHP_EOL;
            echo $this->heatingType . PHP_EOL;
        }
    }

    $cityHouse = new House(12, 'Кирпич', 'Улица лесная', 'Газовое');
    $cityHouse->showHouseDescription();

//    $cityHouse->heatingType = 'Уголь';  // ERROR!