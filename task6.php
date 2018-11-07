<!--6. В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP.
Необходимо представить пункты меню как элементы массива и вывести их циклом.
Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.-->
<?php

// массив меню и подменю
$listItems = ['На Главную' => 'index.php',
    'archive' => 'http://www.google.com',
    'contact' => ['Офис' => ['Москва' => 'index.php?office=moscow',
                            'Самара' => 'index.php?office=samara',
                            'Омск' => 'index.php?office=Омск'],
        'Производство' => 'index.php?factory',
        'Колл-центр' => 'index.php?call',
    ]
];

// функция, которая проходится по массиву, и если значение является массивом, рекурсивно вызывает себя.
// Это позволяет сделать меню любого уровня вложенности

function printLists($menuArray){
    $buffer = null; // инициализация переменной, в которой будет вывод меню
    foreach ($menuArray as $liText => $liLink){
        if (is_array($liLink)){
            $buffer .= '<li>'.$liText.'</li>';
            $buffer .= '<ul>'.printLists($liLink).'</ul>';
        }
        else {
            $buffer .= '<li><a href="'.$liLink.'">'.$liText.'</a></li>';
        }
    }
    return $buffer;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" http-equiv="content-type">
    <title>Title</title>
</head>
<body>
<h1>Title</h1>
<ul>
    <?php echo printLists($listItems) ?>
</ul>
<div class="post">
    <div class="detail">
        <h2><a href="#">Nunc commodo euismod massa quis vestibulum</a></h2>
        <p class="info">posted 3 hours ago in <a href="#">general</a></p>
    </div>
    <div class="body">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
    </div>
    <div class="x"></div>
</div>
<div class="col">
    <h3><a href="#">Ut enim risus rhoncus</a></h3>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
    <p>&not; <a href="#">read more</a></p>
</div>
<div class="col">
    <h3><a href="#">Ut enim risus rhoncus</a></h3>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
    <p>&not; <a href="#">read more</a></p>
</div>
<div class="col last">
    <h3><a href="#">Ut enim risus rhoncus</a></h3>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
    <p>&not; <a href="#">read more</a></p>
</div>
<div id="footer">
    <p>Copyright &copy; <em>mini</em> &middot; Design: <a href="#">...</a><span>01.01.2018</span> </p>
</div>


</body>
</html>