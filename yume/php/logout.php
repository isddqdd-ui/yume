<?php
// Подключаем ядро сервера
require_once 'Server.php';

// Полностью уничтожаем сессию авторизации
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy();

// Перенаправляем пользователя на главную страницу как гостя
redir('../pages/index.php');
?>