<?php
    require_once '../admin/connect.php';

    $collegeID = $_GET['collegeID'];

    $colleg = mysqli_query($conn, "SELECT * FROM `colleges` WHERE `collegeID` = '$collegeID'");

    $colleg = mysqli_fetch_assoc($colleg);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Обновить</title>
        <style>
/* Основные стили для формы */
.form-container {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh; /* Чтобы форма была по центру вертикально */
}

form {
  width: 400px;
  padding: 20px;
  border: 2px solid #1bb262; /* Рамка вокруг формы */
  border-radius: 8px;
  background-color: transparent; /* Прозрачный фон */
  color: black; /* Цвет текста */
}

p {
  margin-top: 10px;
}

input[type="text"],
textarea {
  width: calc(100% - 16px);
  padding: 8px;
  margin-top: 5px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: none;
}

button[type="submit"] {
  width: calc(100% - 16px);
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


    </style>
</head>
<body>
 <h2 style="display: flex; align-items: center; justify-content: center;">Обновить</h2>
       <div style="display: flex; align-items: center; justify-content: center;">
    <form action="../admin/colleges/update.php" method="post">
        <input type="hidden" name="collegeID" value="<?= $colleg['collegeID'] ?>">
        <p>Название</p>
        <textarea name="collegeName"><?= $colleg['collegeName'] ?></textarea><br><br>
        <p>Адрес</p>
        <textarea name="Adress"><?= $colleg['Adress'] ?></textarea><br><br>
        <p>Директор</p>
        <textarea name="Director"><?= $colleg['Director'] ?></textarea><br><br>
        <p>Город</p>
        <textarea name="City"><?= $colleg['City'] ?></textarea><br><br>
        <p>Телефон</p>
        <textarea name="tell"><?= $colleg['tell'] ?></textarea><br><br>
        <p>Почта</p>
        <textarea name="email"><?= $colleg['email'] ?></textarea><br><br>
        <button type="submit">Обновить</button>
    </form>
</div>
</body>
</html>