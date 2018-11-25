<?php

$productID = (int)$vars['productID'];
$productData = getAssocResult("select * from products where id = '$productID' ");
// если запрос вернул пустой массив, вернуть страницу ошибки, иначе страницу с товаром
$page = empty($productData) ? 'error.php' : 'product.php';
$productViews = (int)++$productData[0]['views'];
$productID = (int)$productData[0]['id'];
executeQuery("UPDATE products SET views = " . $productViews .  " WHERE id = " . $productID );
require_once TPL_DIR. $page;

