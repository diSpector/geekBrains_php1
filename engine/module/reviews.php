<?php

// если в ссылке передана переменная $ready (нажата кнопка "Разместить")
if (isset($_GET['ready'])){
    $reviewReady = escapeString($_GET['ready']); // экранирование
    if ($reviewReady === 'ok'){
        $reviewAuthor = escapeString($_POST['author']);
        $reviewText = escapeString($_POST['text']);
        createOneReview($reviewAuthor, $reviewText); // создать отзыв
    }
}

// получить все отзывы
$allReviews= readFromReviews();
$vars = [
    'title' => 'Отзывы',
    'reviews' => $allReviews
];

// если в ссылке передана переменная addreview (нажать кнопка "Добавить отзыв")
if (isset($_GET['addreview'])){
    $addreview = escapeString($_GET['addreview']);
    // если $addreview === 'true', подключается шаблон создания отзыва, иначе - шаблон всех отзывов
    $addreview === 'true' ? require_once LIB_DIR. 'module/'.'addreview.php': require_once TPL_DIR. 'reviews.php';
} else {
    require_once TPL_DIR. 'reviews.php';
}

