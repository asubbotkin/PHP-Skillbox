<?php

class ToDo
{
    private $tasks;

    public function __construct($fileName = '')
    {
        if(file_exists($fileName))
        {
            $fileContent = file_get_contents($fileName);
            $this->tasks = json_decode($fileContent, true);
            print_r($this->tasks);
            // Параметр true нужен для того, чтобы json_decode вернула
            // не строку, а ассоциативный массив
        }
    }
    public function getTasks()
    {
        return $this->tasks;
    }
    public function createTask($taskName) : void
    {
        $this->tasks[] = ['title' => $taskName, 'done' => false, 'date' => new DateTime()];
    }

    public function removeTask($taskNumber) : void
    {
        unset($this->tasks[$taskNumber]);
    }

    public function taskDone($taskNumber) : void
    {
        $this->tasks[$taskNumber]['done'] = true;
    }

    public function saveToJSON($fileName) : void
    {
        print_r($this->tasks);
        $fileContent = json_encode($this->tasks);
        file_put_contents($fileName, $fileContent);
    }

    public function displayTasks() : void
    {
        foreach ($this->tasks as $key=>$task) {
            echo 'Задача №: ' . $key . PHP_EOL;
            echo 'Заголовок: ' . $task['title'] . PHP_EOL;
            $done = $task['done'] ? 'да' : 'нет';
            echo 'Задача выполнена: ' .$done . PHP_EOL;
            $date = $task['date']['date'];
            echo 'Дата постановки задачи: ' . $date . PHP_EOL;
        }
    }
}

$tasksList1 = new ToDo();
$tasksList1->createTask('To do homework');
$tasksList1->createTask('Drink coffee');
$tasksList1->createTask('To do homework');
echo 'До записи в JSON' . PHP_EOL;
$tasksList1->saveToJSON('tasks-list.json');
echo 'После загрузки из JSON' . PHP_EOL;
$tasksList2 = new ToDo('tasks-list.json');

//$tasksList2->displayTasks();
//$tasksList1->createTask('Выгулять собаку');

//$tasksList1->displayTasks();

//$tasksList2->taskDone(0);
//$tasksList2->removeTask(1);
//
//print_r($tasksList2->getTasks());