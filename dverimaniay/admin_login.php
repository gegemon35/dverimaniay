<?php
session_start();

if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
  header("Location: ../dverimaniay/admin_panel.php");
  exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Проверка учетных данных администратора
  $admin_username = "admin";
  $admin_password = "admin123";

  $username = $_POST["username"];
  $password = $_POST["password"];

  if ($username === $admin_username && $password === $admin_password) {
    $_SESSION["admin"] = true;
    header("Location: ../dverimaniay/admin_panel.php");
    exit;
  } else {
    $error_message = "Неверные учетные данные!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../dverimaniay/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <meta charset="UTF-8">
  <title>Admin Login</title>
</head>
<body>
    <!-- <div class="container-reg" id="reg-text">
    <h2>Адмнистратор</h2><br>
    <?php if (isset($error_message)) echo "<p>$error_message</p>"; ?>
    <form action="admin_login.php" method="post">
      <label for="username" class="text-reg">Имя пользователя:</label><br><br>
      <input type="text" name="username"  class="in"><br><br>
      <label for="password" class="text-reg">Пароль:</label><br><br>
      <input type="password" name="password"  class="in"><br><br>
      <input type="submit" value="Войти" class="kbt">
    </form>
    </div>


  -->





  <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Войти под адмнистратором</h2>

              <form action="admin_login.php" method="post" >

                <div class="form-outline mb-4">
                  <input type="text"  id="login" name="username" class="form-control form-control-lg" required>
                  <label class="form-label" for="username">Логин</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password"  id="password" name="password" class="form-control form-control-lg" required/>
                  <label class="form-label" for="password">Пароль</label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Войти</button>
                </div>
                <!-- <div style="color: red;"><?php echo $error_message; ?></div> -->
                <?php if (isset($error_message)) {    ?>
        <div style="color: red;"><?php echo $error_message; ?></div>
    <?php } ?>


                <p class="text-center text-muted mt-5 mb-0">У вас нету аккаунта? <a href="../registration/register.php"
                    class="fw-bold text-body"><u>Регистрация</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>