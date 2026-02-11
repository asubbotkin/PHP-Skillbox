<?php

    var_dump($_FILES);

    if (isset($_FILES['photo'])) {
        try {
            move_uploaded_file($_FILES['photo']['tmp_name'], $_FILES['photo']['name']);
            ?>
                <img src="<?= $_FILES['photo']['name'] ?>" alt="image">
        <?php 
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload file</title>
</head>
<body>
<form name="post_article" method="POST" action="upload-file.php" enctype="multipart/form-data">
    <label>Выберите файл: <input type="file" name="photo"></label><br><br>
    <input type="submit" value="Отправить">
</form>
</body>
</html>
