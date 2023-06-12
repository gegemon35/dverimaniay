<?php
    // error_reporting(0);
// Подключение к базе данных
$servername = "localhost";
$username = "max";
$password = "123321";
$dbname = "dverimaniay";
$fack = new mysqli($servername, $username, $password, $dbname);
if ($fack->connect_error) {
    die("Не смог подключится к БД: " . $fack->connect_error);
}

//Обработка отправленной формы
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $login = $_POST["login"];
    $email = $_POST["email"];
    $password = ($_POST["password"]);
 

// Проверка наличия в базе данных пользователя с таким же логином или email
    $sql = "SELECT * FROM `register` WHERE `login`='$login' OR `email`='$email'";
    $result = $fack->query($sql);
    if ($result->num_rows > 0){
         $error_message = "Пользователь с таким же логином или почтой уже существет";
    }   else {
        $sql = "INSERT INTO `register` (`login`, `email`, `password`) VALUES ('$login', '$email', '$password')";
        if ($fack->query($sql) === TRUE){
            header("Location: login.php");
            echo "Поздравляем, вы успешно зарегестрировались!";

            
            exit();
        }   else {
            echo "Ошибка регистрации: " . $fack->error;
        }
    }

}

$fack->close();


?>

<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dverimaniay/style.css">
    <title>Document</title>
</head>

<body>
    <!-- <div class="container-reg">
         <h2 id="reg-text">Регистрация пользователя</h2>
         <form action="" method="post" class="forrm">
            <label for="login" class="text-reg">Логин:</label><br>
            <input type="text" id="login" name="login" class="in" required><br><br>
            <label for="email" class="text-reg">Почта:</label><br>
            <input type="email" id="email" name="email" class="in" required><br><br>
            <label for="password" class="text-reg">Пароль:</label><br>
            <input type="password" id="password" name="password" class="in" required><br><br>
            <label for="sexs" class="text-reg">Пол:</label>
            <input type="radio" id="male" name="sexs[]" class="rex" value="male">
            <label for="male" class="text-reg">Мужской</label>
            <input type="radio" id="female" name="sexs[]" class="rex" value="female">
            <label for="female" class="text-reg">Женский</label><br><br>
            <button type="submit" value="Зарегестрироваться" class="kbt">Зарегестрироваться</button>
            <div style="color: red;"><?php echo $error_message; ?></div>

        </form> 
    </div> -->


    <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Регистрация</h2>

              <form action="" method="post" >

                <div class="form-outline mb-4">
                  <input type="text"  id="login" name="login" class="form-control form-control-lg" required>
                  <label class="form-label" for="login">Ваш логин</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="email" name="email"  class="form-control form-control-lg" required/>
                  <label class="form-label" for="form3Example3cg">Ваша почта</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password"  id="password" name="password" class="form-control form-control-lg" required/>
                  <label class="form-label" for="password">Пароль</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password"  id="password" name="password" class="form-control form-control-lg" required/>
                  <label class="form-label" for="password">Повтор пароля</label>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" required/>
                  <label class="form-check-label" for="form2Example3g">
                  Согласие на обработку<a href="#!" class="text-body"><u>  персональных данных</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Регистрация</button>
                </div>
                <div style="color: red;"><?php echo $error_message; ?></div>


                <p class="text-center text-muted mt-5 mb-0">У вас уже есть аккаунт? <a href="../registration/login.php"
                    class="fw-bold text-body"><u>Авторизация</u></a></p>

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