<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!-- Подключаем оригинальный шрифт Archivo из Google Fonts -->
<link href="https://googleapis.com" rel="stylesheet">

<!-- Отступы изменены на 20px 40px, а максимальная ширина возвращена к 1200px для идеального баланса -->
<header class="header" id="yume-main-header-unique" style="background-color: #FFFFFF !important; border-bottom: 1px solid #E2E2E2 !important; position: relative !important; z-index: 99999 !important; width: 100% !important; box-sizing: border-box !important; font-family: 'Archivo', sans-serif !important; display: block !important; margin: 0 !important; padding: 0 !important; box-shadow: none !important; transform: none !important;">
    <div class="container header__nav" style="display: flex !important; align-items: center !important; justify-content: space-between !important; padding: 20px 40px !important; margin: 0 auto !important; width: 100% !important; max-width: 1200px !important; box-sizing: border-box !important; background: none !important; border: none !important; box-shadow: none !important; height: auto !important;">
        
        <!-- Логотип Yume — фиксированные 24px -->
        <div class="header__logo" style="font-family: 'Archivo', sans-serif !important; font-size: 24px !important; font-weight: 700 !important; color: #1C1B19 !important; cursor: pointer !important; user-select: none !important; background: none !important; padding: 0 !important; margin: 0 !important;" onclick="window.location.href='index.php'">
            <span style="color: #9B0000 !important;">Y</span>ume
        </div>
        
        <!-- Меню навигации — чистый черный цвет, сброс всех внешних рамок -->
        <ul class="header__menu" style="display: flex !important; gap: 40px !important; list-style: none !important; margin: 0 !important; padding: 0 !important; align-items: center !important; background: none !important; border: none !important; box-shadow: none !important;">
            <li><a href="index.php" style="text-decoration: none !important; color: #1C1B19 !important; font-family: 'Archivo', sans-serif !important; font-size: 15px !important; font-weight: 700 !important; background: none !important; border: none !important; padding: 0 !important; margin: 0 !important; box-shadow: none !important;">Home</a></li>
            <li><a href="index.php#menu-anchor" style="text-decoration: none !important; color: #1C1B19 !important; font-family: 'Archivo', sans-serif !important; font-size: 15px !important; font-weight: 700 !important; background: none !important; border: none !important; padding: 0 !important; margin: 0 !important; box-shadow: none !important;">Menu</a></li>
            <li><a href="about_us.php" style="text-decoration: none !important; color: #1C1B19 !important; font-family: 'Archivo', sans-serif !important; font-size: 15px !important; font-weight: 700 !important; background: none !important; border: none !important; padding: 0 !important; margin: 0 !important; box-shadow: none !important;">About</a></li>
            <li><a href="promotions.php" style="text-decoration: none !important; color: #1C1B19 !important; font-family: 'Archivo', sans-serif !important; font-size: 15px !important; font-weight: 700 !important; background: none !important; border: none !important; padding: 0 !important; margin: 0 !important; box-shadow: none !important;">Promotions</a></li>
            <li><a href="news.php" style="text-decoration: none !important; color: #1C1B19 !important; font-family: 'Archivo', sans-serif !important; font-size: 15px !important; font-weight: 700 !important; background: none !important; border: none !important; padding: 0 !important; margin: 0 !important; box-shadow: none !important;">News</a></li>
        </ul>

        <!-- Интерактивный блок кнопок и корзины -->
        <div class="header__buttons" style="display: flex !important; align-items: center !important; gap: 25px !important; background: none !important; border: none !important; padding: 0 !important; margin: 0 !important; box-shadow: none !important;">
            
            <!-- Иконка корзины с баджем -->
            <a href="cart.php" style="position: relative !important; text-decoration: none !important; color: #1C1B19 !important; font-size: 22px !important; display: flex !important; align-items: center !important; background: none !important; border: none !important; padding: 0 !important; margin: 0 !important; box-shadow: none !important;">
                🛒 <span class="cart-count-badge" style="position: absolute !important; top: -8px !important; right: -10px !important; background: #9B0000 !important; color: #FFFFFF !important; font-family: 'Archivo', sans-serif !important; font-size: 11px !important; font-weight: 700 !important; padding: 2px 6px !important; border-radius: 50% !important; line-height: 1 !important; border: none !important; box-shadow: none !important;">0</span>
            </a>
            
            <!-- Кнопка авторизации — пропорциональные padding: 12px 28px -->
            <?php if (isset($_SESSION['USER'])): ?>
                <button class="btn-reservation" type="button" onclick="window.location.href='account.php'" style="background-color: #1C1B19 !important; color: #FFFFFF !important; border: none !important; padding: 12px 28px !important; font-size: 14px !important; font-weight: 700 !important; border-radius: 25px !important; cursor: pointer !important; font-family: 'Archivo', sans-serif !important; display: block !important; box-shadow: none !important; outline: none !important; height: auto !important; min-width: auto !important; margin: 0 !important;">Account</button>
            <?php else: ?>
                <button class="btn-reservation" type="button" onclick="window.location.href='login.php'" style="background-color: #9B0000 !important; color: #FFFFFF !important; border: none !important; padding: 12px 28px !important; font-size: 14px !important; font-weight: 700 !important; border-radius: 25px !important; cursor: pointer !important; font-family: 'Archivo', sans-serif !important; display: block !important; box-shadow: none !important; outline: none !important; height: auto !important; min-width: auto !important; margin: 0 !important;">Log In</button>
            <?php endif; ?>
            
        </div>
    </div>
</header>