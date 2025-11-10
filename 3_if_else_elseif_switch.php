<?php

$a = 2;
$b = 3;
$c = 0;

if ($a >= $b){
    $c = 1;
}
var_dump($c);

if ($a <= $b){
    $c = 1;
}
var_dump($c);

if ($a >= $b){
    $c = 1;
} else {
    $c = 2;
}
var_dump($c);

if ($a > $b){
    $c = 1;
} elseif ($a <= $b) {
    if ($a == $b) {
        $c = 2.1;
    } else {
        $c = 2.2;
    }
}else {
    $c = 3;
}
var_dump($c);

// тернарный оператор
$a = 2;

$b = $a > 10 ? 1 : 2;
var_dump($b);

$b = $a > 10 ? 1 : ($a > 5 ? 2 : 3);
var_dump($b);

// null-коалесцентный оператор - проверка значеня переменной на NULL

$a = null;
$b = $a ?? 10;
var_dump($b);

$b = 100;
$c = $b ?? 'abc';
var_dump($c);

$d = null;
$e = $a ?? $d ?? 2.2;
var_dump($e);

// булева алгебра

$a = false;
$b = true;
if ($a == true && $b == true) {
    $c = 1;
} else { $c = 0; }
var_dump($c);               // c = 0

if ($a || $b) {
    $d = 1;
} else { $d = 0; }
var_dump($d);               // d = 1

$c = $a && $b ? 1 : 0;      // c = 0
var_dump($c);

$d = $a || $b ? 1 : 0;      // d = 1
var_dump($d);

$a = false;
$b = false;
$c = true;
$d = $a || ($b && $c) ? 1 : 0;
var_dump($d);               // d = 0

$d = $a || !($b && $c) ? 1 : 0;
var_dump($d);               // d = 1

$d = !$a || ($b && $c) ? 1 : 0;
var_dump($d);               // d = 1

// оператор switch/case

$a = 3;
if ($a == 1) {
    $b = 10;
} elseif ($a == 2) {
    $b = 20;
} elseif ($a == 3) {
    $b = 30;
} else {
    $b = -10;
}
var_dump($b);

switch ($a) {
    case 1:
        $b = 10;
        break;

    case 2:
        $b = 20;
        break;

    case 3:
        $b = 30;
        break;

    default:
        $b = -10;
}
var_dump($b);           // 30

switch ($a) {
    case 1:
        $b = 10;
        break;

    case 2:
        $b = 20;
        break;

    case 3:
        $b = 30;
        //  ERROR  !!! missing break operator !!!

    default:
        $b = -10;
}
var_dump($b);           // -10

switch ($a) {
    case 1:
        $b = 10;
        break;

    case 2:
    case 3:
        $b = 20;
        break;

    case 3:
        $b = 30;
        break;

    default:
        $b = -10;
}
var_dump($b);           // 20

$c = 4;
switch ($a + 1) {
    case 3:
        $d = 0;
        break;
    case $c:
        $d = 1;
        break;
}
var_dump($d);           // 1

