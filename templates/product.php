<?php
$productViews = (int)++$productData[0]['views'];
$productID = (int)$productData[0]['id'];
executeQuery("UPDATE images SET views = " . $productViews .  " WHERE id = " . $productID ) ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="css/style.css">
<body>
<div class="product">
    <h1><?= $productData[0]['name'] ?></h1>
    <img src = <?= IMG_DIR . '/' . $productData[0]['addr'] ?> >
    <p>Просмотры: <?= $productViews ?></p>
    <a href="/">На Главную</a>
</div>
</body>
</html>

