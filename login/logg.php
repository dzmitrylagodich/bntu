<?php
session_start();

// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bntu";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Обработка формы входа
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Поиск пользователя в базе данных
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Пользователь найден, устанавливаем сеанс
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['FirstName'] = $user['FirstName'];
        $_SESSION['SecondName'] = $user['SecondName'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['logged_in'] = true;

        // Перенаправляем на главную страницу
        header("Location: ../index.php");
        exit();
    } else {
        echo "Неверный адрес электронной почты или пароль";
    }
}
?>