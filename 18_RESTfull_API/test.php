<?php

if (file_exists('user.json'))
{
    $json = file_get_contents('user.json');
    $users = json_decode($json, true);
}

foreach ($users as $index => $user)
{
    foreach ($user as $key => $value)
        if ($key == 'id') echo $key . ' => ' . $value . PHP_EOL;
}

//print_r($users);


//.htaccess
//
//AllowOverride All
//RewriteEngine On
//RewriteCond %{REQUEST_FILENAME} ! -f
//RewriteRule ^(.*)$ /router.php [QSA, L]

// Remote debug xdebug settings in php.ini
//
//zend_extension=xdebug
//;zend_extension="C:\xampp\php\ext\php-xdebug.dll"
//xdebug.mode=debug
//xdebug.start_with_request = yes
//xdebug.remote_host = localhost
//xdebug.remote_port = 9003
//xdebug.idekey = PHPSTORM

//     sudo a2enmod rewrite