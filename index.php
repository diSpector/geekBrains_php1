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
        <option value="1">1. Операции с двумя числами</option>
        <option value="2">2. Вывод a из промежутка [0...15]</option>
        <option value="34">3+4. Четыре математические операции </option>
        <option value="5">5. Год через встроенные функции PHP</option>
        <option value="6">6. Возведение в степень (рекурсия)</option>
        <option value="7">7. Вывод времени со склонениями</option>
    </select>
    <input type="submit" value="Выбрать">
</form>
</body>
</html>

