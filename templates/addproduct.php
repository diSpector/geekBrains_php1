<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление товара</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1><?= $vars['title'] ?></h1>
<div class="editproduct">
    Фото товара<br>
<!--    <img src = --><?//= IMG_DIR . '/' . $productData['addr'] ?><!-- width =740 height = 460>-->
    <form enctype="multipart/form-data" action="index_admin.php?module=catalog_admin&operation=filenew" method="POST">
<!--        <input type = "hidden" name = "id" value = "--><?//= $productData['id'] ?><!--">-->
        Загрузить картинку: <input name="userfile" type="file" >
        <input type="submit" value="Загрузить файл">
    </form>
<!--    <form action = "index_admin.php?module=catalog_admin&operation=added" method = "post">-->
<!--        Название товара-->
<!--        <input type = "text" name = "name">-->
<!--        Описание товара-->
<!--        <textarea name = "description" rows = "5" ></textarea>-->
<!--        <input type="submit" value = "Готово">-->
<!--    </form>-->
</div>
<a href="/index_admin.php?module=catalog_admin" class = "lonely_link">Вернуться в каталог</a>

</body>
</html>
