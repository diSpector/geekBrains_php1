<?php
// получить все отзывы
$allReviews = readFromReviews();

$vars = [
    'title' => 'Нажмите на отзыв для редактирования',
    'reviews' => $allReviews
];

// если передана переменная операции
if(isset($_GET['operation'])){
    $operation = escapeString($_GET['operation']);
    switch($operation){
        case 'edit':
            if(isset($_GET['id'])){
                $reviewID = escapeString($_GET['id']);
                $reviewInfo = readOneReview($reviewID);
                require_once TPL_DIR. 'reviews_edit_admin.php';
                break;
            } else{
                require_once TPL_DIR. 'reviews_admin.php';
                break;
            }
        case 'delete':
            if (isset($_GET['id'])){
                $reviewID = escapeString($_GET['id']);
                $resultDelete = deleteOneReview($reviewID);
                $resultDelete ? require_once TPL_DIR. 'reviews_admin_delete_success.php' : require_once TPL_DIR. 'reviews_admin_delete_error.php';
                break;
            }
            else{
                require_once TPL_DIR. 'reviews_admin.php';
                break;
            }
        case 'updated':
            if(isset($_POST['id']) && isset($_POST['author']) && isset($_POST['text'])){
                $reviewID = escapeString($_POST['id']);
                $newAuthor = escapeString($_POST['author']);
                $newText = escapeString($_POST['text']);
                $resultUpdate = updateOneReview($reviewID, $newAuthor, $newText);
                $resultUpdate ? require_once TPL_DIR. 'reviews_admin_update_success.php' : require_once TPL_DIR. 'reviews_admin_update_error.php';
                break;
            } else {
                require_once TPL_DIR. 'reviews_admin.php';
                break;
            }
        default:
            require_once TPL_DIR. 'reviews_admin.php';
    }
} else {
    require_once TPL_DIR. 'reviews_admin.php';
}
