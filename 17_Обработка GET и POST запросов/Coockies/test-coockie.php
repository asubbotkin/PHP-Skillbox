<?php

    if(isset($_POST["username"]) && !empty($_POST["username"]))
    {
        setcookie('form-sent', '1');
    }

    if(isset($_COOKIE['form-sent']) && $_COOKIE['form-sent'] == 1)
    {
        echo 'Форма уже отправлена';
    } else
    {
?>

<html lang="ru">
<form method="post" action="test-coockie.php" >
    <label>Имя пользователя: <input type="text" name="username"></label>
    <input type="submit" value="Отправить">
</form>
</html>
<?php
    }
?>