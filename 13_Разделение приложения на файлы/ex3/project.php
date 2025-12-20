<?php

    include 'module1.php';
    include 'module2.php';

    use LibraryTwo\TestToolkit as TK;

    $test1 = new LibraryOne\TestClass();
    $test2 = new TK\TestClass();

    $test1->libraryName();
    $test2->libraryName();