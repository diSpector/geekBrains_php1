<?php
if (!isset($_SESSION['user_id'])){
    require_once LIB_DIR. 'module/' .'catalog_error.php';
} else {
    // получить массив со строками из таблицы images в порядке убывания количества просмотров
    $products = getAssocResult("select * from products order by views desc");

// если есть значение ID товара, то надо передать управление модулю карточки товара
    if (isset($_GET['productID'])){
        $productID = escapeString($_GET['productID']);
        $vars = ['productID' => $productID];
        require_once LIB_DIR. 'module/' .'product.php';

    } else { // если нет, просто вывести каталог
        $vars = [
            'title' => 'Каталог товаров',
            'products' => $products
        ];
        require_once TPL_DIR. 'catalog.php';
    }
}


