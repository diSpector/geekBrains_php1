<?php

// получить массив со строками из таблицы images в порядке убывания количества просмотров
$images = getAssocResult("select * from images order by views desc");

$vars = [
    'title' => 'Галерея',
    'images' => $images
];

require_once TPL_DIR. 'index.php';


