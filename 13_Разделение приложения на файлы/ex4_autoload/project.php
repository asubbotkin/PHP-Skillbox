<?php

function loaderLibOne($classname) : void
{
    if(file_exists('library1/' . $classname . '.php'))
        require_once 'library1/' . $classname . '.php';
}
function loaderLibTwo($classname) :void
{
    if(file_exists('library2/' . $classname . '.php'))
    require_once 'library2/' . $classname . '.php';
}

spl_autoload_register('loaderLibOne');
spl_autoload_register('loaderLibTwo');

$test = new TestClass();
$test->testExecution();

$another = new AnotherClass();
$another->testExecution();