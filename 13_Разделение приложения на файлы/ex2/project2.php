<?php

    require './module1.php';
    require './module2.php';
//    include './module3.php';    // WARNING Continue operating
//    require './module3.php';   // FATALL ERROR! Stop operating
//    include './module1.php';
//    include './module2.php';
//    include_once './module1.php'; //


//include './module1.php';  // Ошибка!!! нельзя несколько раз использовать INCLUDE для одного того же файла
//include_once './module1.php';  // include_once если файл ранее уже был подключен через include/include_once и не вызывает ошибку

//require './module2.php';    // Error!
require_once './module2.php'; // Works!

echo 'Квадрат числа 2 равен ' . sqr(2) . PHP_EOL;
echo 'Наши вычисления ' . calc(2) . PHP_EOL;

echo 'still working' . PHP_EOL;