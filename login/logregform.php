<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>BNTU College</title>
</head>

<body>
        
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="regg.php" method="post">
                <h1>Создать аккаунт</h1>
                <input type="text" name="FirstName"  id="FirstName" placeholder="FirstName" required>
                <input type="text" name="SecondName"  id="SecondName" placeholder="SecondName" required>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <button type="submit">Регистрация</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="logg.php" method="post">
                <h1>Вход</h1>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <button type="submit">Войти</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Добро пожаловать!</h1>
                    <p>Введите свои личные данные, чтобы использовать все возможности сайта</p>
                    <button class="hidden" id="login">Войти в аккаунт</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Привет Друзья!</h1>
                    <p>Зарегистрируйтесь, указав свои личные данные, чтобы использовать все функции сайта.</p>
                    <button class="hidden" id="register">Регистрация</button>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
