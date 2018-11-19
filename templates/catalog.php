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
    <?php foreach ($vars['products'] as $product): ?>
        <a href='/?module=catalog&productID=<?= $product['id'] ?>'>
            <div class="product_card">
                <img src= <?= IMG_DIR . '/' . $product['addr'] ?> width = 240 height = 136>
                <div class="product_title"><?=  $product['name'] ?></div>
            </div>
        </a>
    <?php endforeach; ?>
</div>
<a href="\" class = "lonely_link">На Главную</a>

</body>
</html>

