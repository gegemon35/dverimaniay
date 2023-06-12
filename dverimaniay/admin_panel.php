<?php
session_start();

function logout() {
  session_destroy();
  header("Location: admin_login.php");
  exit;
}

if (isset($_POST['logout'])) {
  logout();
}

// проверяем, авторизован ли пользователь
if (isset($_SESSION['login'])) {
  // если пользователь авторизован, скрываем кнопки регистрации и авторизации
  echo '<style>#nav-btn-log, #nav-btn-reg{ display: none; }</style>';
  // отображаем кнопку выхода
  echo '<style>#nav-btn-logout { display: block; }</style>';
} else {
    // если пользователь не авторизован, скрываем кнопку выхода
    echo '<style>#nav-btn-logout { display: none; }</style>';
}

// Проверка, является ли текущий пользователь администратором
if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <meta charset="UTF-8">
  <title>Admin Panel</title>
</head>
<body>







<div class="container">
    <h2>Добавить товар</h2>
    <form action="add_product.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Название двери:</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="color">Цвет:</label>
            <input type="text" class="form-control" name="color">
        </div>
        <div class="form-group">
            <label for="size">Размер:</label>
            <input type="text" class="form-control" name="size">
        </div>
        <div class="form-group">
            <label for="price">Цена товара:</label>
            <input type="number" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label for="image">Изображение товара:</label>
            <input type="file" class="form-control-file" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Добавить товар</button>
    </form>
    <h1>Добро пожаловать в админ панель</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <button type="submit" class="btn btn-danger" name="logout">Выйти</button>
    </form>
</div>













<!-- <div class="container">
    <h2>Добавить товар</h2>
    <form action="add_product.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Название двери:</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="color">Цвет:</label>
            <input type="text" class="form-control" name="sale">
        </div>
        <div class="form-group">
            <label for="manefacter">Размер:</label>
            <input type="text" class="form-control" name="manefacter">
        </div>
        <div class="form-group">
            <label for="price">Цена товара:</label>
            <input type="number" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label for="image">Изображение товара:</label>
            <input type="file" class="form-control-file" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Добавить товар</button>
    </form>
    <h1>Добро пожаловать в админ панель</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <button type="submit" class="btn btn-danger" name="logout">Выйти</button>
    </form>
</div> -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>