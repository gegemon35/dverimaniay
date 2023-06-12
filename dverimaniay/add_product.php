<?php
// session_start();

// // Проверка, является ли текущий пользователь администратором
// if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
//     header("Location: ../registration/login.php");
//     exit();
// }

// // Подключение к базе данных
// $servername = "localhost";
// $username = "max";
// $password = "123321";
// $dbname = "dverimaniay";
// $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//     die("Не удалось подключиться к БД: " . $conn->connect_error);
// }

// // Получение данных из формы
// $name = $_POST["name"];
// $price = $_POST["price"];
// $manefacter = $_POST["manefacter"];
// $sale = $_POST["sale"];
// $image = $_FILES["image"]["name"];
// $image_tmp = $_FILES["image"]["tmp_name"];

// // Загрузка изображения на сервер
// $target_dir = "../img";
// $target_file = $target_dir . basename($image);
// move_uploaded_file($image_tmp, $target_file);

// // Вставка данных в базу данных
// $sql = "INSERT INTO catalog (name, price, manefacter, sale, imgFile) VALUES ('$name', '$price', '$manefacter', '$sale', '$image')";
// if ($conn->query($sql) === TRUE) {
//     echo "Товар успешно добавлен!";
// } else {
//     echo "Ошибка при добавлении товара: " . $conn->error;
// }

// $conn->close();









session_start();








// $dir_path = "../img"; // например, DIR/img
// $permissions = 0777; // Устанавливаем нужные разрешения

// if (!is_dir($dir_path)) {
//    // Если директория не существует, создаем ее
//    mkdir($dir_path, $permissions, true);
// }

// // Изменяем разрешения для директории
// chmod($dir_path, $permissions);

// // Изменяем разрешения для файла
// $file_path = "../img/"; // например, DIR/img/chargovay-4.png
// $permissions = 0644; // Устанавливаем нужные разрешения

// Изменяем разрешения для файла
// chmod($file_path, $permissions);



// Проверка, является ли текущий пользователь администратором
if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    header("Location: ../registration/login.php");
    exit();
}

// Подключение к базе данных
$servername = "localhost";
$username = "max";
$password = "123321";
$dbname = "dverimaniay";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Не удалось подключиться к БД: " . $conn->connect_error);
}

// Получение данных из формы
// $name = $_POST["name"];
// $price = $_POST["price"];
// $manefacter = $_POST["manefacter"];
// $sale = $_POST["sale"];
// $image = $_FILES["image"]["name"];
// $image_tmp = $_FILES["image"]["tmp_name"];

// // Загрузка изображения на сервер
// $target_dir = "../img/";
// $target_file = $target_dir . basename($image);
// $error = $_FILES["image"]["error"];
// if ($error !== UPLOAD_ERR_OK) {
//     die("Ошибка при загрузке файла");
// }
// if (!move_uploaded_file($image_tmp, $target_file)) {
//     die("Не удалось переместить загруженный файл");
// }

// // Вставка данных в базу данных
// $sql = "INSERT INTO catalog (name, price, manefacter, sale, imgFile) VALUES ('$name', '$price', '$manefacter', '$sale', '$target_file')";
// if ($conn->query($sql) === TRUE) {
//     $tow =   '<div class="alert alert-success">Товар успешно добавлен.</div>';
    

// } else {
//     echo "Ошибка при добавлении товара: " . $conn->error;
// }

// $conn->close();












// // Получение данных из формы
// $name = $_POST["name"];
// $price = $_POST["price"];
// $manefacter = $_POST["manefacter"];
// $sale = $_POST["sale"];
// $image = $_FILES["image"]["name"];
// $image_tmp = $_FILES["image"]["tmp_name"];

// // Загрузка изображения на сервер
// $target_dir = "../img/";
// $target_file = $target_dir . basename($image);
// $error = $_FILES["image"]["error"];
// if ($error !== UPLOAD_ERR_OK) {
//     die("Ошибка при загрузке файла");
// }
// if (!move_uploaded_file($image_tmp, $target_file)) {
//     die("Не удалось переместить загруженный файл");
// }

