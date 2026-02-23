<?php

    switch ($_SERVER['REQUEST_URI'])
    {
        case '/welcome/18_RESTfull_API/Routing/books':
            include_once 'BookController.php';
            $controller = new BookController();
            echo $controller->list();
            break;
        case '/welcome/18_RESTfull_API/Routing/users':
            include_once 'UserController.php';
            $controller = new UserController();
            echo $controller->list();
            break;
        default:
            http_response_code(403);
    }