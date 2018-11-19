<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование отзыва</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1><?= $vars['title'] ?></h1>
<div class="editreview">
    <form action = "index_admin.php?module=reviews_admin&operation=updated" method = "post">
        <input type = "hidden" name = "id" value = "<?= $reviewInfo['id'] ?>">
        Автор
        <input type = "text" name = "author" value = "<?= $reviewInfo['author'] ?>">
        Текст
        <textarea name = "text" rows = "5" ><?= $reviewInfo['text'] ?></textarea>
        <input type="submit" value = "Готово">
    </form>
</div>
<a href="/index_admin.php?module=reviews_admin" class = "lonely_link">Вернуться к отзывам</a>

</body>
</html>

