<?php

$productID = (int)$vars['productID'];
$productData = getAssocResult("select * from images where id = '$productID' ");
// если запрос вернул пустой массив, вернуть страницу ошибки, иначе страницу с товаром
$page = empty($productData) ? 'error.php' : 'product.php';
require_once TPL_DIR. $page;

