<?php
if ($vars['new'] === true){
    executeQuery("insert into products (addr) values ('$fileName')");
    $maxId = getAssocResult("select max(id) from products")[0]['max(id)'];
    var_dump($maxId);
    $productData = readOneProduct($maxId);

    require_once TPL_DIR. 'product_admin_edit.php';

} else {
    executeQuery("update products set addr = '$fileName' where id = $id");
    $productData = readOneProduct($id);
    require_once TPL_DIR. 'product_admin_edit.php';
}
