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
                    <a class="nav-link" href="../catalog/index.php" id="text-menu">Каталог</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="../about/index.php" id="text-menu">О компании</a>
                  </li>
                </ul>
                <!-- <a class="tel" href="../../reg/index.html" id="text-menu"><p>Авторизация</a> -->
                <a href="../../registration/register.php" id="nav-btn-reg" class="nav-btn-style" class="nav-item nav-link">Регистрация</a>
                <a href="../../registration/login.php"  id="nav-btn-log"  class="nav-btn-style" class="nav-item nav-link">Авторизация</a>
                <a href="#" id="nav-btn-logout" class="nav-btn-style" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выход (<?php echo $_SESSION["login"]; ?>)</a>
                <form id="logout-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <input type="hidden" name="logout">
                </div>
            </div>
          </nav>
        </div>
    </header>

    <div class="container-block">
      <div class="container-text">
        <div class="container-text-gl">
          <p>Межкомнатные двери в Вологде</p>
        </div>
        <div class="container-text-text">
          <p>Предприятие основано в Вологде в 2023 году. За продолжительный срок работы и благодаря постоянному внедрению современного дизайна и высокому качеству, двери можно встретить в каждом доме. И мы гордимся этим.</p>
        </div>
      </div>
      <div class="container-text" id="ct-tx">
        <div class="container-text-gl">
          <p>Производство</p>
        </div>
        <div class="container-text-text" >
          <p>Мы производим двери из МДФ. Материал прост в обработке, но прочен и устойчив к воздействию внешних сред.</p>
          <p>
            Полный цикл производства: от заготовки древесины в Вологодской области до упаковки готовых изделий. Мы постоянно совершенствуем производственную базу и кадровый состав. В цехах установлены современные высокотехнологичные станки Homag Group, Cefla, Makor, Barberan.</p>
          <p>Благодаря мощностям производства изготавливаем большой объём продукции в рекордно короткие сроки.</p>
        </div>
      </div>
      <div class="container-text">
        <div class="container-text-gl">
          <p>Логистика</p>
        </div>
        <div class="container-text-text">
          <p>Доставляем продукцию авто- и ж/д транспортом. Контакты с крупными транспортными компаниями позволяют нам быстро отправлять товар после его изготовления.</p>
          <p>Перед упаковкой товар проверяется на наличие брака и соответствие стандартам качества. Двери от производителя упаковываются в полиэтилен, гофрокартон, пенопласт и собираются на паллеты, чтобы сохранить их первозданный вид в дороге.</p>
        </div>
      </div>
      <div class="container-text" id="ct-tx">
        <div class="container-text-gl">
          Производство и оптовая продажа дверей</p>
        </div>
        <div class="container-text-text" >
          <p>Продаем крупным и мелким оптом межкомнатные царговые двери, а так же двери изготовленные по канадской технологии, погонаж из МДФ. Доставляем по всей РФ.</p>
          <p>Чтобы уточнить интересующую Вас информацию, свяжитесь с оператором. Звонок по России бесплатный:</p>
          <p>8 909 123-36-66</p>
        </div>
      </div>
      <div class="pois-1">
        <p>Офис компании</p>
        <img src="../img/ofis.png" class="img-pois">
      </div>
      <div class="pois">
        <p>Здание компании</p>
        <img src="../img/zdanie.png" class="img-pois">
      </div>
    </div>


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
    
  <script src="./Footers · Bootstrap v5.1_files/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="../js/javascript.js"></script>
</body>
</html>
