<?php
require_once './Server.php';

$query = $pdo->prepare("SELECT * FROM `users` WHERE `Phone` = ?");
$query->execute(array(
    $_POST['phone']
));

$result = $query->fetchAll(PDO::FETCH_ASSOC);

if (!count($result)) {
    echo 1;
    $query = $pdo->prepare("INSERT INTO `users` (`ID_Access_rights`, `Phone`, `Password`) VALUES (2, ?, ?)");
    $query->execute(array(
        $_POST['phone'],
        password_hash($_POST['password'], PASSWORD_DEFAULT)
    ));

    redir('../pages/index.php');
} else {
    redir('../pages/sign_up.php?error=user_exists');
}