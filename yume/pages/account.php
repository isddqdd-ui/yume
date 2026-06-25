<?php
// Подключаем ядро сервера
require_once '../php/Server.php';

// Защита страницы: если пользователь не авторизован — принудительно выкидываем на форму входа
if (!isset($_SESSION['USER'])) {
    redir('login.php');
}

// Получаем данные текущего юзера
$currentUser = $_SESSION['USER'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет - Yume</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/colors.css">
    <style>
        .account-body { font-family: 'Archivo', sans-serif; background-color: #FFFFFF; color: #1C1B19; margin: 0; padding: 0; }
        .account-card { max-width: 500px; margin: 50px auto; padding: 40px; border: 1px solid #E2E2E2; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.02); text-align: center; }
        .account-avatar { width: 100px; height: 100px; background-color: #9B0000; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 36px; font-weight: 700; margin: 0 auto 20px auto; }
        .account-phone { font-size: 20px; color: #1C1B19; font-weight: 700; margin-bottom: 10px; }
        .account-role { font-size: 14px; color: #706E6A; margin-bottom: 30px; text-transform: uppercase; letter-spacing: 1px; }
        .btn-logout { background-color: #1C1B19; color: #FFFFFF; border: none; padding: 12px 35px; font-size: 15px; font-weight: 700; border-radius: 25px; cursor: pointer; transition: background-color 0.2s; }
        .btn-logout:hover { background-color: #9B0000; }
    </style>
</head>
<body class="account-body">

    <!-- Подключаем шаблон единой шапки -->
    <?php include 'HEADER.php'; ?>

    <main class="container">
        <div class="account-card">
            <!-- В качестве аватарки берем первую букву или иконку -->
            <div class="account-avatar">👤</div>
            
            <!-- Выводим телефон из сессии базы данных db_yume -->
            <div class="account-phone"><?php echo htmlspecialchars($currentUser['Phone']); ?></div>
            
            <!-- Проверяем роль: если ID = 1, то это ADMIN, иначе USER -->
            <div class="account-role">
                Статус: <?php echo ($currentUser['ID_Access_rights'] == 1) ? 'Администратор' : 'Пользователь'; ?>
            </div>
            
            <!-- Кнопка вызывает скрипт выхода -->
            <button class="btn-logout" onclick="window.location.href='../php/logout.php'">Выйти из аккаунта</button>
        </div>
    </main>

</body>
</html>