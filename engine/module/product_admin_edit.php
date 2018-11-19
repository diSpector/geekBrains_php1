<?php

$productID = (int)$vars['productID'];
$productData = readOneProduct($productID);
$vars = [
    'title' => 'Редактирование товара',
    'productData' => $productData
];
require_once TPL_DIR. 'product_admin_edit.php';