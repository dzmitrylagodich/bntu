<?php
    require_once '../admin/connect.php';

    $ID = $_GET['ID'];

    $user = mysqli_query($conn, "SELECT * FROM `users` WHERE `ID` = '$ID'");

    $user = mysqli_fetch_assoc($user);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Обновить</title>
    
    <style>

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
    <form action="../admin/users/update.php" method="post">
        <p>ID</p>
        <input type="hidden" name="ID" value="<?= $user['ID'] ?>">
        <p>Имя</p>
        <textarea name="FirstName"><?= $user['FirstName'] ?></textarea><br><br>
        <p>Фамилимя</p>
        <textarea name="SecondName"><?= $user['SecondName'] ?></textarea><br><br>
        <p>Почта</p>
        <textarea name="email"><?= $user['email'] ?></textarea><br><br>
        <p>Пароль</p>
        <textarea name="password"><?= $user['password'] ?></textarea><br><br>

        <button type="submit">Обновить</button>
    </form>
</div>
</body>
</html>