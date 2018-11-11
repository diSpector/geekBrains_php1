<?php
require_once('../config/config.php');

function setGallery($dir){
    $imgExt = ['jpg', 'png', 'bmp', 'gif']; // допустимые расширения файлов-картинок
    $handle = opendir($dir); // получить ресурс каталога
    while (false !== ($entry = readdir($handle))) { // перебор файлов каталога
        if ($entry != "." && $entry != "..") { // отбросить файлы "." и ".."
            $fileExt = explode('.', $entry)[1]; // получить расширение файла
            if (in_array($fileExt, $imgExt)){ // сравнить расширение с допустимым (из массива $imgExt)
                $filePath = IMAGES . '/' . $entry;
                echo "<img src = '$filePath' width='240'>";
            }
        }
    }
    closedir($handle);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
<h1>Галерея</h1>
<div class = "gallery">
        <?php setGallery(IMG_DIR)?>
    </div>
    <div id="modal_form">
        <span id="modal_close">X</span>
    </div>
    <div id="overlay"></div>
    <a href="public/task4.php" class = "task">Задание 4</a>
<script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>
<script src = "public/js/script.js"></script>
</body>
</html>
