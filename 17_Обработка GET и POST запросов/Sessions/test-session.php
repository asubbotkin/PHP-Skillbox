<?php

    session_start();

    if(!isset($_SESSION['start']))
    {
        $_SESSION['start'] = 0;
    } else
    {
        if(isset($_POST['form-checker']))
        {
            $_SESSION['start']++;
        }
    }

    $counter = $_SESSION['start'];
//    echo "$counter <br>";

    ?>

<html lang="ru">
<body>
<p>Форма отправлялась <?= $counter ?> раз</p>
    <form name="test" method="post" action="test-session.php">
        <input name="form-checker" type="hidden" value="1">
        <input type="submit" value="Отправить">
    </form>
</body>
</html>
