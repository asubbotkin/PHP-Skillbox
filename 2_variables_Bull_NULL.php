<?php

$a = 4;
$b = 5;

$c = $a + ++$b;
var_dump($c);
var_dump($b);

$d = $a + $b++;
var_dump($d);
var_dump($b);

$a;
var_dump($a);

$b = null;
var_dump($b);

$c = isset($b);
var_dump($c);

$d = is_null($b);
var_dump($d);
