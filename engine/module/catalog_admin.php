<?php

if (isset($_GET['operation'])){
    $operation = escapeString($_GET['operation']);
    switch($operation){
        case 'updated':
            if(isset($_POST['id'])){
                $id = escapeString($_POST['id']);
                $newName = escapeString($_POST['name']);
                $newDesc = escapeString($_POST['description']);
                updateOneProduct($id, $newName, $newDesc);
                $products = readFromProducts();
                $vars = [
                    'title' => 'Выберите товар для редактирования',
                    'products' => $products
                ];
                require_once TPL_DIR. 'catalog_admin.php';
            }
            break;
        case 'add':
            require_once LIB_DIR. 'module/' .'addproduct.php';
            break;
        case 'added':
            if(isset($_POST['name']) && isset($_POST['description'])){
                $newProductName = escapeString($_POST['name']);
                $newProductDesc = escapeString($_POST['description']);
                addNewProduct($newProductName, $newProductDesc);
                $products = readFromProducts();
                $vars = [
                    'title' => 'Выберите товар для редактирования',
                    'products' => $products
                ];
                require_once TPL_DIR. 'catalog_admin.php';
            }
        case 'delete':
            if(isset($_GET['id'])){
                $id = escapeString($_GET['id']);
                deleteOneProduct($id);
                $products = readFromProducts();
                $vars = [
                    'title' => 'Выберите товар для редактирования',
                    'products' => $products
                ];
                require_once TPL_DIR. 'catalog_admin.php';
            }
        case 'file':
            $fileName = basename($_FILES['userfile']['name']);
            $id = escapeString($_POST['id']);
            $uploaddir = WWW_ROOT . '/img/';
            $uploadfile = $uploaddir . $fileName;
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                $vars = [
                    'filename' => $fileName,
                    'id' => $_POST['id']
                ];
                require_once LIB_DIR. 'module/' .'image_upload.php';
            } else {
//                echo "Возможная атака с помощью файловой загрузки!\n";
            }
            break;
        case 'filenew':
            $fileName = basename($_FILES['userfile']['name']);
            $uploaddir = WWW_ROOT . '/img/';
            $uploadfile = $uploaddir . $fileName;
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                $vars = [
                    'filename' => $fileName,
                    'new' => true
                ];
                require_once LIB_DIR. 'module/' .'image_upload.php';
            } else {
//                echo "Возможная атака с помощью файловой загрузки!\n";
            }
            break;
    }
} else {
    $products = readFromProducts();

// если есть значение ID товара, то надо передать управление модулю карточки товара
    if (isset($_GET['productID'])){
        $productID = escapeString($_GET['productID']);
        $vars = ['productID' => $productID];
        require_once LIB_DIR. 'module/' .'product_admin_edit.php';

    } else { // если нет, просто вывести каталог
        $vars = [
            'title' => 'Выберите товар для редактирования',
            'products' => $products
        ];
        require_once TPL_DIR. 'catalog_admin.php';
    }

}

