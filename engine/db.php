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

// экранирование строки
function escapeString($str){
    return mysqli_real_escape_string(connect(),(string)htmlspecialchars(strip_tags($str)));
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

// прочитать все товары
function readFromProducts(){
    return getAssocResult('select * from products');
}

// прочитать один товар
function readOneProduct($id){
    return getAssocResult("select * from products where id =$id")[0];
}

// обновить товар
function updateOneProduct($id, $name, $description){
    $query1 = executeQuery("UPDATE products SET name = '$name' WHERE id = " . $id );
    $query2 = executeQuery("UPDATE products SET description = '$description' WHERE id = " . $id );
    return ($query1 && $query2);
}

function addNewProduct($name, $description){
    return executeQuery("insert into products (name, description) values ('$name', '$description')");
}

function deleteOneProduct($id){
    return executeQuery("delete from products where id = $id");
}

// создать отзыв
function createOneReview($author, $text){
    return executeQuery("insert into reviews (author, text) values ('$author', '$text')");
}

// прочитать все отзывы
function readFromReviews(){
    return getAssocResult('select * from reviews');
}

// прочитать один отзыв
function readOneReview($id){
    return getAssocResult("select * from reviews where id =$id")[0];
}

// удалить отзыв
function deleteOneReview($id){
    return executeQuery("delete from reviews where id = $id");
//    executeQuery("delete from reviews where id = $id");
//    return (mysqli_affected_rows(connect()) > 0);

}

// обновить отзыв
function updateOneReview($id, $author, $text){
    $query1 = executeQuery("UPDATE reviews SET author = '$author' WHERE id = " . $id );
    $query2 = executeQuery("UPDATE reviews SET text = '$text' WHERE id = " . $id );
    return ($query1 && $query2);
}