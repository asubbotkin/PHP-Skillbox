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