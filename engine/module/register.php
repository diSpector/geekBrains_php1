<?php
$vars = ['title' => 'Регистрация'];

if(isset($_POST['new_username']) && isset($_POST['new_username']) && isset($_POST['new_realname'])){
    $newUserName = escapeString($_POST['new_username']);
    $newRealName = escapeString($_POST['new_realname']);
    $newUserPass = escapeString($_POST['new_userpass']);
    if(getAssocResult("select * from users where name = '$newUserName'")){
        $vars['error'] = 'Пользователь с таким логином уже существует';
        require_once TPL_DIR . 'register.php';
    } else {
        if (addNewUser($newUserName, $newUserPass, $newRealName)){
            $newUserData = getAssocResult("select * from users where name = '$newUserName'")[0];
            $newUserId = $newUserData['id'];
            session_start();
            $_SESSION['user_id'] = $newUserId;
            $_SESSION['username'] = $newUserName;
            header('Location: account.php');
            exit;
        } else {
            $vars['error'] = 'Не удалось создать нового пользователя';
            require_once TPL_DIR . 'register.php';
        }
    }

} else {
    require_once TPL_DIR . 'register.php';
    exit;

}
require_once TPL_DIR . 'register.php';