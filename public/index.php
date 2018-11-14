<?php

require_once '../config/config.php';

// загрузка модуля по умолчанию
$module = 'index';

if(isset($_GET['module'])) {
    $module = trim(str_replace(['/', '\\', '.'], ['', '', ''], $_GET['module']));
}

if($module === 'product') {
    $productID = trim(str_replace(['/', '\\', '.'], ['', '', ''], $_GET['productID']));
    $vars = ['productID' => $productID];
}

require_once LIB_DIR. 'module/'.$module.'.php';