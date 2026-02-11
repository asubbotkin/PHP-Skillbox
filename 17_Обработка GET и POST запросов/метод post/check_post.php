<?php

    var_dump($_POST);
    if (isset($_POST['title']) && isset($_POST['author']) && isset($_POST['content'])) {
        $article = [
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'content' => $_POST['content']
        ];
        file_put_contents('article.json', json_encode($article, JSON_PRETTY_PRINT));
    } else {

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post article</title>
</head>
<body>
    <form name="post_article" method="POST" action="check_post.php">
        <label>Заголовок: <input type="text" name="title"></label><br><br>
        <label>Автор: <input type="text" name="author"></label><br><br>
        <label>Текст статьи: <textarea type="text" name="content"></textarea></label><br><br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>

<?php } ?>