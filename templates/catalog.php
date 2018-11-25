<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Каталог товаров</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1><?= $vars['title'] ?></h1>
<a href="index.php?cart=true" class = "cart_link">Корзина</a>
<div class="gallery">
    <?php foreach ($vars['products'] as $product): ?>
        <a href='/?module=catalog&productID=<?= $product['id'] ?>'>
            <div class="product_card">
                <img src= <?= IMG_DIR . '/' . $product['addr'] ?> width = 240 height = 136>
                <div class="product_title"><?=  $product['name'] ?></div>
                <div class="product_price"><?=  $product['price'] ?> рублей</div>
        </a>
                <div class="btn_buy" data-id="<?= $product['id'] ?>" onclick="buy(<?= $product['id'] ?>)">Купить</div>
            </div>

    <?php endforeach; ?>
</div>
<a href="\" class = "lonely_link">На Главную</a>
<script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>
<script src = "js/script.js"></script>
</body>
</html>

