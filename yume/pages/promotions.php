<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotions - Yume</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/colors.css">
</head>
<body style="font-family: 'Archivo', sans-serif; background-color: #FFFFFF; color: #1C1B19; margin: 0; padding: 0;">

    <!-- Подключаем единую шапку сайта -->
    <?php include 'HEADER.php'; ?>

    <main class="container" style="padding: 60px 20px; max-width: 1100px; margin: 0 auto;">
        <h1 style="font-size: 42px; font-weight: 700; margin-bottom: 40px; color: #1C1B19;">Special <span style="color: #9B0000;">Promotions</span></h1>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px; width: 100%;">
            <!-- Акция 1 -->
            <div style="border: 1px solid #E2E2E2; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column;">
                <img src="../assets/promo-sushi-1.jpg" alt="Promo 1" style="width: 100%; height: 250px; object-fit: cover;">
                <div style="padding: 25px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 22px; font-weight: 700; margin: 0 0 12px 0;">Buy two drinks get one free</h3>
                    <p style="font-size: 14px; color: #706E6A; line-height: 1.5; margin: 0 0 20px 0; flex-grow: 1;">Order any two signature cocktails or traditional Japanese teas, and receive a third absolutely free! Perfect choice for a dinner with friends.</p>
                    <span style="color: #9B0000; font-weight: 700; font-size: 14px;">Valid until: End of this week</span>
                </div>
            </div>

            <!-- Акция 2 -->
            <div style="border: 1px solid #E2E2E2; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column;">
                <img src="../assets/promo-banner-delivery.jpg" alt="Promo 2" style="width: 100%; height: 250px; object-fit: cover;">
                <div style="padding: 25px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 22px; font-weight: 700; margin: 0 0 12px 0;">Fast & Free Delivery -20%</h3>
                    <p style="font-size: 14px; color: #706E6A; line-height: 1.5; margin: 0 0 20px 0; flex-grow: 1;">Get a 20% discount on your first three mobile app orders. We deliver piping hot rolls straight to your doorstep within 45 minutes inside city borders.</p>
                    <span style="color: #9B0000; font-weight: 700; font-size: 14px;">Valid until: Permanent Offer</span>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
