<?php

    $testArray = ['One', 'Two', 'Three'];

//$element_number

    if (isset($_GET['element_number']) && array_key_exists($_GET['element_number'], $testArray)) {
        echo $testArray[$_GET['element_number']] . PHP_EOL;
    } else
    {
        echo 'Parameter value is incorrect' . PHP_EOL;
    }

// message

    if (isset($_GET['message']))
    {
        echo '<br>' . $_GET['message'] . PHP_EOL;
    }
