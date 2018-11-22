<?php
require_once '../config/config.php';
require_once '../engine/db.php';

session_start();
if(isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
    $productId = escapeString($_POST['good_id']);
    deleteGoodForUser($userId, $productId);

    $response = ['userid' => $userId, 'productId' => $productId, 'operation' => 'delete'];
    echo json_encode($response);
}