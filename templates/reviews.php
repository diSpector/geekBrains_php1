<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Отзывы</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1><?= $vars['title'] ?></h1>
<div class="reviews">
    <?php foreach ($vars['reviews'] as $review): ?>
        <div class="review">
            <div class="reviewText"><?= $review['text']?></div>
            <div class="reviewAuthor"><?= $review['author']?></div>
        </div>
    <?php endforeach; ?>
    <a href='/?module=reviews&addreview=true'><div class="btn_add">Добавить отзыв</div></a>
    <a href="/">На Главную</a>
</div>
</body>
</html>

