<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Yume</title>
    <!-- Подключаем глобальные стили -->
    <link rel="stylesheet" href="../css/style.css">
    <style>
        /* Стили формы регистрации в точности повторяют карточку входа */
        .register-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #FFFFFF;
            font-family: 'Archivo', sans-serif;
        }
        .register-title {
            font-size: 36px;
            font-weight: 700;
            color: #1C1B19;
            margin-bottom: 5px;
            text-align: center;
        }
        .register-card {
            width: 100%;
            max-width: 380px;
            background: #FFFFFF;
            border: 1px solid #E2E2E2;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.02);
            margin-top: 30px;
        }
        .register-form-wrap {
            padding: 40px 35px 30px 35px;
        }
        .register-input {
            width: 100%;
            padding: 14px 20px;
            border: 1px solid #D2D2D2;
            border-radius: 25px; /* Аккуратные овальные поля */
            font-size: 15px;
            margin-bottom: 15px;
            outline: none;
            color: #1C1B19;
            font-family: 'Archivo', sans-serif;
        }
        .register-links {
            display: flex;
            flex-direction: column;
            gap: 5px;
            margin-top: 10px;
        }
        .register-links a {
            font-size: 13px;
            color: #A0A0A0;
            text-decoration: none;
        }
        .register-links a:hover {
            color: #9B0000;
        }
        .btn-register-submit {
            width: 100%;
            background-color: #9B0000; /* Ваш фирменный тёмно-красный цвет */
            color: #FFFFFF;
            border: none;
            padding: 16px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: background-color 0.2s;
            font-family: 'Archivo', sans-serif;
            border-radius: 0 0 8px 8px; /* Скругление нижней грани */
        }
        .btn-register-submit:hover {
            background-color: #1C1B19; /* Графитовый при наведении */
        }
        .error-message {
            color: #9B0000;
            font-size: 16px;
            margin-top: 20px;
            font-weight: 700;
            text-align: center;
        }
    </style>
</head>
<body class="register-body">

    <h2 class="register-title">Sign Up</h2>

    <div class="register-card">
        <!-- Данные отправляются методом POST строго в ваш рабочий файл registration.php -->
        <form action="../php/registration.php" method="POST">
            <div class="register-form-wrap">
                <input type="tel" name="phone" placeholder="+7 (965) 432-70-17" class="register-input" required>
                <input type="password" name="password" placeholder="Create Password" class="register-input" required>
                
                <div class="register-links">
                    <a href="login.php">Already have an account? Log In</a>
                </div>
            </div>
            <button type="submit" class="btn-register-submit">Register</button>
        </form>
    </div>

    <!-- Блок динамического вывода ошибки уникальности телефона -->
    <?php if (isset($_GET['error']) && $_GET['error'] == 'user_exists'): ?>
        <p class="error-message">Пользователь с таким номером уже существует</p>
    <?php endif; ?>

</body>
</html>