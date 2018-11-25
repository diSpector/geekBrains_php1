<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Корзина</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1><?= $vars['title'] ?></h1>
<a href="index.php?cart=true" class="cart_link">Корзина</a>
<div class="cart">

    <?php foreach ($vars['products'] as $product): ?>
        <div class="cart_product_card">
            <!--            <img src= --><? //= IMG_DIR . '/' . $product['addr'] ?><!-- width = 240 height = 136>-->
            <div class="cart_product_title"><?= $product['name'] ?></div>
            <div class="cart_product_price"><?= $product['price'] ?> рублей</div>
            <div class="cart_product_quantity"><?= $product['quantity'] ?> </div>
            <div class="cart_product_quantity">Итого: <?= $product['total'] ?> рублей</div>
            <div class="btn_buy" data-id="<?= $product['id'] ?>" onclick="buy(<?= $product['id'] ?>)">Добавить</div>
            <div class="btn_delete_good" data-id="<?= $product['id'] ?>" onclick="deleteGood(<?= $product['id'] ?>)">Удалить</div>
        </div>
    <?php endforeach; ?>
    Итого: <?= $vars['totalCart']?> рублей
</div>
<a href="\" class="lonely_link">На Главную</a>
<script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>
<script src="js/script.js"></script>
</body>
</html>

