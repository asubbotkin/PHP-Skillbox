<?php

function calculateSum($a, $b)
{
    return $a + $b;
}

//echo calculateSum(5, 3);

// В функции displayParameters все 3 параметра обязательны
function displayParameters($a, $b, $c){
    echo $a . ' ' . $b . ' ' . $c . PHP_EOL;
}
//displayParameters('Hi', 3, 9);

// В функциях могут быть и не обязательные параметры, тогда этим параметрам должны быть присвоены
// ЗНАЧЕНИЯ ПО УМОЛЧАНИЮ, например:
function displayParameters1($a, $b, $c = 0){
    echo $a . ' ' . $b . ' ' . $c . PHP_EOL;
}
displayParameters1('Hi', 3);

// Так же бывают функции с переменным количеством аргументов.
// В этом случае параметры передаются как массив
function multipleParams(...$numbers){
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}
echo multipleParams(1, 3, 5) . PHP_EOL;
echo multipleParams(2, 4, 6, 8, 10) . PHP_EOL;

//function isValidNumber($n){
//    if($n % 3 === 0){
//        return true;
//    }else return false;
//}
// функцию isValidNumber можно записать гораздо короче !!!
function isValidNumber($n){
    return ($n % 3 === 0);
}

//for ($i = 1; $i <= 100; $i++) {
//    if(isValidNumber($i)){
//        echo 'Число ' . $i . ' делится на 3' . PHP_EOL;
//    }else echo 'Число ' . $i . ' не делится на 3' . PHP_EOL;
//}

function displayResult($n, $isValidNumber){
    if($isValidNumber){
        echo 'Число ' . $n . ' делится на 3' . PHP_EOL;
    }else echo 'Число ' . $n . ' не делится на 3' . PHP_EOL;
}

for($i =1 ; $i <= 100 ; $i++){
    displayResult($i, isValidNumber($i));
}

// Типизация параметров функции
// Тип значения, КОТОРОЕ ВОЗВРАЩАЕТ ФУНКЦИЯ, пишется после блока параметров
// функции. VOID - означает, что функция ничего не возвращает!
function displayString(string $str, int $n) : void
{
    for($i = 0 ; $i < $n ; $i++){
        echo $str . PHP_EOL;
    }
}
displayString('Hello!', 3);

function displayArray(string $str, int $n) : array
{
    $resultArray = [];
    for($i = 0 ; $i < $n ; $i++){
        $resultArray[$i] = $str;
    }
    return $resultArray;
}

$resultArray = displayArray('Hello world!', 3);

foreach($resultArray as $result){
    echo $result . PHP_EOL;
}
