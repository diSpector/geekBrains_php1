<?php

//var_dump($_SESSION);

// получить массив модулей из таблицы modules
$allModules = getAssocResult('select * from modules');
//session_start();
//$_SESSION = [];
//session_destroy();
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
    if(isset($_SESSION['user_id'])){
        $vars['inout'] = 'Выход';
        $vars['link'] = 'logout';
    } else {
        $vars['inout'] = 'Вход';
        $vars['link'] = 'login';
    }
    require_once TPL_DIR. 'index.php';
}


