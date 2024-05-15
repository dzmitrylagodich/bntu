<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Панель Администратора</title>

    
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
    width: 70%;
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

<?php 

require_once '../admin/connect.php';

?>
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
                    <a href="../index.php" class="logo">
                      <img src="../assets/images/logo_bntu_2021_green.svg" alt="" >
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
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
                        echo '<li><a href="admin.php">Панель администратора</a></li>';
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
          <h3>Панель Администратора</h3>
        </div>
      </div>
    </div>
  </div>

<div class="ssilki">
    <div style="display: flex; justify-content: center; align-items: center; margin:20px;"> 
    <a style="margin-left: 20px;" class="pn" href="obshej.php" >Общежития</a>
    <a style="margin-left: 20px;" class="pn" href="fakultets.php">Факультеты</a>
    <a style="margin-left: 20px;" class="pn" href="colleges.php">Колледжи</a>
    <a style="margin-left: 20px;" class="pn" href="Entrysub.php">Вступительные предметы</a>
    <a style="margin-left: 20px;" class="pn" href="Spec.php">Специальности БНТУ</a>
    <a style="margin-left: 20px;" class="pn" href="admin.php" >Экзамены</a>
    </div>
    <div  style="display: flex; justify-content: center; align-items: center;">  
    <a style="margin-left: 20px;" class="pn" href="Plannab.php">План набора прошлого года</a>
    <a style="margin-left: 20px;" class="pn" href="Finance.php">Финансы</a>
    <a style="margin-left: 20px;" class="pn" href="Formofed.php">Форма обучения</a>
    <a style="margin-left: 20px;" class="pn" href="Programs.php" class="active">Программы</a>
    <a style="margin-left: 20px;" class="pn" href="SpecCol.php">Специальности колледжей</a>
    <a style="margin-left: 20px;" class="pn" href="Addmision.php">Поступление</a>
    <a style="margin-left: 20px;" class="pn" href="Users.php">Пользователи</a>
    </div>
</div>

<div style="display: flex; align-items: center; justify-content: center; margin-top: 50px;">
  <table id="programtable">
      <tr>
      <th id="idtable">
          ID
      </th>
       <th id="idname">
          Название
      </th>
       <th id="plan">
          План набора
      </th>
       <th id="srok">
          Срок обучения
      </th>
       <th id="base">
          База
      </th>
      <th id="form">
          Форма обучения
      </th>
      <th id="finform">
          Финансы
      </th>
      <th id="exam">
          Экзамен
      </th>
      <th id="plan">
          План набора прошлого года
      </th>
      <th>
          Изменить
      </th>
            <th>
          Удалить
      </th>
      </tr>    
  <?php
      $programs = mysqli_query($conn, "SELECT * from `Programs`");
      $programs = mysqli_fetch_all($programs);
      foreach ($programs as $program) {
        ?>
      <tr>
      <td>
          <?=$program[0] ?>
      </td>
       <td>
          <?=$program[1] ?>
      </td>
        <td>
          <?=$program[2] ?>
      </td>
        <td>
          <?=$program[3] ?>
      </td>
        <td>
          <?=$program[4] ?>
      </td>
        <td>
          <?=$program[5] ?>
      </td>
        <td>
          <?=$program[6] ?>
      </td>
        <td>
          <?=$program[7] ?>
      </td>
        <td>
          <?=$program[8] ?>
      </td>

      <td>
          <a href="../updatefor/updateprograms.php?ProgramID=<?= $program[0] ?>">Изменить</a>
      </td>
      <td>
          <a href="../admin/Programs/delete.php?ProgramID=<?= $program[0] ?>">Удалить</a>
      </td>
      </tr>
  <?php
      }
  ?>
       
  </table>
  </div>

  <br><br>
  <h3 style="display: flex; align-items: center; justify-content: center;">Добавить новую программу</h3>
  <div style="display: flex; align-items: center; justify-content: center;"> 
  <form action="../admin/programs/create.php" method="post">
      <p>ID</p>
      <input type="text" name="ProgramID">
      <p>Название</p>
      <textarea name="Name"></textarea><br><br>
      <p>План набора</p>
      <textarea name="ReceptionPlan"></textarea><br><br>
      <p>Срок обучения</p>
      <textarea name="TrainPeriod"></textarea><br><br>
      <p>База</p>
      <textarea name="Base"></textarea><br><br>
      <p>Форма обучения</p>
      <textarea name="FormID"></textarea><br><br>
      <p>Финансы</p>
      <textarea name="MoneyID"></textarea><br><br>
      <p>Экзамены</p>
      <textarea name="ExamID"></textarea><br><br>
      <p>План набора прошлого года</p>
      <textarea name="AdmissionPlanOfLastYearID"></textarea><br><br>
      <button type="submit" style="display: flex; justify-content: center; align-items: center;">Добавить</button>    
  </form>
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
  <script>
document.addEventListener("DOMContentLoaded", function() {
  var table = document.getElementById("programtable");
  var headers = table.getElementsByTagName("th");
  var sortDirections = [];

  for (var i = 0; i < headers.length; i++) {
    sortDirections.push(null); // Для каждого столбца запоминаем направление сортировки
    headers[i].addEventListener("click", function() {
      var columnIndex = this.cellIndex;
      sortTable(columnIndex);
    });
  }

  function sortTable(columnIndex) {
    var table, rows, switching, i, shouldSwitch;
    table = document.getElementById("programtable");
    switching = true;
    while (switching) {
      switching = false;
      rows = table.rows;
      for (i = 1; i < (rows.length - 1); i++) {
        shouldSwitch = false;
        var x = rows[i].getElementsByTagName("td")[columnIndex];
        var y = rows[i + 1].getElementsByTagName("td")[columnIndex];
        var xValue = x.innerHTML.toLowerCase();
        var yValue = y.innerHTML.toLowerCase();

        // Проверяем, являются ли значения числами
        var xNum = parseFloat(xValue);
        var yNum = parseFloat(yValue);

        if (!isNaN(xNum) && !isNaN(yNum)) { // Если оба значения являются числами
          if (sortDirections[columnIndex] === null || sortDirections[columnIndex] === "asc") {
            if (xNum > yNum) {
              shouldSwitch = true;
              break;
            }
          } else {
            if (xNum < yNum) {
              shouldSwitch = true;
              break;
            }
          }
        } else { // Если значения не являются числами, сравниваем как строки
          if (sortDirections[columnIndex] === null || sortDirections[columnIndex] === "asc") {
            if (xValue > yValue) {
              shouldSwitch = true;
              break;
            }
          } else {
            if (xValue < yValue) {
              shouldSwitch = true;
              break;
            }
          }
        }
      }
      if (shouldSwitch) {
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
      }
    }
    // Обновляем направление сортировки
    if (sortDirections[columnIndex] === null || sortDirections[columnIndex] === "asc") {
      sortDirections[columnIndex] = "desc";
    } else {
      sortDirections[columnIndex] = "asc";
    }
  }
});
</script>


</html>