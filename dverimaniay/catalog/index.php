<?php
session_start();

function logout() {
  session_destroy();
  header("Location: index.php");
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
  echo '<style>#nav-btn-logout { display: block; color: white; text-decoration: none;}</style>';
} else {
    // если пользователь не авторизован, скрываем кнопку выхода
    echo '<style>#nav-btn-logout { display: none; }</style>';
  }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
      <header > 
        <!-- MENU -->
        
        <div class="con" id="nav">
        <nav class="navbar navbar-expand-lg navbar-dark " >
            <div class="container-fluid">
              <a id="navv" class="navbar-brand" href="#"><img src="../img/logo1.png" width="50px" height="50px">Dverimaniay 
              </a>
              <button id="ccc" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="../index.php" id="text-menu">Главная</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="../map/index.php" id="text-menu">Мы на карте</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="../catalog/index.php" id="text-menu">Каталог</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../about/index.php" id="text-menu">О компании</a>
                  </li>
                </ul>
                <!-- <h1>Добро пожаловать, <?php echo $_SESSION["login"]; ?>!</h1>
    <a href="logout.php">Выход</a>              </div> -->
    <a href="../../registration/register.php" id="nav-btn-reg" class="nav-btn-style" class="nav-item nav-link">Регистрация</a>
                <a href="../../registration/login.php"  id="nav-btn-log"  class="nav-btn-style" class="nav-item nav-link">Авторизация</a>
                <a href="#" id="nav-btn-logout" class="nav-btn-style" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выход (<?php echo $_SESSION["login"]; ?>)</a>
                <form id="logout-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <input type="hidden" name="logout">
            </div>
          </nav>
        </div>
    </header>








 <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-chargovie-tab" data-bs-toggle="pill" data-bs-target="#pills-chargovie" type="button" role="tab" aria-controls="pills-chargovie" aria-selected="true">Царговые</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-shtampovanie-tab" data-bs-toggle="pill" data-bs-target="#pills-shtampovanie" type="button" role="tab" aria-controls="pills-shtampovanie" aria-selected="false">Штампованные</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-stecklo-tab" data-bs-toggle="pill" data-bs-target="#pills-stecklo" type="button" role="tab" aria-controls="pills-stecklo" aria-selected="false">Декоративные Стёкла</button>
  </li>
</ul>

<!-- модальные -->
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-chargovie" role="tabpanel" aria-labelledby="pills-chargovie-tab">

    <!-- KNOP -->


    <div class="block-catalog">



      <?php
                    $dbUser = 'max';
                    $dbName = 'dverimaniay';
                    $dbPass = '123321';
                    $mysqli = new mysqli('localhost', $dbUser, $dbPass, $dbName);
                    $query = "set names utf8";
                    $mysqli->query($query);
                    $query = "select * from catalog";
                    $results = $mysqli->query($query);
                    while($row = $results->fetch_assoc()){
                      echo '




        <div class="page-wrapper">
          <div class="page-inner">
            <div class="roww">
              <div class="el-wrapper">
                <div class="box-up">
                  <img class="img" src="'.$row["imgFile"].'" alt="">
                  <div class="img-info">
                    <div class="info-inner">
                      <span class="p-name">'.$row["name"].'</span>
                      <span class="p-company">Цвет:'.$row["color"].'</span>
                    </div>
                    <div class="a-size">Размер: <span class="size">'.$row["size"].'</span></div>
                  </div>
                </div>
        
                <div class="box-down">
                  <div class="h-bg">
                    <div class="h-bg-inner"></div>
                  </div>
        
                    <a class="cart" href="" >
                      <span class="price" >'.$row["price"]. ' рублей</span>
                      <span class="add-to-cart">
                        <span class="txt">Оформить заказ</span>
                  
                      </span>
                    </a>
                </div>
                <button type="button" class="btn btn-primary" id="bot" data-bs-toggle="modal" data-bs-target="#orderModal">
  Оформить заказ
</button>
              </div>
              
            </div>
            
          </div>
          
        </div> 
        ';      
      }
      ?>

    </div>
  </div>
</div>

































<!-- modalvmodal -->


<footer class="py-5" id="py-5">
  <div class="row">
    <div class="col-2" id="col-2">
      <h5>Контакты</h5>
      <ul class="nav flex-column">
        <button type="button" class="btn btn-primary1" data-bs-toggle="modal" data-bs-target="#exampleModal111" data-bs-whatever="@mdo">Обратная связь</button>

      </ul>
    </div>
    
    <div class="col-4 offset-1">
      <form>
        <p class="fot-text">Подпишитесь на нашу рассылку новостей, чтобы не пропустить акции</p>
        <div class="d-flex w-100 gap-2">
          <label for="newsletter1" class="visually-hidden">Email address</label>
          <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
          <button class="btn btn-primary" type="submit">Подписаться</button>
        </div>
      </form>
    </div>
    <div class="col-3" id="col-3">
      <h5>Навигация</h5>
      <ul class="nav flex-column">
        <button  class="btn btn-primary1" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" onclick="window.location.href = '#'">На главную</button>

      </ul>
    </div>
  </div>
  <!-- <div id="my-4"> -->
  <div class="d-flex justify-content-between py-4 my-4 border-top" id="justify-content-between" id="my-4">
    <p class="texttt">© 2022 Company, Inc. GegemonCorporation.</p>
    <ul class="list-unstyled d-flex">
      <li class="ms-3"><a href="https://vk.com"><img class="imgg" src="../img/vk.png"></a></li>
      <li class="ms-3"><a href="https://www.instagram.com"><img class="imgg" src="../img/inst.png"></a></li>
      <li class="ms-3"><a href="https://web.telegram.org"><img class="imgg" src="../img/tel.png"></a></li>

    </ul>
  </div>
<!-- </div> -->
</footer>
<div class="modal fade" id="exampleModal111" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Новое сообщение</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Ваш email:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Сообщение:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary">Отправить сообщение</button>
      </div>
    </div>
  </div>
</div>

























<!-- HTML-код для модального окна -->
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Форма заказа товара</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
        session_start();
        if (isset($_SESSION["login"]) === true) {
          // Пользователь авторизован, отображаем форму заказа
          ?>
          <form id="orderForm" method="post" action="../save_order.php">
            <div class="form-group">
              <label for="name">Имя</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="surname">Фамилия</label>
              <input type="text" class="form-control" id="surname" name="surname" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="phone">Номер телефона</label>
              <input type="number" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
              <label for="address">Адрес</label>
              <input type="text" class="form-control" id="adress" name="adress" required>
            </div>
            <div class="form-group">
              <label for="comment">Комментарий</label>
              <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
            </div>
            <button type="submit" id="bot" class="btn btn-primary">Заказать</button>
          </form>
          <?php
        } else {
          // Пользователь не авторизован, отображаем сообщение
          echo "Для оформления заказа необходимо авторизоваться." ;
        }
        ?>
      </div>
    </div>
  </div>
</div>
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal">
  Запустите демо модального окна
</button> -->





  <script>function openOrderModal() {
  // Код для открытия модального окна
  $('#orderModal').modal('show');
}</script>
  <script src="./Footers · Bootstrap v5.1_files/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="../js/javascript.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/js/bootstrap.min.js"></script>


</body>
</html>
