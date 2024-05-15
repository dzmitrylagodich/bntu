<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<meta HTTP-EQUIV="Expires" CONTENT="0">
    <meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <meta HTTP-EQUIV="Cache-Control" CONTENT="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
    <title>Филиалы БНТУ</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
                      <li><a href="shop.php" class="active">Филиалы БНТУ</a></li>
                      <li><a href="contact.php">Контакты</a></li>
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
                        <span>Меню</span>
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
          <h3>Филиалы БНТУ</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <ul class="trending-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Показать все</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">В Минске</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Областные</a>
        </li>
      </ul>
      <div class="row trending-box">
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 str">
          <div class="item">
            <div class="thumb">
              <a href="product-details/BGAK.php"><img src="assets/coll/BGAK.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <h4 style="font-size: 16px;">Бобруский Государственный Автотранспортный Колледж</h4>   
            </div>
          </div>
        </div>


        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 str">
          <div class="item">
            <div class="thumb">
              <a href="product-details/BGPK.php"><img src="assets/coll/BGPK.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <h4 style="font-size: 16px;">Борисовский Государственный Политехнический Колледж</h4>
            </div>
          </div>
        </div>


        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6  str">
          <div class="item">
            <div class="thumb">
              <a href="product-details/JGMK.php"><img src="assets/coll/jgpk.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <h4 style="font-size: 16px;">Жодинский Государственный Политехнический Колледж</h4>
            </div>
          </div>
        </div>


        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 adv">
          <div class="item">
            <div class="thumb">
              <a href="product-details/MGPK.php"><img src="assets/coll/MGPK.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <h4 style="font-size: 16px;">Минский Государственный Политехнический Колледж</h4>
            </div>
          </div>
        </div>


        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6  adv">
          <div class="item">
            <div class="thumb">
              <a href="product-details/MGASK.php"><img src="assets/coll/mgask.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <h4 style="font-size: 16px;">Минский Государственный Ахитектурно-Строительный </h4>
            </div>
          </div>
        </div>


        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6  adv">
          <div class="item">
            <div class="thumb">
              <a href="product-details/MGTK.php"><img src="assets/coll/mgtk.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <h4 style="font-size: 16px;">Минский Государственный Технологический Колледж</h4>
            </div>
          </div>
        </div>


        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6  adv">
          <div class="item">
            <div class="thumb">
              <a href="product-details/MGMK.php"><img src="assets/coll/mgmk.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <h4 style="font-size: 16px;">Минский Государственный Машиностроительный Колледж</h4>
            </div>
          </div>
        </div>


        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6  str">
          <div class="item">
            <div class="thumb">
              <a href="product-details/SGGHK.php"><img src="assets/coll/sgghk.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <h4 style="font-size: 16px;">Солигорский Государственный Горно-Химический Колледж</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6  str">
          <div class="item">
            <div class="thumb">
              <a href="product-details/JGMK.php"><img src="assets/coll/jgmk.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <h4 style="font-size: 16px;">Жлобинский Государственный Металлургический Колледж</h4>
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