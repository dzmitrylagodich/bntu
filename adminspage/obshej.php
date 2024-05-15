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
    width: 60%;
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


  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="../index.php" class="logo">
                      <img src="../assets/images/logo_bntu_2021_green.svg" alt="" >
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
    <a style="margin-left: 20px;" class="pn" href="admin.php" class="active">Экзамены</a>
    </div>
    <div  style="display: flex; justify-content: center; align-items: center;">  
    <a style="margin-left: 20px;" class="pn" href="Plannab.php">План набора прошлого года</a>
    <a style="margin-left: 20px;" class="pn" href="Finance.php">Финансы</a>
    <a style="margin-left: 20px;" class="pn" href="Formofed.php">Форма обучения</a>
    <a style="margin-left: 20px;" class="pn" href="Programs.php">Программы</a>
    <a style="margin-left: 20px;" class="pn" href="SpecCol.php">Специальности колледжей</a>
    <a style="margin-left: 20px;" class="pn" href="Addmision.php">Поступление</a>
    <a style="margin-left: 20px;" class="pn" href="Users.php">Пользователи</a>
    </div>
</div>

<div style="display: flex; align-items: center; justify-content: center; margin-top: 50px;">
  <table id="dormsTable">
      <tr>
      <th id="idHeader">
          ID
      </th>
       <th id="nameHeader">
          Название
      </th>
        <th id="addressHeader">
          Адрес
      </th>
        <th id="capacityHeader">
          Колличество мест
      </th>
       <th id="collegeIdHeader">
          Колледж ID
      </th>
      <th>
          Изменить
      </th>
            <th>
          Удалить
      </th>
      </tr>    
  <?php
      $dorms = mysqli_query($conn, "SELECT * from `Dorms`");
      $dorms = mysqli_fetch_all($dorms);
      foreach ($dorms as $dorm) {
        ?>
      <tr>
      <td>
          <?=$dorm[0] ?>
      </td>
       <td>
          <?=$dorm[1] ?>
      </td>
      <td>
          <?=$dorm[2] ?>
      </td>
      <td>
          <?=$dorm[3] ?>
      </td>
      <td>
          <?=$dorm[4] ?>
      </td>
      <td>
          <a href="../updatefor/updateobsh.php?DormsID=<?= $dorm[0] ?>">Изменить</a>
      </td>
      <td>
          <a href="../admin/obsh/delete.php?DormsID=<?= $dorm[0] ?>">Удалить</a>
      </td>
      </tr>
  <?php
      }
  ?>
       
  </table>
  </div>

  <br><br>
  <h3 style="display: flex; align-items: center; justify-content: center;">Добавить Общежитие</h3>
  <br>
  <div style="display: flex; align-items: center; justify-content: center;"> 
<form action="../admin/obsh/create.php" method="post" >
        <label for="DormsID">ID</label>
        <input type="text" name="DormsID" id="DormsID" >
        <label for="Name">Название</label>
        <textarea name="Name" id="Name" ></textarea>
        <label for="Adress">Адрес</label>
        <textarea name="Adress" id="Adress" c></textarea>
        <label for="amountofspace">Количество мест</label>
        <input type="text" name="amountofspace" id="amountofspace" >
        <label for="CollegeID">Колледж ID</label>
        <input type="text" name="CollegeID" id="CollegeID" >
    <br><br>
    <button type="submit" class="btn btn-primary">Добавить</button>
</form>

  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Все права защищены. Разработал: Вагин Дмитрий. &nbsp;&nbsp;</p>
      </div>
    </div>
  </footer>
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/js/isotope.min.js"></script>
  <script src="../assets/js/owl-carousel.js"></script>
  <script src="../assets/js/counter.js"></script>
  <script src="../assets/js/custom.js"></script>
  </body>




<script>
document.addEventListener("DOMContentLoaded", function() {
  var table = document.getElementById("dormsTable");
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
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("dormsTable");
    switching = true;
    while (switching) {
      switching = false;
      rows = table.getElementsByTagName("tr");
      for (i = 1; i < (rows.length - 1); i++) {
        shouldSwitch = false;
        x = rows[i].getElementsByTagName("td")[columnIndex];
        y = rows[i + 1].getElementsByTagName("td")[columnIndex];
        var xValue = x.innerHTML.toLowerCase();
        var yValue = y.innerHTML.toLowerCase();
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