<?php

class User {
    public $email;
    public $nickname;
    public $name;
    public $age;
    public $id;

    /**
     * @param $email
     * @param $nickname
     * @param $name
     * @param $age
     */
    public function __construct($email, $nickname, $name, $age)
    {
        $this->email = $email;
        $this->nickname = $nickname;
        $this->name = $name;
        $this->age = $age;
        $this->id = rand(1, 100);
    }
}

class Storage
{
    const FILE_PATH = 'user.json';
    public array $objectsList = [];

    public function __construct()
    {
        $this->read();
    }

    public function store () : void
    {
        $json = json_encode($this->objectsList);
        file_put_contents(self::FILE_PATH, $json);
    }

    public function read() : void
    {
        if (file_exists(self::FILE_PATH))
        {
            $this->objectsList = json_decode(file_get_contents(self::FILE_PATH), true);
        }

    }
}

class UserStorage extends Storage
{
    public function addUser () : void
    {
        $user = new User($_POST['email'], $_POST['nickname'], $_POST['name'], $_POST['age']);
        $this->objectsList[] = $user;
        $this->store();
    }

    public function deleteUser ($id) : void
    {
        $i = intval($id);
        foreach ($this->objectsList as $index => $user)
        {
            if ($user['id'] === intval($id))
            {
                unset($this->objectsList[$index]);
                $this->store();
                break;
            }
        }
    }

    public function updateUser () : void
    {
        foreach ($this->objectsList as $key => $user)
            if ($user->id === $_POST['id'])
            {
                $this->objectsList['key']->name = $_POST['name'];
                $this->objectsList['key']->nickname = $_POST['nickname'];
                $this->objectsList['key']->email = $_POST['email'];
                $this->objectsList['key']->age = $_POST['age'];
                $this->store();
            }
    }

    public function getUser ($id)
    {
        foreach ($this->objectsList as $key => $user)
            if ($user->id === $id)
            {
                return json_encode($user);
            } else
            {
                return null;
            }
    }
    public function getUsers ()
    {
        return json_encode($this->objectsList);

    }
}

$userStorage = new UserStorage();

//  CRUD        HTTP

// C  (CREATE)   - POST /user.php
// R  (READ)     - GET  /user.php?id=1
// U  (UPDATE)   - PATCH /user.php?id=1
// D  (DELETE)   - DELETE /user.php?id=1
// RA (READ ALL) - GET /user.php

switch ($_SERVER['REQUEST_METHOD'])
{
    case 'POST':
        $userStorage->addUser();
        break;
    case 'GET':
        if (isset($_GET['id']))
        {
            $userStorage->getUser($_GET['id']);
        } else
        {
            $userStorage->getUsers();
        }
        break;
    case 'PUT':
        $userStorage->updateUser($_GET['id']);
        break;
    case 'DELETE':
        $userStorage->deleteUser($_GET['id']);
        break;
}














