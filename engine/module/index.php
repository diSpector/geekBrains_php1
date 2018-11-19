<?php

// получить массив модулей из таблицы modules
$allModules = getAssocResult('select * from modules');

$mode = escapeString($_GET['mode']);

if($mode === 'admin'){
    $vars = [
        'title' => 'Выберите модуль для редактирования',
        'modules' => $allModules
    ];
    require_once TPL_DIR. 'index_admin.php';
} else {
    $vars = [
        'title' => 'Главная',
        'modules' => $allModules
    ];
    require_once TPL_DIR. 'index.php';
}


