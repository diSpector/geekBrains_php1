<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1><?= $vars['title'] ?></h1>
<div class="addreview">
    <form action = "?module=reviews&ready=ok" method = "post">
        Автор
        <input type = "text" name = "author">
        Текст
        <textarea name = "text" rows = "5" placeholder="Напишите свой отзыв"></textarea>
        <input type="submit" value = "Разместить">
    </form>
    <a href="\?module=reviews">Вернуться к отзывам</a>
</div>
</body>
</html>


