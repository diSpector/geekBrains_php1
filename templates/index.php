<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1><?= $vars['title'] ?></h1>
<div class="index">
    <?php foreach ($vars['modules'] as $module): ?>
        <a href='/?module=<?=$module['name'] ?>'>
            <?= $module['title'] ?>
        </a>
    <?php endforeach; ?>
    <a href = "?module=<?=$vars['link'] ?>"><?=$vars['inout'] ?></a>
    <a href = "index_admin.php">Административная панель</a>
</div>

</body>
</html>

