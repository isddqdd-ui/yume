<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News - Yume</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/colors.css">
</head>
<body style="font-family: 'Archivo', sans-serif; background-color: #FFFFFF; color: #1C1B19; margin: 0; padding: 0;">

    <!-- Подключаем единую шапку сайта -->
    <?php include 'HEADER.php'; ?>

    <main class="container" style="padding: 60px 20px; max-width: 900px; margin: 0 auto;">
        <h1 style="font-size: 42px; font-weight: 700; margin-bottom: 40px; color: #1C1B19;">Latest <span style="color: #9B0000;">News</span></h1>
        
        <div style="display: flex; flex-direction: column; gap: 40px; width: 100%;">
            <!-- НОВОСТЬ 1 -->
            <div class="news__row" style="display: flex !important; align-items: center !important; gap: 40px !important; width: 100% !important;">
                <!-- Жестко задаем ширину 260px и высоту 160px -->
                <div class="news__image-wrap" style="flex: 0 0 260px !important; width: 260px !important; height: 160px !important; overflow: hidden !important; border-radius: 8px !important;">
                    <img src="../assets/27.png" alt="Grand Opening" style="width: 100% !important; height: 100% !important; object-fit: cover !important; display: block !important;">
                </div>
                <div class="news__content" style="flex: 1 !important; display: flex !important; flex-direction: column !important; align-items: flex-start !important;">
                    <span class="news__date" style="font-size: 13px !important; color: #A0A0A0 !important; margin-bottom: 8px !important; font-family: 'Archivo', sans-serif !important;">JUNE 24, 2026</span>
                    <h3 class="news__subtitle" style="font-size: 22px !important; font-weight: 700 !important; color: #1C1B19 !important; margin: 0 0 12px 0 !important; font-family: 'Archivo', sans-serif !important; text-align: left !important;">Grand Opening of New Yume Branch!</h3>
                    <p class="news__desc" style="font-size: 15px !important; color: #706E6A !important; line-height: 1.6 !important; margin: 0 !important; font-family: 'Archivo', sans-serif !important; text-align: left !important;">We are thrilled to announce the opening of our newest location downtown. Stop by this weekend for a complimentary glass of traditional sake and special chef tasting platters.</p>
                </div>
            </div>

            <hr style="border: none !important; border-top: 1px solid #E2E2E2 !important; margin: 0 !important; width: 100% !important;">

            <!-- НОВОСТЬ 2 -->
            <div class="news__row" style="display: flex !important; align-items: center !important; gap: 40px !important; width: 100% !important;">
                <!-- Жестко задаем ТОЧНО ТАКИЕ ЖЕ 260px на 160px -->
                <div class="news__image-wrap" style="flex: 0 0 260px !important; width: 260px !important; height: 160px !important; overflow: hidden !important; border-radius: 8px !important;">
                    <img src="../assets/26.png" alt="Our New Executive Sushi Chef" style="width: 100% !important; height: 100% !important; object-fit: cover !important; display: block !important;">
                </div>
                <div class="news__content" style="flex: 1 !important; display: flex !important; flex-direction: column !important; align-items: flex-start !important;">
                    <span class="news__date" style="font-size: 13px !important; color: #A0A0A0 !important; margin-bottom: 8px !important; font-family: 'Archivo', sans-serif !important;">JUNE 15, 2026</span>
                    <h3 class="news__subtitle" style="font-size: 22px !important; font-weight: 700 !important; color: #1C1B19 !important; margin: 0 0 12px 0 !important; font-family: 'Archivo', sans-serif !important; text-align: left !important;">Meet Our New Executive Sushi Chef</h3>
                    <p class="news__desc" style="font-size: 15px !important; color: #706E6A !important; line-height: 1.6 !important; margin: 0 !important; font-family: 'Archivo', sans-serif !important; text-align: left !important;">Straight from Kyoto, Chef Kenji joins our family with over 15 years of artisan experience. Try his updated signature "Dragon Roll" recipe available in our menu starting today.</p>
                </div>
            </div>

        </div>
    </main>

</body>
</html>