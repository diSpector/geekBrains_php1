<?php

// Задание 2 - примеры из методички
echo '<strong>Задание 2</strong> <br>';
// переменные, константы
$name = 'User';
define('MYCONST', 'Alex');
// двойные кавычки
echo "Hello $name";
echo '<br>';
// одинарные кавычки
echo 'Hello $name';
echo '<br>';
echo MYCONST;
echo '<br>';

// различные системы счисления
$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";

// числа с плавающей точкой
$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3 <br>";

// конкатенация строк
$str1 = 'Str';
$str2 = 'ing';
$str3 = $str1 . $str2;
echo "Результат конкатенации - $str3 <br>";

// математические операции
$a = 4;
$b = 5;
echo "Переменная a = $a <br>";
echo "Переменная b = $b <br>";
echo "a + b = " . ($a + $b) . "<br>" ;
echo "a - b = " . ($a - $b) . "<br>" ;
echo "a / b = " . ($a / $b) . "<br>" ;
echo "a % b = " . ($a % $b) . "<br>" ;
echo "a ** b = " . ($a ** $b) . "<br>" ;

// инкремент/декремент
$a = 4;
$b = 5;
echo "Переменная a = $a <br>";
echo "Переменная b = $b <br>";
$a += $b;
echo '$a += $b, $a = ' . $a . '<br>';
$a = 0;
echo "Переменная a = $a <br>";
echo '$a++ = ' . ($a++) . '<br>'; // Постинкремент
echo '++$a = ' . (++$a) . '<br>'; // Преинкремент
echo '$a-- = ' . ($a--) . '<br>'; // Постдекремент
echo '--$a = ' . (--$a) . '<br>'; // Предекремент

// операции сравнения
$a = 4;
$b = 5;
var_dump($a == $b ); // Сравнение по значению - a не равно b, поэтому false
var_dump($a === $b ); // Сравнение по значению и типу - a не равно b, поэтому false
var_dump($a > $b ); // Больше - a меньше b, поэтому false
var_dump($a < $b ); // Меньше - a меньше b, поэтому true
var_dump($a <> $b ); // Не равно - a не равно b, поэтому true
var_dump($a != $b ); // Не равно - a не равно b, поэтому true
var_dump($a !== $b ); // Не равно без приведения типов - a не равно b, поэтому true
var_dump($a <= $b ); // Меньше или равно - a меньше b, поэтому true
var_dump($a >= $b ); // Больше или равно - a меньше b, поэтому false

// Задание 3 - объяснить примеры
echo '<strong>Задание 3</strong> <br>';

$a = 5; // тип integer
$b = '05'; // тип string
var_dump($a == $b ); // Почему true? Потому что при сравнении строка '05' (переменная b) будет преобразована в число 5 (integer), которое равно $a = 5
var_dump((int)'012345'); // Почему 12345? Потому что при переопределении типа строка "012345" будет преобразована к числу (тип integer), а у типа integer не может быть нуля в качестве первого символа
var_dump((float) 123.0 === (int) 123.0 ); // Почему false? Потому что используется оператор строгого сравнения ('==='), а это значит, что сравниваются не только значения, но и их типы. Так как у одного значения тип double, а у другого - float, они строго не равны.
var_dump((int) 0 === (int) 'hello, world' ); // Почему true? Потому что при преобразовании строки в число с помощью (int), если в ней нет первого числового символа, она преобразуется в нуль. Далее сравниваются два нуля типа integer, она равны.

// Задание 4.
// Используя имеющийся HTML шаблон, сделать так, чтобы главная страница генерировалась
// через PHP. Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и
// текущий год генерировались в блоке контента из созданных переменных.
echo '<strong>Задание 4 </strong><a href = "task4.php">здесь</a><br>';

// Задание 5.
// Используя только две переменные, поменяйте их значение местами.
// Например, если a = 1, b = 2, надо, чтобы получилось: b = 1, a = 2.
// Дополнительные переменные использовать нельзя.

echo '<strong>Задание 5</strong> <br>';

$a = 5;
$b = 10;
echo "Переменная a = $a <br>";
echo "Переменная b = $b <br>";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "Переменная a = $a <br>";
echo "Переменная b = $b <br>";

?>