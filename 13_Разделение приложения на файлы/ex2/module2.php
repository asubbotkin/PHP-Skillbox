<?php

    include_once './module1.php';

    function calc(int $n) : int
    {
        return sqr($n) + 5;
    }