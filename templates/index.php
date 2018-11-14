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
<div class="gallery">
    <?php foreach ($vars['images'] as $image): ?>
        <a href='/?module=product&productID=<?= $image['id'] ?>'>
            <img src= <?= IMG_DIR . '/' . $image['addr'] ?> width = 240>
        </a>
    <?php endforeach; ?>
</div>
</body>
</html>

