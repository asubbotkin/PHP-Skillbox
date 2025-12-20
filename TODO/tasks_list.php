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
    protected function saveList() : void
    {
        $jsonContent = json_encode($this->tasks);
        file_put_contents(self::SAVE_FILE_NAME, $jsonContent);
    }

    //Изменить статус задачи
    public function changeTaskStatus($id) : void
    {
        if(isset($this->tasks[$id])){
            $this->tasks[$id]['done'] =  !$this->tasks[$id]['done'];
        }
        $this->saveList();
    }
    //Удалить задачу
    public function removeTask($id) : void
    {
        if(isset($this->tasks[$id])){
            unset($this->tasks[$id]);
        }

        $this->saveList();
    }

    //Добавить задачу
    public function addNewTask($title) : void
    {
        $this->tasks[] = ['title' => $title, 'done' => false ];

        $this->saveList();
    }

    //Вернуть список задач
    public function getTasks() : array
    {
        return $this->tasks;
    }
}

$tasksList = new TasksList();

if(isset($_GET['change_status']) && isset($_GET['id'])){
    $tasksList->changeTaskStatus($_GET['id']);
} elseif (isset($_GET['remove_task']) && isset($_GET['id'])) {
    $tasksList->removeTask($_GET['id']);
} elseif (isset($_POST['task_name'])){
    $tasksList->addNewTask($_POST['task_name']);
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .tasks-table{
            padding: 10px;
            background-color: rgba(250, 255, 177, 0.64);
            margin-bottom: 50px;
        }
        .tasks-table td {
            padding: 8px;
            border-bottom: 1px dotted black;
        }
        .task-name {
            min-width: 270px;
        }
        .checked {
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Список моих задач: </h1>
    <table class="tasks-table" >
        <tbody>


        <?php foreach ($tasksList->getTasks() as $key=>$task) { ?>
            <tr>
                <td>
                    <input class="checked"
                           type="checkbox" <?php echo $task['done'] ? 'checked' : ''; ?>
                           onchange="window.location.href='/welcome/TODO/tasks_list.php?change_status&id=<?php echo $key; ?>';">
                </td>
                <td class="task-name"><?php echo $task['title'];?></td>
                <td><a href="/welcome/TODO/tasks_list.php?remove_task&id=<?php echo $key; ?>"><input type="button" value="X"></a></td>
            </tr>
        <?php  } ?>
<!--        <tr>-->
<!--            <td>-->
<!--                <input type="checkbox" checked>-->
<!--            </td>-->
<!--            <td class="task-name">Пример задачи</td>-->
<!--            <td>-->
<!--                <a href="#"><input type="button" value="X"></a>-->
<!--            </td>-->
<!--        </tr>-->
       </tbody>
    </table>
    <form method="post" action="tasks_list.php">
        <label>Добавить задачу: </label>
        <input type="text" size="20" name="task_name">
        <input type="submit" value="Добавить">
    </form>
</div>
</body>
</html>
