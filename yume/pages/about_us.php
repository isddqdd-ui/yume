<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Yume</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/colors.css">
</head>
<body style="font-family: 'Archivo', sans-serif; background-color: #FFFFFF; color: #1C1B19; margin: 0; padding: 0;">

    <!-- Подключаем единую шапку -->
    <?php include 'HEADER.php'; ?>

    <main class="container" style="padding: 60px 20px; max-width: 800px; margin: 0 auto;">
        <h1 style="font-size: 42px; font-weight: 700; margin-bottom: 25px;">About <span style="color: #9B0000;">Yume</span></h1>
        
        <!-- Отступ под первым абзацем зафиксирован на 20px -->
        <p style="font-size: 16px; color: #706E6A; line-height: 1.7; margin: 0 0 20px 0 !important; padding: 0 !important;">Welcome to Yume, where culinary tradition meets modern elegance. Our restaurant is dedicated to crafting premium Japanese cuisine using only the freshest ingredients sourced daily from trusted historical markets.</p>
        
        <!-- Отступ от второго абзаца до кнопки зафиксирован строго на 35px -->
        <p style="font-size: 16px; color: #706E6A; line-height: 1.7; margin: 0 0 35px 0 !important; padding: 0 !important;">Every single roll, sushi masterpiece, and artisan side dish is prepared by our master chefs with absolute precision and an unyielding commitment to perfection. We promise an exquisite dining experience that brings the authentic flavors of Japan straight to your table.</p>
        
        <!-- У кнопки убран ломающий margin-top, теперь она стоит ровно -->
        <button class="btn-capsule" onclick="window.location.href='index.php#menu-anchor'" style="background-color: #1C1B19; color: #fff; border: none; padding: 14px 35px; border-radius: 50px; font-weight: 700; cursor: pointer; margin: 0 !important;">Explore Our Menu</button>
    </main>

</body>
</html>