<?php
session_start();

//Подключепние к БД
$servername = "localhost";
$username = "max";
$password = "123321";
$dbname = "dverimaniay";
$fack = new mysqli($servername, $username, $password, $dbname);
if ($fack->connect_error) {
    die("Не смог подключиться к БД: " . $fack->connect_error);
}

//Обработка формы 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $password = ($_POST["password"]);

    // echo $password;

    $sql = "SELECT * FROM `register` WHERE `login`='$login' AND `password`='$password'";
    $result = $fack->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION["login"] = $login;
        header("Location: ../dverimaniay/index.php");
        exit();
    } else {
        $error_message = "Неправильный пароль или логин"  . $fack->error;
    }
}

$fack->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dverimaniay/style.css">

    <title>Document</title>
</head>

<body>


    <!-- <div class="container-reg" id="reg-text">
        <h2>Авторизация</h2><br>
        <form action="" method="post" >
            <label for="login" class="text-reg">Логин:</label><br><br>
            <input type="text" name="login" class="in"><br><br>
            <label for="password" class="text-reg">Пароль:</label><br><br>
            <input type="password" name="password" class="in"><br><br>
            <input type="submit" value="Войти" class="kbt"><br><br>

            <div style="color: red;"><?php echo $error_message; ?></div>
        </form>
        <input type="submit" value="Войти под администратором"  onclick="document.location='../dverimaniay/admin_login.php'" class="kbtt">

    </div> -->
    <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Авторизация</h2>

              <form action="" method="post" >

                <div class="form-outline mb-4">
                  <input type="text"  id="login" name="login" class="form-control form-control-lg" required>
                  <label class="form-label" for="login">Введите логин</label>
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