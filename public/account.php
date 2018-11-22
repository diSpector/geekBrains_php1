<?php
require_once '../config/config.php';

session_start();
$vars = ['title' => 'Личный кабинет',
    ];
if (isset($_SESSION['user_id'])){
    $id = $_SESSION['user_id'];
    $userName = $_SESSION['username'];
    $realName = getAssocResult("select * from users where id = '$id'")[0]['realname'];
    $vars['username'] = $userName;
    $vars['realname'] = $realName;

    require_once TPL_DIR . 'account.php';
} else {
    header("Location: index.php");
}