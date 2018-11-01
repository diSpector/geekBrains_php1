<?php
// Задание 4.
// Используя имеющийся HTML шаблон, сделать так, чтобы главная страница генерировалась
// через PHP. Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и
// текущий год генерировались в блоке контента из созданных переменных.

$h1 = 'Title with PHP';
$title = 'Title with PHP variable';
$dateYear = '01.01.2018 from PHP';

echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" http-equiv=\"content-type\">
    <title>$title</title>
</head>
<body>
<h1>$h1</h1>
<ul>
    <li><a href=\"#\">home</a></li>
    <li><a href=\"#\">archive</a></li>
    <li><a href=\"#\">contact</a></li>
</ul>
<div class=\"post\">
    <div class=\"detail\">
        <h2><a href=\"#\">Nunc commodo euismod massa quis vestibulum</a></h2>
        <p class=\"info\">posted 3 hours ago in <a href=\"#\">general</a></p>
    </div>
    <div class=\"body\">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
    </div>
    <div class=\"x\"></div>
</div>
<div class=\"col\">
    <h3><a href=\"#\">Ut enim risus rhoncus</a></h3>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
    <p>&not; <a href=\"#\">read more</a></p>
</div>
<div class=\"col\">
    <h3><a href=\"#\">Ut enim risus rhoncus</a></h3>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
    <p>&not; <a href=\"#\">read more</a></p>
</div>
<div class=\"col last\">
    <h3><a href=\"#\">Ut enim risus rhoncus</a></h3>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
    <p>&not; <a href=\"#\">read more</a></p>
</div>
<div id=\"footer\">
    <p>Copyright &copy; <em>mini</em> &middot; Design: <a href=\"#\">...</a><span>$dateYear</span> </p>
</div>
</body>
</html>";
