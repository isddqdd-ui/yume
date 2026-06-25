<?php
// Подключаем ядро вашего сервера (Server.php содержит инициализацию $pdo)
require_once './Server.php';

// Функция уникального именования и загрузки картинок на сервер
function upload_image($file, $folder) {
    // Генерируем случайное уникальное имя, чтобы файлы с одинаковым именем не перезаписывали друг друга
    $name = (string)uniqid() . '_' . $file['name'];
    
    // Переносим файл из временного хранилища PHP в нашу постоянную папку активов
    copy($file['tmp_name'], '../' . $folder . '/' . $name);
    return $name;
}

// Проверяем, что форма была отправлена
if (isset($_POST['title'])) {
    
    // Запускаем загрузку картинки в папку assets/product_Images
    $fileName = upload_image($_FILES['file'], 'assets/product_Images');
    
    // Собираем текстовые данные из инпутов
    $name = trim($_POST['title']);
    $category_id = intval($_POST['category']);
    $description = trim($_POST['description']);
    $price = floatval($_POST['price']);
    $additional = trim($_POST['additional']);
    $weight = intval($_POST['weight']);
    $cooking_time = 15; // Стандартное время приготовления по умолчанию

    // Готовим строгий и безопасный SQL-запрос INSERT INTO к вашей таблице dishes
    $query = $pdo->prepare("INSERT INTO `dishes` 
        (`Name`, `ID_Category`, `Description`, `Price`, `Dishes_img`, `additional`, `cooking_in_minutes`, `weight_product`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        
    // Выполняем запись, передавая все параметры по порядку
    $query->execute([
        $name,
        $category_id,
        $description,
        $price,
        $fileName,
        $additional,
        $cooking_time,
        $weight
    ]);

    // Возвращаем администратора обратно на форму с флагом успешного завершения операции
    redir('../pages/control.php?success=1');
} else {
    redir('../pages/control.php');
}
?>