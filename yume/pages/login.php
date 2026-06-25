<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Yume</title>
    <!-- Подключаем глобальные стили -->
    <link rel="stylesheet" href="../css/style.css">
    <style>
        /* Стили формы входа в точности как на вашем макете */
        .login-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #FFFFFF;
            font-family: 'Archivo', sans-serif;
        }
        .login-title {
            font-size: 36px;
            font-weight: 700;
            color: #1C1B19;
            margin-bottom: 5px;
            position: relative;
            text-align: center;
        }
        .login-card {
            width: 100%;
            max-width: 380px;
            background: #FFFFFF;
            border: 1px solid #E2E2E2;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.02);
            margin-top: 30px;
        }
        .login-form-wrap {
            padding: 40px 35px 30px 35px;
        }
        .login-input {
            width: 100%;
            padding: 14px 20px;
            border: 1px solid #D2D2D2;
            border-radius: 25px; /* Овальные инпуты */
            font-size: 15px;
            margin-bottom: 15px;
            outline: none;
            color: #1C1B19;
            font-family: 'Archivo', sans-serif;
        }
        .login-links {
            display: flex;
            flex-direction: column;
            gap: 5px;
            margin-top: 10px;
        }
        .login-links a {
            font-size: 13px;
            color: #A0A0A0;
            text-decoration: none;
        }
        .login-links a:hover {
            color: #9B0000;
        }
        .btn-login-submit {
            width: 100%;
            background-color: #9B0000; /* Ваш точный тёмно-красный цвет */
            color: #FFFFFF;
            border: none;
            padding: 16px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: background-color 0.2s;
            font-family: 'Archivo', sans-serif;
            border-radius: 0 0 8px 8px; /* Идеальное скругление нижней грани карточки */
        }
        .btn-login-submit:hover {
            background-color: #1C1B19; /* Графитовый при наведении */
        }
        /* Стиль для сообщения об ошибке */
        .error-message {
            color: #1C1B19;
            font-size: 18px;
            margin-top: 20px;
            font-weight: 400;
            text-align: center;
        }
    </style>
</head>
<body class="login-body">

    <h2 class="login-title">Login</h2>

    <div class="login-card">
        <!-- Данные отправляются строго в рабочий файл auth.php методом GET -->
        <form action="../php/auth.php" method="GET">
            <div class="login-form-wrap">
                <input type="tel" name="phone" placeholder="+7 (965) 432-70-17" class="login-input" required>
                <input type="password" name="password" placeholder="••••" class="login-input" required>
                
                <div class="login-links">
                    <a href="#">Forgot password?</a>
                    <a href="sign_up.php">Not registered?</a>
                </div>
            </div>
            <button type="submit" class="btn-login-submit">Log In</button>
        </form>
    </div>

    <!-- Блок динамического вывода ошибки -->
    <?php if (isset($_GET['error']) && $_GET['error'] == 'not_found'): ?>
        <p class="error-message">Пользователя не существует</p>
    <?php endif; ?>

</body>
</html>