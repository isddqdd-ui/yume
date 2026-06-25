<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина - Yume</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/colors.css">
    <style>
        .cart-page { font-family: 'Archivo', sans-serif; padding: 40px 0; background: #fff; }
        .cart-title { font-size: 32px; font-weight: 700; margin-bottom: 30px; color: #1C1B19; text-align: left; }
        .cart-container { display: flex; gap: 40px; align-items: flex-start; }
        
        .cart-main { flex: 1; border: 1px solid #E2E2E2; border-radius: 8px; padding: 25px; display: flex; align-items: center; gap: 20px; position: relative; min-height: 180px; }
        .cart-img-wrap { width: 140px; display: flex; align-items: center; }
        .cart-img-wrap img { width: 100%; object-fit: contain; }
        .cart-info { flex: 1; display: flex; flex-direction: column; justify-content: center; }
        .cart-info h3 { font-size: 20px; font-weight: 700; margin: 0 0 8px 0; color: #1C1B19; }
        .cart-info p { font-size: 14px; color: #706E6A; margin: 0 0 20px 0; max-width: 320px; line-height: 1.4; }
        
        .cart-actions { display: flex; align-items: center; gap: 25px; }
        .cart-price { font-size: 18px; font-weight: 700; color: #1C1B19; min-width: 70px; }
        .cart-counter { display: flex; align-items: center; gap: 12px; }
        .count-btn { background: none; border: none; font-size: 22px; color: #9B0000; font-weight: 700; cursor: pointer; width: 24px; height: 24px; display: flex; align-items: center; justify-content: center; }
        .count-input { width: 65px; text-align: center; border: 1px solid #9B0000; border-radius: 25px; padding: 5px; font-size: 14px; color: #1C1B19; font-weight: 700; outline: none; }
        
        .cart-right-controls { display: flex; flex-direction: column; align-items: flex-end; justify-content: space-between; height: 130px; position: absolute; right: 25px; top: 25px; }
        .cart-right-controls a { font-size: 13px; color: #A0A0A0; text-decoration: underline; }
        .cart-delete-btn { border: 1px solid #9B0000; color: #9B0000; background: none; padding: 8px 20px; border-radius: 25px; font-size: 13px; font-weight: 700; cursor: pointer; transition: all 0.2s; }
        .cart-delete-btn:hover { background: #9B0000; color: #FFFFFF; }
        
        .cart-sidebar { width: 320px; border: 1px solid #E2E2E2; border-radius: 8px; padding: 25px; display: flex; flex-direction: column; }
        .sidebar-row { display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px; }
        .sidebar-row span { font-size: 20px; font-weight: 700; color: #1C1B19; }
        .sidebar-delivery { font-size: 13px; color: #706E6A; margin-bottom: 25px; }
        .sidebar-delivery a { color: #1C1B19; text-decoration: underline; font-weight: 700; }
        .btn-order-submit { width: 100%; background: #9B0000; color: #fff; border: none; padding: 14px; border-radius: 25px; font-size: 16px; font-weight: 700; cursor: pointer; margin-bottom: 15px; transition: background 0.2s; }
        .btn-order-submit:hover { background: #1C1B19; }
        .sidebar-policy { font-size: 11px; color: #A0A0A0; line-height: 1.4; text-align: center; }
    </style>
</head>
<body>

    <!-- Подключаем единую шапку -->
    <?php include 'HEADER.php'; ?>

    <div class="container cart-page">
        <h2 class="cart-title">Cart</h2>
        <div class="cart-container">
            
            <div class="cart-main">
                <div class="cart-img-wrap">
                    <img src="../assets/roll-dragon.png" alt="Roll Dragon">
                </div>
                <div class="cart-info">
                    <h3>Roll "Dragon"</h3>
                    <p>The Dragon Roll is an inside-out sushi masterpiece.</p>
                    <div class="cart-actions">
                        <span class="cart-price">10$</span>
                        <div class="cart-counter">
                            <button class="count-btn bt_minus">-</button>
                            <input type="text" class="count-input quantity" value="1">
                            <button class="count-btn bt_plus">+</button>
                        </div>
                    </div>
                </div>
                <div class="cart-right-controls">
                    <a href="#">To Favorites</a>
                    <button class="cart-delete-btn">Delete</button>
                </div>
            </div>
            
            <div class="cart-sidebar">
                <div class="sidebar-row">
                    <span>Total</span>
                    <span>10 $</span>
                </div>
                <div class="sidebar-delivery">
                    Delivery: <a href="#">Choose delivery address</a>
                </div>
                <button class="btn-order-submit">Order</button>
                <div class="sidebar-policy">
                    I agree with the terms of the Rules for using the trading platform and the return policy
                </div>
            </div>
            
        </div>
    </div>

    <!-- Подключаем наш скрипт с валидацией залоченных кнопок 1-20 -->
    <script src="../js/hidden_text.js" defer></script>
</body>
</html>