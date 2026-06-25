<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель администратора - Yume</title>
    <!-- Подключаем глобальные стили -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/colors.css">
    <style>
        .control-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #FFFFFF;
            font-family: 'Archivo', sans-serif;
            padding: 20px;
        }
        .control-title {
            font-size: 32px;
            font-weight: 700;
            color: #1C1B19;
            margin-bottom: 5px;
            text-align: center;
        }
        .control-card {
            width: 100%;
            max-width: 450px;
            background: #FFFFFF;
            border: 1px solid #E2E2E2;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.02);
            margin-top: 25px;
        }
        .control-form-wrap {
            padding: 35px 35px 25px 35px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .control-label {
            font-size: 13px;
            color: #706E6A;
            font-weight: 700;
            margin-bottom: -5px;
        }
        .control-input {
            width: 100%;
            padding: 12px 20px;
            border: 1px solid #D2D2D2;
            border-radius: 25px; /* Овальный стиль инпутов */
            font-size: 14px;
            outline: none;
            color: #1C1B19;
            font-family: 'Archivo', sans-serif;
        }
        .control-select {
            width: 100%;
            padding: 12px 20px;
            border: 1px solid #D2D2D2;
            border-radius: 25px;
            font-size: 14px;
            outline: none;
            color: #1C1B19;
            font-family: 'Archivo', sans-serif;
            background-color: #fff;
            cursor: pointer;
        }
        .control-textarea {
            width: 100%;
            padding: 12px 20px;
            border: 1px solid #D2D2D2;
            border-radius: 15px;
            font-size: 14px;
            outline: none;
            color: #1C1B19;
            font-family: 'Archivo', sans-serif;
            min-height: 90px;
            resize: vertical;
        }
        .btn-control-submit {
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
            border-radius: 0 0 8px 8px;
        }
        .btn-control-submit:hover {
            background-color: #1C1B19; /* Графитовый при наведении */
        }
        .success-message {
            color: #1C1B19;
            font-size: 16px;
            margin-top: 20px;
            font-weight: 700;
            text-align: center;
        }
        .back-link {
            margin-top: 15px;
            font-size: 14px;
            color: #A0A0A0;
            text-decoration: none;
        }
        .back-link:hover {
            color: #9B0000;
        }
    </style>
</head>
<body class="control-body">

    <!-- Подключаем шапку, чтобы админ мог легко вернуться на главную -->
    <?php include 'HEADER.php'; ?>

    <h2 class="control-title">Create Product</h2>

    <div class="control-card">
        <!-- Форма отправляет файл и текстовые данные в обработчик createProduct.php методом POST -->
        <form action="../php/createProduct.php" method="POST" enctype="multipart/form-data">
            <div class="control-form-wrap">
                
                <span class="control-label">Фотография товара:</span>
                <input type="file" name="file" class="control-input" style="padding: 8px 15px;" required>
                
                <span class="control-label">Название блюда:</span>
                <input type="text" name="title" placeholder="Title dishes" class="control-input" required>
                
                <span class="control-label">Категория меню:</span>
                <select name="category" class="control-select">
                    <option value="1">Bestseller</option>
                    <option value="2">New</option>
                </select>
                
                <span class="control-label">Дополнительная информация:</span>
                <input type="text" name="additional" placeholder="Additional information" class="control-input" required>
                
                <span class="control-label">Цена ($):</span>
                <input type="text" name="price" placeholder="Price" class="control-input" required>
                
                <span class="control-label">Вес (грамм):</span>
                <input type="number" name="weight" placeholder="Weight" class="control-input" required>
                
                <span class="control-label">Описание состава:</span>
                <textarea name="description" placeholder="Description" class="control-textarea" required></textarea>
                
            </div>
            <button type="submit" class="btn-control-submit">Создать</button>
        </form>
    </div>

    <!-- Вывод уведомления об успешном добавлении товара -->
    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
        <p class="success-message">🎉 Блюдо успешно добавлено в базу данных!</p>
    <?php endif; ?>

    <a href="index.php" class="back-link">← Вернуться на главную страницу</a>

</body>
</html>