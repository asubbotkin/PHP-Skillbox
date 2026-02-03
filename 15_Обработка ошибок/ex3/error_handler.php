<?php

function errorHandler($level, $msg, $line, $file)
{
    if($level === E_WARNING)
    {
        echo 'Что-то пошло не так и мы скоро все исправим';
        $dt = new DateTime();
        file_put_contents('admin.log', $dt->format('Y-m-d H:i:s') . ' ' . $msg . ' in file ' . $file . ' in line ' . $line . PHP_EOL, FILE_APPEND);
    }
}

//set_exception_handler()
set_error_handler("errorHandler");

$a = [];
echo $a[5];