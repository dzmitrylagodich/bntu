
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

    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
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
                    <a href="../index.php" class="logo">
                        <img src="../assets/images/logo_bntu_2021_green.svg" alt="">
                    </a>
                    <ul class="nav">
                      <li><a href="../index.php" class="active"><strong>Главная </strong></a></li>
                      <li><a href="../shop.php">Филиалы БНТУ</a></li>
                      <li><a href="../contact.php">Контакты</a></li>
                        <?php
                        session_start();

                        // Проверяем, авторизован ли пользователь
                         if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                        // Проверяем роль пользователя
                         if($_SESSION['role'] === 'admin') {
                       // Если пользователь является администратором, показываем ссылку на страницу администратора
                        echo '<li><a href="../adminspage/admin.php">Панель администратора</a></li>';
                         }
                           }
                         ?>     


                        <?php
                        session_start();

                        // Проверяем, авторизован ли пользователь
                        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                            // Если пользователь авторизован, показываем ссылку на профиль
                            echo '<li><a href="../profile.php">Профиль</a></li>';
                        } else {
                            // Если пользователь не авторизован, показываем ссылку на страницу входа
                            echo '<li><a href="../login/logregform.php">Вход</a></li>';
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
            <img src="../assets/images/xxxl.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>




<h1 style="margin-top: 50px; font-size: 35px; font-family: Arial, sans-serif; " class="news-title">6 причин не работать в ИТ-сфере</h1>

    <div class="container" style="padding-top: 30px;">
      <img class="mySlides" src="../assets/images/slider1.jpg">
      <img class="mySlides" src="../assets/images/slider2.jpg">
      <img class="mySlides" src="../assets/images/slider3.jpg">
    </div>

<div style="padding-top: 25px;"> 
  <div class="container" style="width: 1100px;">
      <div class="news-block">
    <div class="news-content">
      <p>Многие грезят карьерой программиста. Ведь о крутых бонусах и плюшках ИТ-сферы знает каждый. Не всё так радужно. Есть по крайней мере шесть причин, почему сотрудникам ИТ-компаний приходится несладко. Учитывай их прежде чем думать о карьере разработчика, тестировщика, проектного менеджера или веб-дизайнера.</p>
      <br>
      <h5>Ненормированный рабочий день</h5>
      <br>
      <p>
        Несмотря на то, что в ИТ-компаниях можно безнаказанно прийти позже обычного или перенести рабочее место к себе домой, зачастую рабочее время программиста или проджекта растягивается до ночи. Работа в выходные или необходимость быть на связи 24/7 — нормальная ситуация в периоды завершения проекта. Конечно, политика ИТ-компаний предусматривает денежное поощрение за переработки. Но ментальное состояние и здоровье всё же лучше поставить на первое место.
      </p>
      <br>
      <h5>Здоровье</h5>
      <br>
      <p>
        Достаточно предсказуемый минус работы в ИТ-сферы. Ты буквально всегда находишься за ПК. Экранное время программиста может быть более трёх тысяч часов в год. Кроме того, такая работа выматывает морально. Мыслительный процесс становится системным. И даже в свободное от работы время мозг обрабатывает информацию. Поэтому большинство разработчиков — это закрытые, сконцентрированные на «‎чём-то своём«‎ люди. Но такая или даже более явная профдеформация может происходить со специалистами любой сферы.
      </p>
      <br>
      <h5>Интровертов больше здесь не ждут</h5>
      <br>
      <p>
        Раньше программирование было для гиков — единомышленников или одиночек, которые не пытались быть удобными. Они не задумывались на актуальную сегодня тему Soft Skills‎, а просто делали своё дело. Сегодня же интроверт не сможет работать в офисе ИТ-компании. Первым делом, HR-специалист испытает кандидата на коммуникабельность, стрессоустойчивость и совместимость с коллективом. Потому что современное программирование — это плотная работа с коллегами, взаимодействие с командой и, кроме того, необходимость участвовать в митапах и тимбилдингах.
      </p>
      <br>
      <h5>Новые сотрудники</h5>
      <br>
      <p>
        Если вы когда-то были неудовлетворены тем, что у вас менялись коллеги или штат рос слишком быстро и вы не успевали запоминать имена сотрудников, то эта работа не для вас. ИТ-сфера лидирует в плане текучки и конкуренции. И руководство обычно не пользуется правилом приёма на работу в первую очередь кандидатов из своей страны. Крупным компаниям ничего не стоит перевести сотрудников из-за рубежа. Это бесконечный рынок, где нет незаменимых профессионалов.
      </p>

      <br>
      <h5>Сложность работы и высокая ответственность</h5>
      <br>
      <p>
       В ИТ невозможно один раз научиться что-то хорошо делать. Программисту, веб-дизайнеру или другому специалисту нужно постоянно узнавать новое и прогрессировать. Работа действительно трудная и требует высоких энергозатрат. Часто сложные задачи необходимо выполнить в сжатые сроки. Программисты с рангом повыше несут ответственность за коллег и постоянно правят чужие ошибки.
     </p>
  <br>
      <h5>ИТ — это бизнес</h5>
      <br>
      <p>
       Современная ИТ-индустрия — это бизнес. Ведь компании зарабатывают большие деньги. Часто разработчики не делают ничего полезного для окружающей среды и людей. Поэтому, если ты альтруист, который просто устал на работе, не спеши на курсы программирования с нуля. Многие айтишники неохотно выходят за пределы своих профессиональных интересов.
     </p>
      <br>
       <h5>
     Спасибо, что дочитал до конца. Мы рады, что были полезны. 
      </h5>
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
        <div class="col-lg-4 col-md-7 align-self-center mb-30 trending-items col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="news1.php"><img src="../assets/images/news1.png" alt=""></a>
            </div>
             <div class="down-content">
              <h4 style="font-size: 19px;">5 причин учить английский язык айтишникам</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-7 align-self-center mb-30 trending-items col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="news2.php"><img src="../assets/images/news2.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <h4 style="font-size: 19px;">5 секретов, которые помогут новичку стать востребованным в ИТ</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-7 align-self-center mb-30 trending-items col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="news3.php"><img src="../assets/images/news3.jpg" alt=""></a>
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
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/js/isotope.min.js"></script>
  <script src="../assets/js/owl-carousel.js"></script>
  <script src="../assets/js/counter.js"></script>
  <script src="../assets/js/custom.js"></script>

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


