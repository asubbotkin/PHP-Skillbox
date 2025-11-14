<?php

$supportedOperators = ['+', '-', '*', '/'];
$callsHistory = [];
function calculateOperation(&$callsHistory, float $a, float $b, string $operation = '+') : float
{
    switch ($operation) {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        case '/':
            $result = $a / $b;
            break;
    }
    $callsHistory[] = $a . ' ' . $operation . ' ' . $b . ' ' . '=' . ' ' . $result;
    return $result;
}

//echo calculateOperation(3, 2, '/');

function parseOperator($inputString, $operator)
{
    $parseResult = explode($operator, $inputString);
//    foreach ($parseResult as $key => $value) {
//        trim($parseResult[$key]);
//    }
    if($parseResult && count($parseResult) == 2){
        return ['operators' => $parseResult, 'operator' => $operator];
    }
    return false;
}

do{
    echo ('Введите выражение: ');
    $userInput = readline();
    if($userInput == 'exit') {
        print_r($callsHistory);
    }
    foreach ($supportedOperators as $operator) {
        $parseResult = parseOperator($userInput, $operator);
        if($parseResult){
            echo ('Результат = ' . calculateOperation($callsHistory, intval($parseResult['operators'][0]), intval($parseResult['operators'][1]), $parseResult['operator']) . PHP_EOL);
        }
    }
} while(true);