// // Вставка данных в базу данных
// $sql = "INSERT INTO catalog (name, price, manefacter, sale, imgFile) VALUES ('$name', '$price', '$manefacter', '$sale', '$target_file')";
// if ($conn->query($sql) === TRUE) {
//     $tow = '<div class="alert alert-success">Товар успешно добавлен.</div>';
// } else {
//     echo "Ошибка при добавлении товара: " . $conn->error;
// }

// $conn->close();










// // Подключение к базе данных
// $servername = "localhost";
// $username = "max";
// $password = "123321";
// $dbname = "dverimaniay";
// $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//     die("Не удалось подключиться к БД: " . $conn->connect_error);
// }

$name = $_POST["name"];
$price = $_POST["price"];
$color = $_POST["color"];
$size = $_POST["size"];
$image = $_FILES["image"]["name"];
$image_tmp = $_FILES["image"]["tmp_name"];

// Загрузка изображения на сервер
$target_dir = "../img/";
$target_file = $target_dir . basename($image);
$error = $_FILES["image"]["error"];
if ($error !== UPLOAD_ERR_OK) {
    die("Ошибка при загрузке файла");
}
if (!move_uploaded_file($image_tmp, $target_file)) {
    die("Не удалось переместить загруженный файл");
}

// Вставка данных в базу данных
$sql = "INSERT INTO catalog (name, price, color, size, imgFile) VALUES ('$name', '$price', '$color', '$size', '$target_file')";
if ($conn->query($sql) === TRUE) {
    $tow = '<div class="alert alert-success">Товар успешно добавлен.</div>';
} else {
    echo "Ошибка при добавлении товара: " . $conn->error;
}

$conn->close();










// session_start();

// $dir_path = "../img"; // например, DIR/img
// $permissions = 0777; // Устанавливаем нужные разрешения

// if (!is_dir($dir_path)) {
// // Если директория не существует, создаем ее
// mkdir($dir_path, $permissions, true);
// }

// // Изменяем разрешения для директории
// chmod($dir_path, $permissions);

// // Проверка, является ли текущий пользователь администратором
// if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
// header("Location: ../registration/login.php");
// exit();
// }

// // Подключение к базе данных
// $servername = "localhost";
// $username = "max";
// $password = "123321";
// $dbname = "dverimaniay";
// $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
// die("Не удалось подключиться к БД: " . $conn->connect_error);
// }

// // Получение данных из формы
// $name = $_POST["name"];
// $price = $_POST["price"];
// $manefacter = $_POST["manefacter"];
// $sale = $_POST["sale"];
// $image = $_FILES["image"]["name"];
// $image_tmp = $_FILES["image"]["tmp_name"];

// // Загрузка изображения на сервер
// $target_dir = "../img/";
// $target_file = $target_dir . basename($image);
// $error = $_FILES["image"]["error"];
// if ($error !== UPLOAD_ERR_OK) {
// die("Ошибка при загрузке файла");
// }
// if (!move_uploaded_file($image_tmp, $target_file)) {
// die("Не удалось переместить загруженный файл");
// }

// // Вставка данных в базу данных
// $sql = "INSERT INTO catalog (name, price, manefacter, sale, imgFile) VALUES ('$name', '$price', '$manefacter', '$sale', '$target_file')";
// if ($conn->query($sql) === TRUE) {
// echo "Товар успешно добавлен!";
// } else {
// echo "Ошибка при добавлении товара: " . $conn->error;
// }

// $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="d-flex justify-content-center" style="margin-top: 200px;">
    <?php echo $tow  ?>
    <button type="submit" class="btn btn-primary btn-lg" onclick="document.location='../dverimaniay/admin_login.php'">Добавить ещё товар</button>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>

