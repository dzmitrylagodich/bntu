
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

<style>
       body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }

    .news-block {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 30px;
      margin-bottom: 30px;
    }

    .news-title {
      font-size: 24px;
      font-weight: bold;
      color: #333;
      text-align: center;
      margin-bottom: 20px;
    }

    .news-content {
      font-size: 16px;
      color: #555;
      line-height: 1.6;
    }

    .source-link {
      color: #007bff;
      text-decoration: none;
    }

    .source-link:hover {
      text-decoration: underline;
    }

</style>
    
  </head>
<body>

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
                    <a href="index.php" class="logo">
                        <img src="assets/images/logo_bntu_2021_green.svg" alt="">
                    </a>
                    <ul class="nav">
                      <li><a href="index.php" class="active"><strong>Главная </strong></a></li>
                      <li><a href="shop.php">Филиалы БНТУ</a></li>
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

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">
            <h6>Добро пожаловать</h6>
            <h2>Абитуриент!</h2>
            <p>Этот сайт создан для тех, кто хочет найти себе место в Филиале БНТУ. Для вас мы собрали все Филиалы в одном месте. У нас вы сможете все узнать!</p>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="right-image">
            <img src="assets/images/xxxl.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-04.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Найти интересный колледж</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-02.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Выбрать специальность</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-03.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Подготовить документы</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-04.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Поздравляем! Ты поступил!</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  

    <div class="container" style="padding-top: 100px;">
<img class="mySlides" src="assets/images/slider1.jpg">
<img class="mySlides" src="assets/images/slider2.jpg">
<img class="mySlides" src="assets/images/slider3.jpg">
    </div>

<div style="padding-top: 25px;"> 
  <div class="container" style="width: 1100px;" >
      <div class="news-block">
    <h2 class="news-title">Сроки приёма в колледжи и лицеи (ПТО и ССО) в 2024 году</h2>
    <div class="news-content">
      <p>Начальник управления профессионально-технического и среднего специального образования Александра Петрова рассказала корреспонденту «Настаўніцкай газеты» о сроках приёма в колледжи на уровень среднего специального и профессионально-технического образования.</p> 
      <br>
      <h5>Минобразования скорректировало сроки приёма на уровень среднего специального образования</h5><br>
      <p>Вступительная кампания в ссузах пройдёт с 20 июля по 15 августа, передаёт БЕЛТА. Приём на уровень среднего специального образования после 9 класса пройдёт:<br>
        — с 20 июля по 3 августа — на бюджет;<br>
        — с 20 июля по 13 августа на платное.<br>
        Приём документов на специальности, где необходимо сдавать внутренние экзамены, продлится до 3 августа. С 4 по 8 августа пройдут вступительные испытания.<br>
        Зачисление на бюджет — по 6 августа, по результатам внутренних экзаменов — по 10 августа; зачисление на платное — по 15 августа.<br>
        Приём на уровень среднего специального образования после 11 класса пройдёт:<br>
        — с 20 июля по 6 августа — на бюджет;<br>
        — с 20 июля по 13 августа — на платное.<br>
        Приём документов на специальности, где необходимо сдавать внутренние экзамены, продлится до 6 августа. С 7 по 9 августа пройдут вступительные испытания.<br>
        Зачисление на бюджет — по 8 августа, по результатам внутренних экзаменов — по 11 августа; зачисление на платное — по 15 августа.<br>
      </p>
      <a class="source-link" href="https://pravo.by/document/?guid=12551&p0=W22441400">Постановление Министерства образования Республики Беларусь 2 апреля 2024 г. № 37</a><br>
      <p>В этом году колледжи откроют новые востребованные экономикой специальности. Минский государственный колледж цифровых технологий — «Техническая эксплуатация мехатронных систем электронного производства» и «Производство изделий микро- и наноэлектроники»; Колледж современных технологий машиностроения и автосервисе — «Эксплуатация средств измерения»; Гомельский государственный химико-технологический колледж — «Лабораторный анализ».<br>
        Ещё в этом году расширяются возможности поступить в колледж по целевому направлению:<br>
        — На все специальности можно устанавливать долю целевого набора — до 50%, а на специальности сфер здравоохранения и сельского хозяйства — до 60%. Ребята могут уже сейчас выбрать организацию, в которой в дальнейшем хотели бы не только проходить практику и обучаться в тесной связке с этой организацией, но и продолжить свою трудовую деятельность. Для этого можно обращаться как в учреждение образования, так и на профильные предприятия. Кроме того, можно следить за проведением ярмарок целевой подготовки, — сообщила Александра Петрова.<br>
        Приём документов в колледжи на уровень профессионально-технического образования пройдёт с 15 июня до 23 августа. Учреждения образования могут продлить приём на специальности ПТО до 15 сентября, если учебные группы будут укомплектованы не полностью.<br>
        Приём в колледжи на уровень ССО и ПТО осуществляется на основе среднего балла документа об образовании.<br>
      </p>
    </div>
    </div>
    </div>
</div>

<div class="section trending">
    <div class="container">
      <div style="display: flex; align-items: center; justify-content: center; font-size: 40px; font-family: Arial, sans-serif; margin-bottom: 20px;">
        <strong>НОВОСТИ</strong>      
      </div>
      <div class="row trending-box">
        <div class="col-lg-4 col-md-7 align-self-center mb-30 trending-items col-md-6 str">
          <div class="item">
            <div class="thumb">
              <a href="news/news1.php"><img src="assets/images/news1.png" alt=""></a>
            </div>
            <div class="down-content">
              <h4 style="font-size: 19px;">5 причин учить английский язык айтишникам</h4>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-7 align-self-center mb-30 trending-items col-md-6 str">
          <div class="item">
            <div class="thumb">
              <a href="news/news2.php"><img src="assets/images/news2.jpg" alt=""></a>
            </div>
           <div class="down-content">
              <h4 style="font-size: 19px;">5 секретов, которые помогут новичку стать востребованным в ИТ</h4>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-7 align-self-center mb-30 trending-items col-md-6  str">
          <div class="item">
            <div class="thumb">
              <a href="news/news3.php"><img src="assets/images/news3.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <h4 style="font-size: 19px;">6 причин не работать в ИТ-сфере</h4>
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

<script>
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

  </body>
</html>


