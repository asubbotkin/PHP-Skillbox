<?php

    class Test
    {
        public static $publicField = 20;
        private static $privateField = 10;
        protected static $protectedField = 1;

        public function showPrivateField()
        {
            echo self::$privateField . PHP_EOL;
        }
        public function showProtectedField()
        {
            echo self::$protectedField . PHP_EOL;
        }
    }

    $test = new Test();
    echo $test::$publicField . PHP_EOL;
//    echo $test::$privateField. PHP_EOL; // NO ACCESS
    $test->showPrivateField();
    $test->showProtectedField();
