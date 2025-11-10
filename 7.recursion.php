<?php

// Рекурсивная функция - это функция, которая вызывает саму себя.

function factorial($n)
{
    return $n > 1 ? $n * factorial($n - 1) : $n;
}

var_dump(factorial(8));

function cbOne() {
    return 'My name is cbOne';
}

function cbTwo() {
    return 'My name is cbTwo';
}

function runCallback ( $fName ) {
    echo call_user_func( $fName ) . PHP_EOL;
}

runCallback("cbOne");
runCallback("cbTwo");


function cbOne1( $name ) {
    return 'My name is ' . $name . PHP_EOL;
}

function runCallback1( $fName ) {
    echo call_user_func( 'cbOne1', $fName );
}
runCallback1("motherfucker");

$simpleNumber = 7;
function runCallback2( $fName ) {
    if(is_callable($fName)) {
        echo call_user_func( $fName, $fName );
    }
}
runCallback2("simpleNumber"); // возвращает false т.к. simpleNumber не является функцией
runCallback2("cbOne");

// Функция arrayMap принимает на входе 2 параметра 1-callback функция, 2-массив.
//              НЕ ИЗМЕНЯЕТ ЗНАЧЕНИЯ ИСХОДНОГО МАССИВА.
// Применяет эту функцию для каждого элемента массива и возвращает измененный массив,
// в котором элементами будут результаты работы callback функции.

$numbersArray = [1,2,3,4,5,6,7,8,9];

function factorial1( $n ) {
    return $n > 1 ? $n * factorial($n - 1) : $n;
}

$facArray = array_map('factorial1', $numbersArray);

echo 'Исходнфй массив' . PHP_EOL;
print_r($numbersArray);
echo 'Массив факториалов' . PHP_EOL;
print_r($facArray);

// Не обязательно использовать пользовательскую функцию в качестве callback,
// можно использовать и встроенные функции, например вычисление квадратного корня

$sqrtArray = array_map('sqrt', $numbersArray);
echo 'Массив квадратных корней' . PHP_EOL;
print_r($sqrtArray);
