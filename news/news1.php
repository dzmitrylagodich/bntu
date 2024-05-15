
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




<h1 style="margin-top: 50px; font-size: 35px; font-family: Arial, sans-serif; " class="news-title">5 причин учить английский язык айтишникам</h1>

    <div class="container" style="padding-top: 30px;">
      <img class="mySlides" src="../assets/images/slider1.jpg">
      <img class="mySlides" src="../assets/images/slider2.jpg">
      <img class="mySlides" src="../assets/images/slider3.jpg">
    </div>

<div style="padding-top: 25px;"> 
  <div class="container" style="width: 1100px;">
      <div class="news-block">
    <div class="news-content">
      <p>Все знают, чтобы попасть в ИТ-компанию нужен английский. А вот для чего это нужно? Чтобы тебе было проще поставить цель для изучения иностранного языка, расскажем, для чего пригодятся знания. Также сориентируем, какой уровень языка необходим, чтобы работать на разных позициях в ИТ-сфере. </p>
      <br>
      <h5>Обучение</h5>
      <br>
      <p>
        Если ты собираешься начать карьеру разработчика, то уже на этапе освоения языков программирования знание языка пригодится. Ведь всё строится на базе ключевых слов, взятых из английского. Кроме того, чтобы развиваться в сфере технологий, тебе необходимо следить за обновлениями. Все они выпускаются на английском языке.
      </p>
      <br>
      <h5>Собеседование</h5>
      <br>
      <p>
        На собеседовании HR-специалист может перейти на английский язык, соответственно, ожидая того же и о вас. На этапе интервью с эйчаром, тебе скорее всего хватит среднего разговорного уровня Upper-Intermediate. Главное не стушеваться и перебороть стеснение. На техническом собеседовании старший разработчик или руководитель, захотят проверить твои теоретические знания и практические навыки. Поэтому тебе необходимо хорошо ориентироваться в определениях на английском и уметь грамотно донести свои мысли. Главное — уверенность!
      </p>
      <br>
      <h5>Документация</h5>
      <br>
      <p>
        В ИТ-компаниях вся документация по проектам ведётся на английском языке. Даже если ты джуниор в команде разработчиков или веб-дизайнер-новичок, практически каждый день ты будешь писать отчёты о проделанной работе. Поэтому и без английской грамматики в ИТ будет трудно.
      </p>
      <br>
      <h5>Общение</h5>
      <br>
      <p>
        Независимо от того разработчик ты, дизайнер или проджект-менеджер — умение общаться с иностранным заказчиком необходимо. Соответственно языком коммуникации будет английский. Даже если компания, в которую ты планируешь попасть, не работает на международном уровне, то рано или поздно, ты захочешь расти и работать на крупных иностранных проектах.
      </p>

      <br>
      <h5>Развитие</h5>
      <br>
      <p>
       Возможно, ты захочешь сделать большой скачок в карьере и отправиться в командировку. А может тебе предложат релокацию в зарубежный департамент твоей же компании. И единственным препятствием для переезда может оказаться недостаточно высокий уровень английского языка.
     </p>
     <p>
      И еще один из самых важных пунктов — это саморазвитие. Самые продвинутые конференции, видео-туториалы или онлайн-курсы мировых профессионалов создаются для англоговорящей аудитории. На крутых ивентах основным или единственным языком коммуникации также будет английский.
      </p>
      <p>
     Из хороших новостей: руководство ИТ-компаний заинтересовано в развитии своих сотрудников. У тебя будет возможность подтянуть знание языка на корпоративных курсах или получить бесплатное обучение в языковой школе. Зависит от того, какие плюшки предоставляет компания. Но, чтобы тебя взяли, позаботься хотя бы о базовом уровне языка B1 и знании профессиональной лексики.
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


