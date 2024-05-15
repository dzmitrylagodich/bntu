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

// Обработка формы регистрации
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FirstName = $_POST['FirstName'];
    $SecondName = $_POST['SecondName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Проверка, существует ли уже пользователь с таким адресом электронной почты
    $sql_check_email = "SELECT * FROM users WHERE email='$email'";
    $result_check_email = $conn->query($sql_check_email);

    if ($result_check_email->num_rows > 0) {
        echo "Пользователь с таким адресом электронной почты уже существует";
    } else {
        // Добавление нового пользователя в базу данных
        $sql_register = "INSERT INTO users (FirstName, SecondName, email, password) VALUES ('$FirstName', '$SecondName', '$email', '$password')";
        if ($conn->query($sql_register) === TRUE) {
            // Регистрация прошла успешно, перенаправляем на главную страницу
            header("Location: ../index.php");
            exit();
        } else {
            echo "Ошибка при регистрации: " . $conn->error;
        }
    }
}

// Закрываем соединение с базой данных
$conn->close();
?>
