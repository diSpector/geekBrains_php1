<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="tasks.php" method = "post">
    <h3>Выберите задание:</h3>
    <select name = "select">
<!-- В зависимости от выбранного задания передается значение через форму на сервер передается value для последующей обработки-->
        <option value="1">1. Числа от 0 до 100, которые делятся на 3</option>
        <option value="2">2. Вывод четных и нечетных чисел от 0 до 10</option>
        <option value="38">3+8. Области и города </option>
        <option value="459">4+5+9. ЧПУ</option>
        <option value="6">6. UL-LI с помощью цикла</option>
        <option value="7">7. Вывод чисел без тела цикла</option>
    </select>
    <input type="submit" value="Выбрать">
</form>
</body>
</html>

