<?php

class TasksList {
    //Путь к файлу, где будет храниться список задач
    const SAVE_FILE_NAME = 'tasks-list.json';

    //Список задач
    private $tasks = [];

    public function __construct()
    {
        //При создании объекта списка - загружаем задачи из файла
        if(file_exists(self::SAVE_FILE_NAME)){
            if($jsonContent = json_decode(file_get_contents(self::SAVE_FILE_NAME), JSON_OBJECT_AS_ARRAY)){
                $this->tasks = $jsonContent;
            }
        }

    }

    //Сохранить список задач в файл
    protected function saveList()
    {
        $jsonContent = json_encode($this->tasks);
        file_put_contents(self::SAVE_FILE_NAME, $jsonContent);
    }

    //Изменить статус задачи
    public function changeTaskStatus($id)
    {
        if(isset($this->tasks[$id])){
            $this->tasks[$id]['done'] =  ! $this->tasks[$id]['done'];
        }
        $this->saveList();
    }
    //Удалить задачу
    public function removeTask($id)
    {
        if(isset($this->tasks[$id])){
            unset($this->tasks[$id]);
        }

        $this->saveList();
    }

    //Добавить задачу
    public function addNewTasks($title)
    {
        $this->tasks[] = ['title' => $title, 'done' => false ];

        $this->saveList();
    }

    //Вернуть список задач
    public function getTasks()
    {
        return $this->tasks;
    }
}