<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование отзывов</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1><?= $vars['title'] ?></h1>
<div class="reviews">
<!--    <div class="reviews">-->
        <?php foreach ($vars['reviews'] as $review): ?>
            <a href="index_admin.php?module=reviews_admin&operation=edit&id= <?= $review['id'] ?>" class = "review_link">
                <div class="review_admin">
                    <div class="reviewText"><?= $review['text'] ?></div>
                    <div class="reviewAuthor"><?= $review['author'] ?></div>
                </div>
            </a>
            <a href = "index_admin.php?module=reviews_admin&operation=delete&id= <?= $review['id'] ?>" class="btn_delete">Удалить</a>


        <?php endforeach; ?>
        <a href='/index_admin.php'>Вернуться в Админ панель</a>
<!--    </div>-->
</div>

</body>
</html>

