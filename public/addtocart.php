<?php
require_once '../config/config.php';
require_once '../engine/db.php';

session_start();
if(isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
    $productId = escapeString($_POST['good_id']);
    $quantity = getAssocResult("select * from cart where userid = '$userId' and productid = '$productId'")[0]['productquant'];
    if(!$quantity){
        $quantity = 1;
        addGoodForUser($userId, $productId);
    } else {
        $newQuantity = ++$quantity;
        updateGoodForUser($userId, $productId, $newQuantity);
    }

    $response = ['userid' => $userId, 'productId' => $productId, 'quantity' => $quantity];
    echo json_encode($response);
}
