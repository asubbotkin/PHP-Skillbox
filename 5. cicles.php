<?php

// Цикл for

$candidates = [23, 45, 70, 90, 56, 85];
$candidatesNum= count($candidates);

for ($i = 0; $i < $candidatesNum; $i++) {
    if ($candidates[$i] > 70) {
        echo "Кандидат с номером {$i}  набрал больше 70 баллов.\n";
    }
}

for ($i = 200; $i > 0; $i--) {
    if ( $i % 5 === 0 ) {
        echo "Число $i делится на 5\n}";
    }
}


$candidates = ['Иван Иванов' => 23, 'Денис Денисов' => 45, 'Петр Петров' => 70, 'Андрей Андреев' => 90, 'Николай Николаев' => 56, 'Михаил Михайлов' => 85];
foreach ($candidates as $key => $candidate) {
    if ($candidate > 70) {
        echo "Кандидат с именем $key набрал больше 70 баллов\n";
    }
}

$testArray = [1, 2, 3];

// Значения в исходном массиве не изменились т.к. в переменную $value КОПИРУЕТСЯ значение текущего элемента массива
foreach ($testArray as $value) {
    $value = 0;
}

print_r($testArray);

// А так $value - это ссылка на значение элемента массива и значение меняется
foreach ($testArray as &$value) {
    $value = 0;
}

print_r($testArray);

// Циклы while и do/while

while (false) {
    echo "Я цикл while";
}

do {
    echo "Я цикл do/while\n";
}
while (false);

$str = 'abracadabra';
$strLen = strlen($str);

for ($i = 0; $i < $strLen; $i++) {
    if ($str[$i] === 'a') {
        $str[$i] = 'x';
    }
}
echo $str;