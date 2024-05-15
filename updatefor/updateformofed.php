<?php
    require_once '../admin/connect.php';

    $FormID = $_GET['FormID'];

    $form = mysqli_query($conn, "SELECT * FROM `FormOfEd` WHERE `FormID` = '$FormID'");

    $form = mysqli_fetch_assoc($form);
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
    <form action="../admin/formofed/update.php" method="post">
        <p>ID</p>
        <input type="hidden" name="FormID" value="<?= $form['FormID'] ?>">
        <p>Название</p>
        <textarea name="FormName"><?= $form['FormName'] ?></textarea><br><br>
        <button type="submit">Обновить</button>
    </form>
</div>
</body>
</html>