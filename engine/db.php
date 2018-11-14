<?php


function getAssocResult($sql){
    $result = executeQuery($sql);

    $arrayResult = array();
    while($row = mysqli_fetch_assoc($result))
        $arrayResult[] = $row;

    return $arrayResult;
}

function executeQuery($sql){
    $db = connect();
    $result = mysqli_query($db, $sql);
    mysqli_close($db);
    return $result;
}

function connect() {
    $db = mysqli_connect(HOST, USER, PASS, DB);
    // по умолчанию кодировка latin, далее устанавливаем ее в UTF8, чтобы корректно отображалась кириллица
    mysqli_set_charset ( $db , 'UTF8' );
    if (!$db) {
        echo 'Ошибка: Невозможно установить соединение с MySQL.'. PHP_EOL;
        exit;
    }

    return $db;
}
