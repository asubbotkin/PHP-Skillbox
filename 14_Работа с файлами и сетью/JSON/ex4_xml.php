<?php



$data = json_decode(file_get_contents('tasks-list.json'), true);
//print_r($data) . PHP_EOL;

//for($i = 0; $i < count($data); $i++)
//{
    foreach ($data as $key => $value)
    {
        if ($key == "data")
        {
            echo 'What is here??? ' . PHP_EOL;
            print_r($key);
            echo 'What is here??? ' . $value . PHP_EOL;
//            try {
//                $data[$i][$key] = new DateTime($value);
//            } catch (Exception $e) {

        }
    }
//}

//$tz   = new DateTimeZone($data['timezone']);
//$date = new DateTime($data['created_at'], $tz);


$now = new DateTime();
echo $now->format('Y-m-d');

$before = new DateTime();

