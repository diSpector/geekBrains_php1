<?php

require_once '../config/config.php';

session_start();

//$_SESSION['user'] = 'root';

// формируем массив с содержимым из таблицы модулей
$allModules = getAssocResult('select name from modules');

// собираем массив из названий модулей
foreach ($allModules as $module){
    $allModulesNames[] = $module['name'];
}

// загрузка модуля по умолчанию
$module = 'index';

// если в гет-запросе передана переменная module
if(isset($_GET['module'])) {
    $moduleGet = escapeString($_GET['module']); // экранирование строки
    if(in_array($moduleGet, $allModulesNames, true) || $moduleGet === 'login' || $moduleGet === 'logout' || $moduleGet === 'register'){ // если модуль есть в массиве модулей из базы, передать управление ему
        $module = $moduleGet;
    } else { // если нет - передать управление главному скрипту
        $module = 'index';
    }
}

if(isset($_GET['cart']) && ($_GET['cart'] === 'true')){
    require_once LIB_DIR. 'module/'. 'cart.php';
}

require_once LIB_DIR. 'module/'.$module.'.php';