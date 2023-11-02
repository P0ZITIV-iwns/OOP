<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавление записи</title>
</head>
<body>
    <h1>Добавление записи</h1>
    <form method="POST">
        <label for="title">Название:</label>
        <input type="text" name="title" id="title" required><br><br>

        <label for="firstName">Имя автора:</label>
        <input type="text" name="firstName" id="firstName" required><br><br>

        <label for="mainName">Фамилия автора:</label>
        <input type="text" name="mainName" id="mainName" required><br><br>

        <label for="price">Стоимость:</label>
        <input type="number" name="price" id="price" step="0.01" required><br><br>

        <label for="playLength">Длительность воспроизведения (CDProduct):</label>
        <input type="number" name="playLength" id="playLength"><br><br>

        <label for="numPages">Количество страниц (BookProduct):</label>
        <input type="number" name="numPages" id="numPages"><br><br>

        <input type="submit" value="Добавить">
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'index.php';

    $title = $_POST['title'];
    $firstName = $_POST['firstName'];
    $mainName = $_POST['mainName'];
    $price = $_POST['price'];
    if (isset($_POST['playLength']) && empty($_POST['numPages'])) {
        $playLength = $_POST['playLength'];
        // Создайте экземпляр CDProduct и вызовите метод actionCreate
        $product = new CDProduct($title, $firstName, $mainName, $price, $playLength);
    } elseif (isset($_POST['numPages']) && empty($_POST['playLength'])) {
        $numPages = $_POST['numPages'];
        // Создайте экземпляр BookProduct и вызовите метод actionCreate
        $product = new BookProduct($title, $firstName, $mainName, $price, $numPages);
    }
    if (isset($product)) {
        $product->actionCreate($pdo);
        header("Location: index.php"); // Перенаправляем пользователя на страницу с формой
        exit;
    }
}