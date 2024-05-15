<?php
session_start();

// Проверяем, авторизован ли пользователь
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Если пользователь авторизован, получаем данные из сессии
    $FirstName = $_SESSION['FirstName'];
    $SecondName = $_SESSION['SecondName'];
    $email = $_SESSION['email'];
    $role = $_SESSION['role'];
} else {
    // Если пользователь не авторизован, перенаправляем на страницу входа
    header("Location: login/logregform.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль пользователя</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
        }
        p {
            margin-bottom: 10px;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #1bb262;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #1bb262;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Профиль пользователя</h1>
        <p><strong>Имя:</strong> <?php echo htmlspecialchars($FirstName); ?></p>
        <p><strong>Фамилия:</strong> <?php echo htmlspecialchars($SecondName); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        <a href="login/logout.php" class="btn">Выйти</a>
    </div>
</body>
</html>
