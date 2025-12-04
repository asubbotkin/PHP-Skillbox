<?php

    class ParentClass
    {
        protected const TEST_CONST = 'Parent';

        public function showField() {
            echo static::TEST_CONST . PHP_EOL;  // Результат "Inherit" - метод позднего статического связывания
//            echo self::TEST_CONST . PHP_EOL; // Результат "Parent"
        }
    }

    class ChildClass extends ParentClass {
        protected const TEST_CONST = 'Inherit';
    }

    $childClassObj = new ChildClass();
    $childClassObj->showField();
