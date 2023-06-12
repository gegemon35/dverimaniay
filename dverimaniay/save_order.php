<?php
$dbUser = 'max';
$dbName = 'dverimaniay';
$dbPass = '123321';

// Установка соединения с базой данных
$mysqli = new mysqli('localhost', $dbUser, $dbPass, $dbName);
if ($mysqli->connect_errno) {
    echo "Ошибка подключения к базе данных: " . $mysqli->connect_error;
    exit();
}

// Установка кодировки
$mysqli->set_charset("utf8");

// Получение данных из формы
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$surname = isset($_POST['surname']) ? $_POST['surname'] : '';
$adress = isset($_POST['adress']) ? $_POST['adress'] : '';
$comment = isset($_POST['comment']) ? $_POST['comment'] : '';
// Другие поля формы

// Подготовка и выполнение SQL-запроса для вставки данных в таблицу
$query = "INSERT INTO zakaz (name, email, surname, adress, comment, phone) VALUES ('$name', '$email', '$surname', '$adress', '$comment', '$phone')";
// Добавьте остальные поля формы в запрос INSERT

// Выполнение запроса
if ($mysqli->query($query)) {
    // header("Location: ../dverimaniay/catalog/index.php");
    $tow = '<div class="alert alert-success">Заказ оформлен.</div>';
     


} else {
    echo "Ошибка при сохранении данных в базе данных: " . $mysqli->error;
}

// Закрытие соединения с базой данных
$mysqli->close();
?>
<!-- <button onclick="window.location.href = '../dverimaniay/catalog/index.php';">Вернуться назад</button> -->



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="d-flex justify-content-center" style="margin-top: 200px;">
    <?php echo $tow  ?>
    <button type="submit" class="btn btn-primary btn-lg" onclick="document.location='../dverimaniay/catalog/index.php'">Вернуться назад</button>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>