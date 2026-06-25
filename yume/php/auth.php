<?php
// Подключаем ядро вашего сервера
require_once 'Server.php';

// Получаем данные из адресной строки (GET)
if (isset($_GET['phone']) && isset($_GET['password'])) {
    $phone = trim($_GET['phone']);
    $password = trim($_GET['password']);

    // Готовим безопасный SQL-запрос к вашей таблице users
    $query = $pdo->prepare("SELECT * FROM `users` WHERE `Phone` = ?");
    $query->execute([$phone]);
    
    // Вытаскиваем найденного пользователя в массив
    $user = $query->fetch(PDO::FETCH_ASSOC);

    // Проверяем пароль (учитывая хеширование из базы данных db_yume)
    if ($user && password_verify($password, $user['Password'])) {
        $_SESSION['USER'] = $user;
        redir('../pages/index.php');
    } else {
        // Если данные не совпали — возвращаем обратно на форму с флагом ошибки (Рисунок 6)
        redir('../pages/login.php?error=not_found');
    }
} else {
    redir('../pages/login.php');
}
?>