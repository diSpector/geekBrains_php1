<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action = 'index.php'>
<?php
//2. Присвоить переменной $а значение в промежутке [0..15].
// С помощью оператора switch организовать вывод чисел от $a до 15.

$varFrom0To15 = $_POST['varFrom0To15']; // значение переменной из формы задания
       switch($varFrom0To15) { // после нахождения переменной, будет выведено ее значение и все остальные
           case 0:
               echo '0 <br>';
           case 1:
               echo '1 <br>';
           case 2:
               echo '2 <br>';
           case 3:
               echo '3 <br>';
           case 4:
               echo '4 <br>';
           case 5:
               echo '5 <br>';
           case 6:
               echo '6 <br>';
           case 7:
               echo '7 <br>';
           case 8:
               echo '8 <br>';
           case 9:
               echo '9 <br>';
           case 10:
               echo '10 <br>';
           case 11:
               echo '11 <br>';
           case 12:
               echo '12 <br>';
           case 13:
               echo '13 <br>';
           case 14:
               echo '14 <br>';
           case 15:
               echo '15 <br>';
               break;
           default:
               echo 'Неверный ввод!';
       }
       ?>
    <input type="submit" value="Вернуться">
</form>
</body>
</html>
