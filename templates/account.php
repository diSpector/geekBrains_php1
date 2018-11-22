<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $vars['title']?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
<h1><?= $vars['title'] ?></h1>
<p>Привет, <?= $vars['realname'] ?></p>
    <p>Логин - <?= $vars['username'] ?></p>
    <a href = "index.php?module=logout">Выйти</a><br>
    <a href = "index.php">Главная</a>
</div>
</div>
</body>
</html>

