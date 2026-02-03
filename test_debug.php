<?php

$testArray = [1,2,3,5,6,7,8,9,11];

foreach ($testArray as $key => $value) {
    if ($value === 5)
    {
        echo 'stop operation';
        break;
    }
}