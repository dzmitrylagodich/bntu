<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>BNTU Colleges</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <img src="assets/images/logo_bntu_2021_green.svg" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index.php" ><strong>Главная </strong></a></li>
                      <li><a href="shop.php">Филиалы БНТУ</a></li>
                      <li><a href="contact.php" class="active">Контакты</a></li>
                        <?php
                        session_start();

                        // Проверяем, авторизован ли пользователь
                         if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                        // Проверяем роль пользователя
                         if($_SESSION['role'] === 'admin') {
                       // Если пользователь является администратором, показываем ссылку на страницу администратора
                        echo '<li><a href="adminspage/admin.php">Панель администратора</a></li>';
                         }
                           }
                         ?>     


                        <?php
                        session_start();

                        // Проверяем, авторизован ли пользователь
                        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                            // Если пользователь авторизован, показываем ссылку на профиль
                            echo '<li><a href="profile.php">Профиль</a></li>';
                        } else {
                            // Если пользователь не авторизован, показываем ссылку на страницу входа
                            echo '<li><a href="login/logregform.php">Вход</a></li>';
                        }
                        ?>
                  </ul> 
                  
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Контакты</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-text">
            <div class="section-heading">
              <h2>Задайте свой вопрос!</h2>
            </div>
            <p>Если у вас остались еще вопросы, напишите нам и мы постараемся ответить вам максимально быстро и точно!</p>
            <ul>
              <li><span>Адрес</span> Минск. БНТУ</li>
              <li><span>Телефон</span> +33 333 33 33</li>
              <li><span>Почта</span> bntu@contact.com</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-content">
            <div class="row">
              <div class="col-lg-12">
                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4697.681284375121!2d27.590801425150222!3d53.92103604104749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dcc9c8a0281d17%3A0x187cbb42b1fdbe1d!2z0YPQuy4g0J_RgNC-0LvQtdC90YLRgA!5e0!3m2!1sru!2sby!4v1649010320106!5m2!1sru!2sby" width="100%" height="325px" frameborder="0" style="border:0; border-radius: 23px;" allowfullscreen=""></iframe>
                </div>
              </div>
              <div class="col-lg-12">
                <form id="contact-form" action="" method="post">
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Имя" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="surname" name="surname" id="surname" placeholder="Фамилия" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Почта" required="">
                      </fieldset>
                    </div>
                  
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="message" id="message" placeholder="Ваше сообщение"></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="orange-button">Отправить</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Все права защищены. Разработал: Вагин Дмитрий. &nbsp;&nbsp;</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>