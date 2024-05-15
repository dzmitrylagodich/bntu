<?php 

require_once '../admin/connect.php';

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>BNTU Colleges</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
            <style>
/* Основные стили для таблицы */
  table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #ddd;
  }
  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  th {
    background-color: #f2f2f2;
  }
  /* Стили для ссылок */
  a {
    text-decoration: none;
    color: #333;
  }
  a:hover {
    color: #666;
  }
  /* Стили для родительского контейнера */
  .table-container {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 50px;
  }

  /* Основные стили для формы */
  .form-container {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 50px;
  }
  form {
    width: 400px;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #f9f9f9;
  }
  p {
    margin-top: 10px;
  }
  input[type="text"],
  textarea {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: none  ; /* Добавлено свойство для изменения размера */
  }
  button[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    background-color: #000;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  button[type="submit"]:hover {
    background-color: #1bb262;
  }
  
  .ssilki {
    margin-top: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .ssilki a {
    margin: 5px;
    padding: 5px 10px;
    border-radius: 20px;
    text-decoration: none;
    color: black;
    transition: border-color 0.3s;
  }
  .ssilki a:hover {
    border: 2px solid #1bb262; /* Овальная граница при наведении */
  }
    </style>
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
                    <a href="index.php" class="logo">
                        <img src="assets/images/logo_bntu_2021_green.svg" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                     <ul class="nav">
                      <li><a href="../index.php" class="active">Главная</a></li>
                      <li><a href="../shop.php">Филиалы БНТУ</a></li>
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
                      <li><a href="#">Вход</a></li>
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
          <h3>МИНСКИЙ ГОСУДАРСТВЕННЫЙ ТЕХНОЛОГИЧЕСКИЙ КОЛЛЕДЖ</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="single-product section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="../assets/coll/mgtk.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <h4>МИНСКИЙ ГОСУДАРСТВЕННЫЙ ТЕХНОЛОГИЧЕСКИЙ КОЛЛЕДЖ</h4>
          <p>
            Минский государственный технологический колледж – это учебное заведение, ставящее перед собой задачу подготовки специалистов в области технических наук и инновационных технологий. Наш колледж предлагает разнообразные образовательные программы, охватывающие как теоретические основы, так и практические навыки, необходимые для успешной карьеры в современной промышленности и научных исследованиях. Профессиональный преподавательский состав и современное оборудование обеспечивают высокий уровень обучения, что позволяет нашим выпускникам достигать выдающихся результатов и вносить существенный вклад в развитие технологического прогресса в стране.
          </p>
            <ul>
            <li><span>Адрес:</span>  г. Минск, ул. Красная, 19б</li>
            <li><span>Телефон:</span> +375 (17) 337 78 15; +375-(17)-363 88 36</li>
            <li><span>E-mail:</span> mstc@bntu.by</li>
            <li><span>Сайт:</span> <a href="#">mstc.bntu.by/ru/</a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <div class="sep"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="more-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Дальнейшее поступление</button>
                  </li>
                
                </ul>
              </div>              
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                <div style="display: flex; align-items: center; justify-content: center; margin-top: 50px;">
  <table>
      <tr>
      <th>
          ID Программы
      </th>
       <th>
          ID Специальности БНТУ
      </th>
      </tr>    
  <?php
      $adds = mysqli_query($conn, "SELECT  p.Name AS ProgramName, sb.Name AS SpecialityName
FROM (Admission a 
      JOIN Programs p ON a.programID = p.ProgramID)
JOIN SpecialityBntu sb ON a.SpecialityBntuID = sb.SpecialityBntuID
JOIN СollegeSpecialties cs ON p.ProgramID = cs.ProgramID 
WHERE cs.collegeID = 6;");
      $adds = mysqli_fetch_all($adds);
      foreach ($adds as $add) {
        ?>
      <tr>
      <td>
          <?=$add[0] ?>
      </td>
       <td>
          <?=$add[1] ?>
      </td>

      
      </tr>
  <?php
      }
  ?>
       
  </table>
  </div>
                </div>
         
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
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/js/isotope.min.js"></script>
  <script src="../assets/js/owl-carousel.js"></script>
  <script src="../assets/js/counter.js"></script>
  <script src="../assets/js/custom.js"></script>

  </body>
</html>