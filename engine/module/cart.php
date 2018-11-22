<?php
if (!isset($_SESSION['user_id'])) {
    require_once LIB_DIR . 'module/' . 'catalog_error.php';
} else {
    session_start();
    $userId = $_SESSION['user_id'];
    $cartForThisUser = getAssocResult("select * from cart where userid = '$userId'");
    $productsInCart = [];
    if (is_array($cartForThisUser)) {
        foreach ($cartForThisUser as $products) {
            $productsInCart[] = [
                'id' => $products['productid'],
                'quantity' => $products['productquant'],
                'price' => getAssocResult("select * from products where id = " . $products['productid'])[0]['price'],
                'name' => getAssocResult("select * from products where id = " . $products['productid'])[0]['name'],
                'total' => (int)$products['productquant'] * (int)getAssocResult("select * from products where id = " . $products['productid'])[0]['price']
            ];
        }
    }

    $totalCart = 0;
    foreach ($productsInCart as $totalForOne){
        $totalCart+= (int)$totalForOne['total'];
    }

    $vars = [
        'title' => 'Корзина',
        'products' => $productsInCart,
        'totalCart' => $totalCart
    ];

    require_once TPL_DIR . 'cart.php';
    exit;
}