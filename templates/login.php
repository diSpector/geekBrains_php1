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

<form action="index.php?module=login" method = "post">
    <h3>Форма входа</h3>
    <p class = "error_text"><?= $vars['error'] ?></p>
    Логин:
    <input type="text" name="username">
    Пароль:
    <input type="text" name="userpass">
    <p>Еще нет аккаунта? <a href="index.php?module=register">Зарегистрироваться</a></p>
    <input type="submit" value="Войти">
</form>
<a href="/" class = "lonely_link">На Главную</a>
</body>
</html>


