
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




<h1 style="margin-top: 50px; font-size: 35px; font-family: Arial, sans-serif; " class="news-title">5 секретов, которые помогут новичку стать востребованным в ИТ</h1>

    <div class="container" style="padding-top: 30px;">
      <img class="mySlides" src="../assets/images/slider1.jpg">
      <img class="mySlides" src="../assets/images/slider2.jpg">
      <img class="mySlides" src="../assets/images/slider3.jpg">
    </div>

<div style="padding-top: 25px;"> 
  <div class="container" style="width: 1100px;">
      <div class="news-block">
    <div class="news-content">
      <p>Чтобы получить работу нужен опыт. Но для получения опыта нужна работа. Многие новички слышат фразу «Мы ищем кого-то более опытного», мотивации становится в разы меньше. Мы раскроем пять секретов, которые помогут разорвать этот порочный круг и начать карьеру в ИТ.</p>
      <br>
      <h5>Выбор близкого и понятного для себя</h5>
      <br>
      <p>
        Во время поиска работы многие новички ошибочно выбирают перспективные и высокооплачиваемые направления. И не обращают внимания на то, насколько лично им подходит эта сфера. В данном случае мы сталкиваемся с несколькими проблемами.
      </p>

      <p>
        Первая — высокая конкуренция. Чем перспективнее направление, тем больше в нём соискателей. Это значительно усложняет получение первой работы для человека без опыта. Вторая проблема заключается в несоответствии мышления и темперамента начинающего специалиста с направлением, в котором он планирует развиваться.
      </p>

      <p>
       Мы рекомендуем выбирать схожее с тем, чем вы занимались раньше. Например, если человеку было интересно рисовать или сочетать цвета, шансов преуспеть в веб-дизайне у него значительно больше, чем в тестировании и разработке. И наоборот.
      </p>
      <br>
      <img src="../assets/images/news2text.jpg" style="width: 700px; margin-left:150px; margin-bottom: 30px;">
      <br>
      <h5>Компенсация недостатка опыта другими навыками</h5>
      <br>
      <p>
        Один из главных критериев для работодателя при поиске нового сотрудника — выгода. Кроме основных профессиональных навыков, должны быть другие скилы. Например, можно сделать акцент на владение иностранным языком (или даже несколькими), умение планировать, хорошую мотивацию и высокую обучаемость. Софт скилы нынче ценятся.
      </p>
      <p>
        Многие компании принимают на работу начинающих специалистов именно благодаря тому, что у них есть опыт в других сферах или желание развиваться. Таких сотрудников легче обучить в соответствии с требованиями компании. И цена их труда будет значительно ниже на старте, чем у опытных специалистов.
      </p>
      <br>
      <h5>Постоянное обучение</h5>
      <br>
      <p>
        Одним из лучших способов получить опыт являются ИТ-курсы. Они помогут определиться, подходит ли человеку выбранная сфера, какими навыками он должен обладать, что может помешать ему в развитии и получении опыта. Это также даёт возможность напрямую общаться с действующими специалистами ИТ-сферы.
      </p>
      <p>
        Самообучение на начальном этапе не очень продуктивно. Информация в интернете подаётся отрывистыми блоками, смешиваясь, а иногда и вовсе противоречит сама себе. Поэтому такой способ подойдёт скорее для продолжающих специалистов.
      </p>
      <p>
        Постоянное развитие и прокачивание своих навыков позволяет набраться теоретического опыта, который потом можно будет применить на практике. Например, можно выполнять тестовые задания разных компаний. Они часто публикуются в сети с пояснениями от других специалистов.
      </p>
      <br>
      <h5>Создание кейсов</h5>
      <br>
      <p>
       Вопреки распространённому мнению, новички в ИТ зарабатывают не золотые горы, а лишь опыт. Изначально оплата труда может быть низкой. Но стоит помнить о том, что лучше иметь не очень прибыльную работу сейчас, чтобы потом получить больше, чем не иметь вообще никакой.
      </p>
      <p>
        При приёме компании изучают не кредитную историю соискателя, а его портфолио. Можно попробовать себя на фриланс-бирже или поискать заказы среди друзей и знакомых. Да, оплата такого труда будет ниже, но у вас всегда будет право на ошибку и возможность получить опыт и кейс, который в будущем можно представить работодателю.
      </p>
      <br>
      <h5>Общение</h5>
      <br>
      <p>
       ИТ-сфера, как и многие другие, строится на взаимодействии с людьми. Важно постоянно общаться с другими специалистами. Это не только поможет перенять их опыт, но и станет возможностью заявить о себе. Многие компании не публикуют информацию о вакансиях в открытых источниках. Но всегда можно узнать об этом от действующих сотрудников.
     </p>
     <p>
      В большинстве своём эти специалисты тоже когда-то сталкивались с проблемой поиска первой работы, поэтому могут рассказать о том, как проще найти её решение: подсказать курсы, направление, в котором стоит двигаться. И не стоит забывать о «сарафанном радио».
      </p>
      <p>
     Не нужно откладывать в долгий ящик. Можно уже сейчас записаться на курсы или заняться поиском бесплатной стажировки для начинающих. Не стоит бояться ошибиться. Всё великое начиналось с малого, а все гениальные специалисты когда-то были новичками.
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


