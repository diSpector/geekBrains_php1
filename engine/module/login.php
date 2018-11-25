<?php

if (isset($_POST['username']) && (isset($_POST['userpass']))){
    $userName = escapeString($_POST['username']);
    $userPass = escapeString($_POST['userpass']);
    $userQuery = getAssocResult("select * from users where name = '$userName' and password = '$userPass'");
    if (!$userQuery){
        $vars = ['title' => 'Вход',
            'error' => 'Неверные логин или пароль
            '];
        require_once TPL_DIR . 'login.php';
    } else {
        session_start();
        $_SESSION['user_id'] = $userQuery[0]['id'];
        $_SESSION['username'] = $userQuery[0]['name'];
//        var_dump($_SESSION);
        header('Location: account.php');
        exit;
    }
} else {
    $vars = ['title' => 'Вход'];
    require_once TPL_DIR . 'login.php';
}

