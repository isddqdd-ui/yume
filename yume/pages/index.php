<?php
// Подключаем ядро вашего сервера
require_once '../php/Server.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yume - Japanese Food Restaurant</title>
</head>
<body>

     <!-- Принудительный сброс кэша страницы -->
    <?php 
    header("Cache-Control: no-cache, must-revalidate"); 
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    include 'HEADER.php'; 
    ?>

     <main>

        <!-- СЕКЦИЯ 1: ГЛАВНЫЙ БАННЕР (HERO) – ПОЛНОЕ ВЫРАВНИВАНИЕ ШАПКИ И ТЕКСТА -->
        <section class="hero-section" style="margin-top: 0 !important; clear: both !important; padding: 60px 0 !important; background-color: #FFFFFF !important; background-image: url('../assets/promise-pagoda.png') !important; background-repeat: no-repeat !important; background-position: 5% center !important; background-size: 28% !important; position: relative !important; font-family: 'Archivo', sans-serif !important; width: 100% !important; box-sizing: border-box !important;">
            <div class="container hero__wrap" style="max-width: 1100px !important; margin: 0 auto !important; display: flex !important; align-items: center !important; justify-content: space-between !important; width: 100% !important; gap: 40px !important; box-sizing: border-box !important;">
                
                <!-- Левый блок: Текст и кнопка -->
                <div class="hero__content" style="max-width: 500px !important; display: flex !important; flex-direction: column !important; align-items: flex-start !important; z-index: 2 !important;">
                    <!-- Первое слово "Japanese" перекрашено в фирменный тёмно-красный цвет -->
                    <h1 class="hero__title" style="font-size: 56px !important; line-height: 1.15 !important; font-weight: 700 !important; color: #1C1B19 !important; margin: 0 0 25px 0 !important; text-align: left !important;">
                        <span style="color: #9B0000 !important;">Japanese</span> <br>Food <br>Restaurant
                    </h1>
                    
                    <!-- Описание: естественный и красивый перенос ровно в 3 строки (слово Nec на третьей строчке) -->
                    <p class="hero__text" style="font-size: 15px !important; color: #706E6A !important; line-height: 1.6 !important; margin: 0 0 35px 0 !important; text-align: left !important; max-width: 440px !important;">
                        Lorem ipsum dolor sit amet, consectetur. Ultricies congue ac vivamus duis aliquam ultrices mauris adipiscing. Nec nulla tincidunt integer dui euismod.
                    </p>
                    
                    <button class="btn-capsule" onclick="window.location.href='#menu-anchor'" type="button" style="background-color: #1C1B19 !important; color: #FFFFFF !important; border: none !important; padding: 14px 35px !important; font-size: 15px !important; font-weight: 700 !important; border-radius: 50px !important; cursor: pointer !important;">Check Menu</button>
                </div>
                
                <!-- Правый блок: Контейнер картинки без обрезания краев 3D элементов и со сдвигом вправо -->
                <div class="hero__image-box" style="flex: 1 !important; display: flex !important; align-items: center !important; justify-content: center !important; min-width: 400px !important; position: relative !important; height: 450px !important; z-index: 2 !important; transform: translateX(35px) !important;">
                    
                    <!-- Серая круглая подложка исходного размера (450px) на заднем плане -->
                    <div class="hero__circle-bg" style="position: absolute !important; width: 450px !important; height: 450px !important; background-color: #F4F4F4 !important; border-radius: 50% !important; z-index: 1 !important; top: 50% !important; left: 50% !important; transform: translate(-50%, -50%) !important; filter: drop-shadow(0 10px 25px rgba(0,0,0,0.02)) !important;"></div>
                    
                    <!-- Картинка с вылетающими элементами на переднем плане без overflow: hidden -->
                    <img src="../assets/hero-flying-sushi.png" alt="Yume Flying Sushi" class="hero__sushi-img" style="position: relative !important; z-index: 5 !important; width: 100% !important; max-width: 450px !important; height: auto !important; object-fit: contain !important; display: block !important; margin: 0 auto !important; overflow: visible !important;">
                
                </div>
                
            </div>
        </section>
           <!-- СЕКЦИЯ 2: ОБЕЩАНИЯ (OUR PROMISE) – ВОЗВРАТ ИСХОДНОГО МАСШТАБА ПАГОДЫ -->
        <section class="promise-section" style="padding: 60px 0 !important; background-color: #FFFFFF !important; background-image: url('../assets/promise-pagoda.png') !important; background-repeat: no-repeat !important; background-position: 95% center !important; background-size: 28% !important; position: relative !important; width: 100% !important; overflow: hidden !important; font-family: 'Archivo', sans-serif !important;">
            <div class="container promise__wrap" style="max-width: 1100px !important; margin: 0 auto !important; display: flex !important; align-items: center !important; justify-content: space-between !important; width: 100% !important; gap: 40px !important; flex-direction: row-reverse !important; box-sizing: border-box !important;">
                
                <!-- Правый блок: Контент обещаний -->
                <div class="promise__content" style="max-width: 500px !important; display: flex !important; flex-direction: column !important; align-items: flex-start !important; z-index: 2 !important; transform: translateX(-30px) !important;">
                    <h2 class="section-title" style="font-family: 'Archivo', sans-serif !important; font-size: 56px !important; line-height: 1.15 !important; font-weight: 700 !important; color: #1C1B19 !important; margin: 0 0 25px 0 !important; text-align: left !important;">
                        Our Promise to <br><span class="text-red" style="color: #9B0000 !important;">Excellence</span>
                    </h2>
                    <p class="promise__text" style="font-family: 'Archivo', sans-serif !important; font-size: 15px !important; color: #706E6A !important; line-height: 1.6 !important; margin: 0 0 35px 0 !important; text-align: left !important;">
                        Lorem ipsum dolor sit amet consectetur. Arcu semper morbi non congue tincidunt vulputate tristique. Vestibulum bibendum aliquet consequat nibh hac. Blandit eleifend proin ac consequat. A in pretium nullam tincidunt condimentum orci diam vel. Et tincidunt faucibus aliquet sollicitudin ullamcorper gravida.
                    </p>
                    <button class="btn-capsule" onclick="window.location.href='#menu-anchor'" type="button" style="background-color: #1C1B19 !important; color: #FFFFFF !important; border: none !important; padding: 14px 35px !important; font-size: 15px !important; font-weight: 700 !important; border-radius: 50px !important; cursor: pointer !important; font-family: 'Archivo', sans-serif !important;">Check Menu</button>
                </div>
                
                <!-- Левый блок: Картинка сдвинута влево на 90 пикселей -->
                <div class="promise__image-box" style="flex: 1 !important; display: flex !important; align-items: center !important; justify-content: center !important; min-width: 400px !important; z-index: 2 !important; transform: translateX(-90px) !important;">
                    <div class="promise__circle" style="width: 450px !important; height: 450px !important; background-color: #9B0000 !important; border-radius: 50% !important; display: flex !important; align-items: center !important; justify-content: center !important; overflow: hidden !important; filter: drop-shadow(0 10px 25px rgba(0,0,0,0.02)) !important;">
                        <img src="../assets/promise-sushi-with-circle.png" alt="Our Promise to Excellence" class="promise__img" style="width: 100% !important; height: 100% !important; object-fit: cover !important;">
                    </div>
                </div>
                
            </div>
        </section>
   
                    <!-- СЕКЦИЯ 3: МЕНЮ (MENU) —  -->
        <section class="menu-section" id="menu-anchor" style="padding: 60px 0 !important; background-color: #FFFFFF !important; font-family: 'Archivo', sans-serif !important;">
            <div class="container" style="max-width: 1100px !important; margin: 0 auto !important; width: 100% !important; box-sizing: border-box !important;">
                <h2 class="section-title-menu" style="font-size: 36px !important; font-weight: 700 !important; color: #1C1B19 !important; margin: 0 0 40px 0 !important; text-align: left !important;">Menu</h2>
                <div class="menu__filters-bar" style="display: flex !important; align-items: center !important; gap: 20px !important; margin-bottom: 40px !important; width: 100% !important; flex-wrap: wrap !important; justify-content: space-between !important; box-sizing: border-box !important;">
                    <div class="search-box-menu" style="position: relative !important; display: flex !important; align-items: center !important;">
                        <img src="../assets/icon-search.png" alt="Search" style="position: absolute !important; left: 15px !important; width: 16px !important; height: 16px !important; z-index: 2 !important;">
                        <input type="text" placeholder="Search" style="padding: 10px 20px 10px 45px !important; border: 1px solid #706E6A !important; border-radius: 25px !important; font-size: 15px !important; width: 220px !important; outline: none !important; font-family: 'Archivo', sans-serif !important;">
                    </div>
                    <div class="menu__filters" style="display: flex !important; gap: 10px !important; flex-wrap: wrap !important;">
                        <button class="filter-btn active-red" type="button" style="background-color: #9B0000 !important; color: #FFFFFF !important; border: 1px solid #9B0000 !important; padding: 8px 20px !important; border-radius: 25px !important; font-weight: 700 !important; font-size: 14px !important; cursor: pointer !important;">Bestseller</button>
                        <button class="filter-btn" type="button" style="background: none !important; color: #706E6A !important; border: 1px solid #706E6A !important; padding: 8px 20px !important; border-radius: 25px !important; font-size: 14px !important; cursor: pointer !important;">New</button>
                        <button class="filter-btn" type="button" style="background: none !important; color: #706E6A !important; border: 1px solid #706E6A !important; padding: 8px 20px !important; border-radius: 25px !important; font-size: 14px !important; cursor: pointer !important;">Rolls</button>
                        <button class="filter-btn" type="button" style="background: none !important; color: #706E6A !important; border: 1px solid #706E6A !important; padding: 8px 20px !important; border-radius: 25px !important; font-size: 14px !important; cursor: pointer !important;">Pizza</button>
                        <button class="filter-btn" type="button" style="background: none !important; color: #706E6A !important; border: 1px solid #706E6A !important; padding: 8px 20px !important; border-radius: 25px !important; font-size: 14px !important; cursor: pointer !important;">Snacks</button>
                        <button class="filter-btn" type="button" style="background: none !important; color: #706E6A !important; border: 1px solid #706E6A !important; padding: 8px 20px !important; border-radius: 25px !important; font-size: 14px !important; cursor: pointer !important;">Burgers</button>
                        <button class="filter-btn" type="button" style="background: none !important; color: #706E6A !important; border: 1px solid #706E6A !important; padding: 8px 20px !important; border-radius: 25px !important; font-size: 14px !important; cursor: pointer !important;">Side Dishes</button>
                    </div>
                </div>

                  <!-- ФИНАЛЬНАЯ СЕТКА КАРТОЧЕК БЕЗ РАМОК И С ЛИНИЯМИ -->
                <div class="menu__grid" style="display: grid !important; grid-template-columns: repeat(4, 1fr) !important; gap: 30px !important; width: 100% !important; box-sizing: border-box !important;">
                    
                    <!-- Карточка 1 -->
                    <div class="product-card" style="display: flex !important; flex-direction: column !important; justify-content: space-between !important; background: #FFFFFF !important; border: none !important; border-radius: 8px !important; padding: 16px !important; box-sizing: border-box !important; box-shadow: 0 4px 15px rgba(0,0,0,0.02) !important;">
                        <div style="width: 100% !important; text-align: center !important; margin-bottom: 12px !important; height: 140px !important; display: flex !important; align-items: center !important; justify-content: center !important;">
                            <img src="../assets/roll-dragon.png" alt="Roll Dragon" style="max-width: 100% !important; max-height: 100% !important; object-fit: contain !important; display: block !important;">
                        </div>
                        <div style="display: flex !important; flex-direction: column !important; flex-grow: 1 !important; justify-content: space-between !important;">
                            <div style="margin-bottom: 12px !important;">
                                <h3 style="font-size: 18px !important; font-weight: 700 !important; color: #1C1B19 !important; margin: 0 0 8px 0 !important; text-align: left !important; font-family: 'Archivo', sans-serif !important;">Roll "Dragon"</h3>
                                <p style="font-size: 13px !important; color: #706E6A !important; line-height: 1.4 !important; margin: 0 !important; text-align: left !important; font-family: 'Archivo', sans-serif !important;">The Dragon Roll is an inside-out sushi masterpiece.</p>
                            </div>
                            <div style="border-top: 1px solid #E2E2E2 !important; margin-top: auto !important; padding-top: 12px !important; display: flex !important; justify-content: space-between !important; align-items: center !important; width: 100% !important;">
                                <span style="font-size: 18px !important; font-weight: 700 !important; color: #1C1B19 !important; font-family: 'Archivo', sans-serif !important;">9,99$</span>
                                <button class="btn-add" type="button" style="background-color: #9B0000 !important; color: #FFFFFF !important; border: none !important; padding: 8px 18px !important; border-radius: 25px !important; font-weight: 700 !important; cursor: pointer !important; font-size: 13px !important; font-family: 'Archivo', sans-serif !important;">Add to cart</button>
                            </div>
                        </div>
                    </div>

                    <!-- Карточка 2 -->
                    <div class="product-card" style="display: flex !important; flex-direction: column !important; justify-content: space-between !important; background: #FFFFFF !important; border: none !important; border-radius: 8px !important; padding: 16px !important; box-sizing: border-box !important; box-shadow: 0 4px 15px rgba(0,0,0,0.02) !important;">
                        <div style="width: 100% !important; text-align: center !important; margin-bottom: 12px !important; height: 140px !important; display: flex !important; align-items: center !important; justify-content: center !important;">
                            <img src="../assets/roll-phila.png" alt="Philadelphia Light" style="max-width: 100% !important; max-height: 100% !important; object-fit: contain !important; display: block !important;">
                        </div>
                        <div style="display: flex !important; flex-direction: column !important; flex-grow: 1 !important; justify-content: space-between !important;">
                            <div style="margin-bottom: 12px !important;">
                                <h3 style="font-size: 18px !important; font-weight: 700 !important; color: #1C1B19 !important; margin: 0 0 8px 0 !important; text-align: left !important; font-family: 'Archivo', sans-serif !important;">Philadelphia Light</h3>
                                <p style="font-size: 13px !important; color: #706E6A !important; line-height: 1.4 !important; margin: 0 !important; text-align: left !important; font-family: 'Archivo', sans-serif !important;">Shrimp tempura, cucumber, and cream cheese inside.</p>
                            </div>
                            <div style="border-top: 1px solid #E2E2E2 !important; margin-top: auto !important; padding-top: 12px !important; display: flex !important; justify-content: space-between !important; align-items: center !important; width: 100% !important;">
                                <span style="font-size: 18px !important; font-weight: 700 !important; color: #1C1B19 !important; font-family: 'Archivo', sans-serif !important;">9,99$</span>
                                <button class="btn-add" type="button" style="background-color: #9B0000 !important; color: #FFFFFF !important; border: none !important; padding: 8px 18px !important; border-radius: 25px !important; font-weight: 700 !important; cursor: pointer !important; font-size: 13px !important; font-family: 'Archivo', sans-serif !important;">Add to cart</button>
                            </div>
                        </div>
                    </div>

                    <!-- Карточка 3 -->
                    <div class="product-card" style="display: flex !important; flex-direction: column !important; justify-content: space-between !important; background: #FFFFFF !important; border: none !important; border-radius: 8px !important; padding: 16px !important; box-sizing: border-box !important; box-shadow: 0 4px 15px rgba(0,0,0,0.02) !important;">
                        <div style="width: 100% !important; text-align: center !important; margin-bottom: 12px !important; height: 140px !important; display: flex !important; align-items: center !important; justify-content: center !important;">
                            <img src="../assets/roll-prime.png" alt="Prime Light" style="max-width: 100% !important; max-height: 100% !important; object-fit: contain !important; display: block !important;">
                        </div>
                        <div style="display: flex !important; flex-direction: column !important; flex-grow: 1 !important; justify-content: space-between !important;">
                            <div style="margin-bottom: 12px !important;">
                                <h3 style="font-size: 18px !important; font-weight: 700 !important; color: #1C1B19 !important; margin: 0 0 8px 0 !important; text-align: left !important; font-family: 'Archivo', sans-serif !important;">Prime Light</h3>
                                <p style="font-size: 13px !important; color: #706E6A !important; line-height: 1.4 !important; margin: 0 !important; text-align: left !important; font-family: 'Archivo', sans-serif !important;">Shrimp tempura, cream cheese, and eel roll.</p>
                            </div>
                            <div style="border-top: 1px solid #E2E2E2 !important; margin-top: auto !important; padding-top: 12px !important; display: flex !important; justify-content: space-between !important; align-items: center !important; width: 100% !important;">
                                <span style="font-size: 18px !important; font-weight: 700 !important; color: #1C1B19 !important; font-family: 'Archivo', sans-serif !important;">9,99$</span>
                                <button class="btn-add" type="button" style="background-color: #9B0000 !important; color: #FFFFFF !important; border: none !important; padding: 8px 18px !important; border-radius: 25px !important; font-weight: 700 !important; cursor: pointer !important; font-size: 13px !important; font-family: 'Archivo', sans-serif !important;">Add to cart</button>
                            </div>
                        </div>
                    </div>

                    <!-- Карточка 4 -->
                    <div class="product-card" style="display: flex !important; flex-direction: column !important; justify-content: space-between !important; background: #FFFFFF !important; border: none !important; border-radius: 8px !important; padding: 16px !important; box-sizing: border-box !important; box-shadow: 0 4px 15px rgba(0,0,0,0.02) !important;">
                        <div style="width: 100% !important; text-align: center !important; margin-bottom: 12px !important; height: 140px !important; display: flex !important; align-items: center !important; justify-content: center !important;">
                            <img src="../assets/roll-arigato.png" alt="Arigato" style="max-width: 100% !important; max-height: 100% !important; object-fit: contain !important; display: block !important;">
                        </div>
                        <div style="display: flex !important; flex-direction: column !important; flex-grow: 1 !important; justify-content: space-between !important;">
                            <div style="margin-bottom: 12px !important;">
                                <h3 style="font-size: 18px !important; font-weight: 700 !important; color: #1C1B19 !important; margin: 0 0 8px 0 !important; text-align: left !important; font-family: 'Archivo', sans-serif !important;">Arigato</h3>
                                <p style="font-size: 13px !important; color: #706E6A !important; line-height: 1.4 !important; margin: 0 !important; text-align: left !important; font-family: 'Archivo', sans-serif !important;">Shrimp tempura, cream cheese, cucumber, grilled eel.</p>
                            </div>
                            <div style="border-top: 1px solid #E2E2E2 !important; margin-top: auto !important; padding-top: 12px !important; display: flex !important; justify-content: space-between !important; align-items: center !important; width: 100% !important;">
                                <span style="font-size: 18px !important; font-weight: 700 !important; color: #1C1B19 !important; font-family: 'Archivo', sans-serif !important;">9,99$</span>
                                <button class="btn-add" type="button" style="background-color: #9B0000 !important; color: #FFFFFF !important; border: none !important; padding: 8px 18px !important; border-radius: 25px !important; font-weight: 700 !important; cursor: pointer !important; font-size: 13px !important; font-family: 'Archivo', sans-serif !important;">Add to cart</button>
                            </div>
                        </div>
                    </div>

                    <!-- Карточка 5 -->
                    <div class="product-card" style="display: flex !important; flex-direction: column !important; justify-content: space-between !important; background: #FFFFFF !important; border: none !important; border-radius: 8px !important; padding: 16px !important; box-sizing: border-box !important; box-shadow: 0 4px 15px rgba(0,0,0,0.02) !important;">
                        <div style="width: 100% !important; text-align: center !important; margin-bottom: 12px !important; height: 140px !important; display: flex !important; align-items: center !important; justify-content: center !important;">
                            <img src="../assets/roll-kogase.png" alt="Kogase" style="max-width: 100% !important; max-height: 100% !important; object-fit: contain !important; display: block !important;">
                        </div>
                        <div style="display: flex !important; flex-direction: column !important; flex-grow: 1 !important; justify-content: space-between !important;">
                            <div style="margin-bottom: 12px !important;">
                                <h3 style="font-size: 18px !important; font-weight: 700 !important; color: #1C1B19 !important; margin: 0 0 8px 0 !important; text-align: left !important; font-family: 'Archivo', sans-serif !important;">Kogase</h3>
                                <p style="font-size: 13px !important; color: #706E6A !important; line-height: 1.4 !important; margin: 0 !important; text-align: left !important; font-family: 'Archivo', sans-serif !important;">Crispy shrimp tempura roll topped with tender grilled eel.</p>
                            </div>
                            <div style="border-top: 1px solid #E2E2E2 !important; margin-top: auto !important; padding-top: 12px !important; display: flex !important; justify-content: space-between !important; align-items: center !important; width: 100% !important;">
                                <span style="font-size: 18px !important; font-weight: 700 !important; color: #1C1B19 !important; font-family: 'Archivo', sans-serif !important;">9,99$</span>
                                <button class="btn-add" type="button" style="background-color: #9B0000 !important; color: #FFFFFF !important; border: none !important; padding: 8px 18px !important; border-radius: 25px !important; font-weight: 700 !important; cursor: pointer !important; font-size: 13px !important; font-family: 'Archivo', sans-serif !important;">Add to cart</button>
                            </div>
                        </div>
                    </div>

                    <!-- Карточка 6 -->
                    <div class="product-card" style="display: flex !important; flex-direction: column !important; justify-content: space-between !important; background: #FFFFFF !important; border: none !important; border-radius: 8px !important; padding: 16px !important; box-sizing: border-box !important; box-shadow: 0 4px 15px rgba(0,0,0,0.02) !important;">
                        <div style="width: 100% !important; text-align: center !important; margin-bottom: 12px !important; height: 140px !important; display: flex !important; align-items: center !important; justify-content: center !important;">
                            <img src="../assets/roll-cheddar.png" alt="Cheddar" style="max-width: 100% !important; max-height: 100% !important; object-fit: contain !important; display: block !important;">
                        </div>
                        <div style="display: flex !important; flex-direction: column !important; flex-grow: 1 !important; justify-content: space-between !important;">
                            <div style="margin-bottom: 12px !important;">
                                <h3 style="font-size: 18px !important; font-weight: 700 !important; color: #1C1B19 !important; margin: 0 0 8px 0 !important; text-align: left !important; font-family: 'Archivo', sans-serif !important;">Cheddar</h3>
                                <p style="font-size: 13px !important; color: #706E6A !important; line-height: 1.4 !important; margin: 0 !important; text-align: left !important; font-family: 'Archivo', sans-serif !important;">Salmon, cream cheese, and cucumber inside.</p>
                            </div>
                            <div style="border-top: 1px solid #E2E2E2 !important; margin-top: auto !important; padding-top: 12px !important; display: flex !important; justify-content: space-between !important; align-items: center !important; width: 100% !important;">
                                <span style="font-size: 18px !important; font-weight: 700 !important; color: #1C1B19 !important; font-family: 'Archivo', sans-serif !important;">9,99$</span>
                                <button class="btn-add" type="button" style="background-color: #9B0000 !important; color: #FFFFFF !important; border: none !important; padding: 8px 18px !important; border-radius: 25px !important; font-weight: 700 !important; cursor: pointer !important; font-size: 13px !important; font-family: 'Archivo', sans-serif !important;">Add to cart</button>
                            </div>
                        </div>
                    </div>

                     <!-- Карточка 7 -->
                    <div class="product-card" style="display: flex !important; flex-direction: column !important; justify-content: space-between !important; background: #FFFFFF !important; border: none !important; border-radius: 8px !important; padding: 16px !important; box-sizing: border-box !important; box-shadow: 0 4px 15px rgba(0,0,0,0.02) !important;">
                        <div style="width: 100% !important; text-align: center !important; margin-bottom: 12px !important; height: 140px !important; display: flex !important; align-items: center !important; justify-content: center !important;">
                            <img src="../assets/roll-california.png" alt="California Light" style="max-width: 100% !important; max-height: 100% !important; object-fit: contain !important; display: block !important;">
                        </div>
                        <div style="display: flex !important; flex-direction: column !important; flex-grow: 1 !important; justify-content: space-between !important;">
                            <div style="margin-bottom: 12px !important;">
                                <h3 style="font-size: 18px !important; font-weight: 700 !important; color: #1C1B19 !important; margin: 0 0 8px 0 !important; text-align: left !important; font-family: 'Archivo', sans-serif !important;">California Light</h3>
                                <p style="font-size: 13px !important; color: #706E6A !important; line-height: 1.4 !important; margin: 0 !important; text-align: left !important; font-family: 'Archivo', sans-serif !important;">Crunchy shrimp and smooth cream cheese.</p>
                            </div>
                            <div style="border-top: 1px solid #E2E2E2 !important; margin-top: auto !important; padding-top: 12px !important; display: flex !important; justify-content: space-between !important; align-items: center !important; width: 100% !important;">
                                <span style="font-size: 18px !important; font-weight: 700 !important; color: #1C1B19 !important; font-family: 'Archivo', sans-serif !important;">9,99$</span>
                                <button class="btn-add" type="button" style="background-color: #9B0000 !important; color: #FFFFFF !important; border: none !important; padding: 8px 18px !important; border-radius: 25px !important; font-weight: 700 !important; cursor: pointer !important; font-size: 13px !important; font-family: 'Archivo', sans-serif !important;">Add to cart</button>
                            </div>
                        </div>
                    </div>

                </div> <!-- Конец menu__grid -->
            </div> <!-- Конец container -->
        </section> <!-- Конец menu-section -->

                </div> <!-- Конец menu__grid -->
            </div> <!-- Конец container -->
        </section> <!-- Конец menu-section -->

        <!-- СЕКЦИЯ 4: АКЦИИ И СПЕЦПРЕДЛОЖЕНИЯ С КЛИКАБЕЛЬНЫМИ КНОПКАМИ -->
        <section class="promotions-section" style="padding: 60px 0 20px 0 !important; background-color: #FFFFFF !important; font-family: 'Archivo', sans-serif !important;">
            <div class="container" style="max-width: 1100px !important; margin: 0 auto !important; width: 100% !important; box-sizing: border-box !important;">
                <h2 class="section-title-promo" style="font-size: 36px !important; font-weight: 700 !important; color: #1C1B19 !important; margin: 0 0 40px 0 !important; text-align: left !important;">Promotions & Special Offers</h2>
                
                <div class="promo__container" style="display: flex !important; flex-direction: column !important; gap: 50px !important; width: 100% !important;">
                    
                    <!-- РЯД 1 -->
                    <div class="promo__row" style="display: flex !important; align-items: center !important; justify-content: space-between !important; gap: 50px !important; width: 100% !important; flex-wrap: wrap !important;">
                        <div class="promo__image-block" style="flex: 1 !important; min-width: 300px !important; max-width: 500px !important;">
                            <img src="../assets/promo-sushi-1.jpg" alt="Buy two drinks get one free" style="width: 100% !important; border-radius: 8px !important; height: auto !important; object-fit: cover !important;">
                        </div>
                        <div class="promo__content-block" style="flex: 1 !important; min-width: 300px !important; display: flex !important; flex-direction: column !important; align-items: flex-start !important;">
                            <h3 style="font-size: 24px !important; font-weight: 700 !important; color: #1C1B19 !important; margin: 0 0 15px 0 !important;">Buy two drinks get one free</h3>
                            <p style="font-size: 15px !important; color: #706E6A !important; line-height: 1.6 !important; margin: 0 0 35px 0 !important; text-align: left !important;">Special Offers & Deals: Get more for less. Explore our curated discounts, seasonal sales, and bundled packages. Check back regularly to catch the best bargains before they're gone!</p>
                            <!-- Добавили переход на якорь #menu-anchor -->
                            <button class="btn-view-menu" onclick="window.location.href='#menu-anchor'" type="button" style="background-color: #1C1B19 !important; color: #FFFFFF !important; border: none !important; padding: 12px 30px !important; border-radius: 25px !important; font-weight: 700 !important; cursor: pointer !important; font-size: 14px !important; font-family: 'Archivo', sans-serif !important;">View Menu</button>
                        </div>
                    </div>

                    <!-- РЯД 2 -->
                    <div class="promo__row" style="display: flex !important; align-items: center !important; justify-content: space-between !important; gap: 50px !important; width: 100% !important; flex-wrap: wrap !important;">
                        <div class="promo__image-block" style="flex: 1 !important; min-width: 300px !important; max-width: 500px !important;">
                            <img src="../assets/promo-banner-delivery.jpg" alt="Fast & Free Delivery" style="width: 100% !important; border-radius: 8px !important; height: auto !important; object-fit: cover !important;">
                        </div>
                        <div class="promo__content-block" style="flex: 1 !important; min-width: 300px !important; display: flex !important; flex-direction: column !important; align-items: flex-start !important;">
                            <h3 style="font-size: 24px !important; font-weight: 700 !important; color: #1C1B19 !important; margin: 0 0 15px 0 !important;">Fast & Free Delivery</h3>
                            <p style="font-size: 15px !important; color: #706E6A !important; line-height: 1.6 !important; margin: 0 0 35px 0 !important; text-align: left !important;">Special Offers & Deals: Get more for less. Explore our curated discounts, seasonal sales, and bundled packages. Check back regularly to catch the best bargains before they're gone!</p>
                            <!-- Добавили переход на якорь #menu-anchor -->
                            <button class="btn-view-menu" onclick="window.location.href='#menu-anchor'" type="button" style="background-color: #1C1B19 !important; color: #FFFFFF !important; border: none !important; padding: 12px 30px !important; border-radius: 25px !important; font-weight: 700 !important; cursor: pointer !important; font-size: 14px !important; font-family: 'Archivo', sans-serif !important;">View Menu</button>
                        </div>
                    </div>

                    <!-- РЯД 3 -->
                    <div class="promo__row" style="display: flex !important; align-items: center !important; justify-content: space-between !important; gap: 50px !important; width: 100% !important; flex-wrap: wrap !important;">
                        <div class="promo__image-block" style="flex: 1 !important; min-width: 300px !important; max-width: 500px !important;">
                            <img src="../assets/promo-banner-maki.jpg" alt="Double Maki Weekend" style="width: 100% !important; border-radius: 8px !important; height: auto !important; object-fit: cover !important;">
                        </div>
                        <div class="promo__content-block" style="flex: 1 !important; min-width: 300px !important; display: flex !important; flex-direction: column !important; align-items: flex-start !important;">
                            <h3 style="font-size: 24px !important; font-weight: 700 !important; color: #1C1B19 !important; margin: 0 0 15px 0 !important;">Double Maki Weekend</h3>
                            <p style="font-size: 15px !important; color: #706E6A !important; line-height: 1.6 !important; margin: 0 0 35px 0 !important; text-align: left !important;">Special Offers & Deals: Get more for less. Explore our curated discounts, seasonal sales, and bundled packages. Check back regularly to catch the best bargains before they're gone!</p>
                            <!-- Добавили переход на якорь #menu-anchor -->
                            <button class="btn-view-menu" onclick="window.location.href='#menu-anchor'" type="button" style="background-color: #1C1B19 !important; color: #FFFFFF !important; border: none !important; padding: 12px 30px !important; border-radius: 25px !important; font-weight: 700 !important; cursor: pointer !important; font-size: 14px !important; font-family: 'Archivo', sans-serif !important;">View Menu</button>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- СЕКЦИЯ 5: МОБИЛЬНОЕ ПРИЛОЖЕНИЕ (APP) -->
        <section class="app-section" style="padding: 20px 0 30px 0 !important; background-color: #FFFFFF !important; font-family: 'Archivo', sans-serif !important; overflow: hidden !important;">
            <div class="container app__wrap" style="max-width: 1100px !important; margin: 0 auto !important; display: flex !important; align-items: center !important; justify-content: space-between !important; width: 100% !important; gap: 50px !important; flex-wrap: wrap !important; box-sizing: border-box !important;">
                
                <!-- Левая часть: Описание и кнопки магазинов -->
                <div class="app__content" style="flex: 1 !important; min-width: 300px !important; display: flex !important; flex-direction: column !important; align-items: flex-start !important;">
                    <h2 style="font-size: 36px !important; font-weight: 700 !important; color: #1C1B19 !important; margin: 0 0 20px 0 !important; text-align: left !important; line-height: 1.2 !important;">Download Our App</h2>
                    <p class="app__text-figma" style="font-size: 15px !important; color: #706E6A !important; line-height: 1.6 !important; margin: 0 0 35px 0 !important; max-width: 400px !important; text-align: left !important;">
                        Download our app to your phone and get a promo code hoa lorem ipsum dollar! Explore our full menu, get instant notifications about secret deals, and track your delivery in real-time.
                    </p>
                    
                    <!-- Вертикальный ряд магазинов с фиксированной шириной -->
                    <div class="app__stores-vertical" style="display: flex !important; flex-direction: column !important; gap: 15px !important; width: 100% !important; max-width: 160px !important;">
                        <a href="#" class="store-link" style="display: block !important; width: 100% !important; transition: transform 0.2s !important;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
                            <img src="../assets/google-play.png" alt="Get it on Google Play" style="width: 100% !important; height: auto !important; display: block !important; border: none !important;">
                        </a>
                        <a href="#" class="store-link" style="display: block !important; width: 100% !important; transition: transform 0.2s !important;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
                            <img src="../assets/app-store.png" alt="Download on the App Store" style="width: 100% !important; height: auto !important; display: block !important; border: none !important;">
                        </a>
                    </div>
                </div>
                
                <!-- Правая часть: Смартфон и QR-код -->
                <div class="app__visuals-box" style="flex: 1 !important; min-width: 300px !important; text-align: right !important; max-width: 500px !important; display: flex !important; align-items: center !important; justify-content: flex-end !important;">
                    <img src="../assets/app-visuals-full.png" alt="Yume App on Smartphone with QR" class="app__img" style="max-width: 100% !important; height: auto !important; object-fit: contain !important; display: block !important;">
                </div>
                
            </div>
        </section>

       <!-- СЕКЦИЯ 6: ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ (FAQ) -->
        <section class="faq-section" style="padding: 10px 0 60px 0 !important; background-color: #FFFFFF !important; font-family: 'Archivo', sans-serif !important;">
            <div class="container" style="max-width: 1100px !important; margin: 0 auto !important; width: 100% !important; box-sizing: border-box !important;">
                <h2 class="section-title-faq" style="font-size: 36px !important; font-weight: 700 !important; color: #1C1B19 !important; margin: 0 0 40px 0 !important; text-align: left !important;">FAQ</h2>
                
                <!-- Адаптивный контейнер аккордеона -->
                <div class="faq__accordion" style="display: flex !important; flex-direction: column !important; gap: 15px !important; width: 100% !important; box-sizing: border-box !important;">
                    
                    <!-- Вкладка 1 -->
                    <div class="faq__item" style="border: 1px solid #E2E2E2 !important; border-radius: 8px !important; overflow: hidden !important; background-color: #FFFFFF !important; box-sizing: border-box !important;">
                        <button class="faq__question" type="button" style="width: 100% !important; padding: 20px 25px !important; background: none !important; border: none !important; display: flex !important; justify-content: space-between !important; align-items: center !important; font-family: 'Archivo', sans-serif !important; font-size: 16px !important; font-weight: 700 !important; color: #1C1B19 !important; cursor: pointer !important; text-align: left !important; outline: none !important;">
                            How do I register on the site? <span class="faq__plus" style="color: #9B0000 !important; font-size: 22px !important; font-weight: 400 !important; line-height: 1 !important;">+</span>
                        </button>
                        <div class="faq__answer" style="display: none; padding: 0 25px 20px 25px !important; background-color: #FFFFFF !important; color: #706E6A !important; font-size: 15px !important; line-height: 1.6 !important;">
                            <p style="margin: 0 !important; text-align: left !important;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Регистрация на нашем веб-ресурсе происходит моментально через вкладку Sign Up по номеру телефона.</p>
                        </div>
                    </div>

                    <!-- Вкладка 2 -->
                    <div class="faq__item" style="border: 1px solid #E2E2E2 !important; border-radius: 8px !important; overflow: hidden !important; background-color: #FFFFFF !important; box-sizing: border-box !important;">
                        <button class="faq__question" type="button" style="width: 100% !important; padding: 20px 25px !important; background: none !important; border: none !important; display: flex !important; justify-content: space-between !important; align-items: center !important; font-family: 'Archivo', sans-serif !important; font-size: 16px !important; font-weight: 700 !important; color: #1C1B19 !important; cursor: pointer !important; text-align: left !important; outline: none !important;">
                            How do set up a personal account? <span class="faq__plus" style="color: #9B0000 !important; font-size: 22px !important; font-weight: 400 !important; line-height: 1 !important;">+</span>
                        </button>
                        <div class="faq__answer" style="display: none; padding: 0 25px 20px 25px !important; background-color: #FFFFFF !important; color: #706E6A !important; font-size: 15px !important; line-height: 1.6 !important;">
                            <p style="margin: 0 !important; text-align: left !important;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Все настройки профиля, история заказов и управление данными доступны в вашем Личном кабинете после авторизации.</p>
                        </div>
                    </div>

                    <!-- Вкладка 3 -->
                    <div class="faq__item" style="border: 1px solid #E2E2E2 !important; border-radius: 8px !important; overflow: hidden !important; background-color: #FFFFFF !important; box-sizing: border-box !important;">
                        <button class="faq__question" type="button" style="width: 100% !important; padding: 20px 25px !important; background: none !important; border: none !important; display: flex !important; justify-content: space-between !important; align-items: center !important; font-family: 'Archivo', sans-serif !important; font-size: 16px !important; font-weight: 700 !important; color: #1C1B19 !important; cursor: pointer !important; text-align: left !important; outline: none !important;">
                            How do use the product? <span class="faq__plus" style="color: #9B0000 !important; font-size: 22px !important; font-weight: 400 !important; line-height: 1 !important;">+</span>
                        </button>
                        <div class="faq__answer" style="display: none; padding: 0 25px 20px 25px !important; background-color: #FFFFFF !important; color: #706E6A !important; font-size: 15px !important; line-height: 1.6 !important;">
                            <p style="margin: 0 !important; text-align: left !important;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Каждое блюдо из нашего меню готовится исключительно из свежих продуктов по оригинальным рецептам шеф-повара.</p>
                        </div>
                    </div>

                    <!-- Вкладка 4 -->
                    <div class="faq__item" style="border: 1px solid #E2E2E2 !important; border-radius: 8px !important; overflow: hidden !important; background-color: #FFFFFF !important; box-sizing: border-box !important;">
                        <button class="faq__question" type="button" style="width: 100% !important; padding: 20px 25px !important; background: none !important; border: none !important; display: flex !important; justify-content: space-between !important; align-items: center !important; font-family: 'Archivo', sans-serif !important; font-size: 16px !important; font-weight: 700 !important; color: #1C1B19 !important; cursor: pointer !important; text-align: left !important; outline: none !important;">
                            How do place an order? <span class="faq__plus" style="color: #9B0000 !important; font-size: 22px !important; font-weight: 400 !important; line-height: 1 !important;">+</span>
                        </button>
                        <div class="faq__answer" style="display: none; padding: 0 25px 20px 25px !important; background-color: #FFFFFF !important; color: #706E6A !important; font-size: 15px !important; line-height: 1.6 !important;">
                            <p style="margin: 0 !important; text-align: left !important;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Добавьте понравившиеся роллы в корзину, отрегулируйте количество и нажмите кнопку Order в панели корзины.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- СЕКЦИЯ 7: КОНТАКТЫ (CONTACT) -->
        <section class="contact-section" id="contact-anchor" style="padding: 60px 0 100px 0 !important; background-color: #FFFFFF !important; font-family: 'Archivo', sans-serif !important;">
            <div class="container" style="max-width: 1100px !important; margin: 0 auto !important; width: 100% !important; box-sizing: border-box !important;">
                <h2 class="section-title-contact" style="font-size: 36px !important; font-weight: 700 !important; color: #1C1B19 !important; margin: 0 0 40px 0 !important; text-align: left !important;">Contact</h2>
                
                <div class="contact__wrap" style="display: flex !important; gap: 40px !important; align-items: stretch !important; width: 100% !important; flex-wrap: wrap !important; box-sizing: border-box !important;">
                    
                    <!-- Левая часть: Интерактивная живая карта Яндекса -->
                    <div class="contact__map-box" style="flex: 1 !important; min-width: 350px !important; min-height: 440px !important; border-radius: 8px !important; overflow: hidden !important; border: 1px solid #E2E2E2 !important; box-sizing: border-box !important;">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A13f27acb62f223ea3505fb8d8aed87277bc507f31502ff7950c9b569abd172f1&amp;source=constructor" class="yandex-map-iframe" frameborder="0" style="width: 100% !important; height: 100% !important; border: none !important; display: block !important;"></iframe>
                    </div>
                    
                    <!-- Правая часть: Условия и Форма обратной связи -->
                    <div class="contact__info-wrap" style="flex: 1 !important; min-width: 350px !important; display: flex !important; flex-direction: column !important; gap: 25px !important; box-sizing: border-box !important;">
                        
                        <!-- Блок Доставки -->
                        <div class="contact__delivery-block" style="border: 1px solid #E2E2E2 !important; border-radius: 8px !important; padding: 25px !important; background-color: #FFFFFF !important; box-sizing: border-box !important;">
                            <h3 style="font-size: 20px !important; font-weight: 700 !important; color: #1C1B19 !important; margin: 0 0 15px 0 !important; text-align: left !important;">Delivery</h3>
                            <ul style="list-style: none !important; padding: 0 !important; margin: 0 !important; display: flex !important; flex-direction: column !important; gap: 12px !important; font-size: 15px !important; color: #706E6A !important; line-height: 1.5 !important;">
                                <li style="position: relative !important; padding-left: 20px !important; text-align: left !important;">
                                    <span style="position: absolute !important; left: 0 !important; color: #9B0000 !important; font-weight: 700 !important;">•</span> We deliver Monday through Saturday, from 9:00 AM to 9:00 PM.
                                </li>
                                <li style="position: relative !important; padding-left: 20px !important; text-align: left !important;">
                                    <span style="position: absolute !important; left: 0 !important; color: #9B0000 !important; font-weight: 700 !important;">•</span> Free delivery on all orders over 50$ inside the city borders.
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Блок обратной связи -->
                        <div class="contact__feedback-block" style="border: 1px solid #E2E2E2 !important; border-radius: 8px !important; padding: 25px !important; background-color: #FFFFFF !important; box-sizing: border-box !important;">
                            <h3 style="font-size: 20px !important; font-weight: 700 !important; color: #1C1B19 !important; margin: 0 0 20px 0 !important; text-align: left !important;">Feedback</h3>
                            <form class="contact__form" action="#" style="display: flex !important; flex-direction: column !important; gap: 15px !important; margin: 0 !important; padding: 0 !important; width: 100% !important; box-sizing: border-box !important;">
                                <input type="tel" placeholder="Your Number Phone" required style="width: 100% !important; box-sizing: border-box !important; padding: 12px 20px !important; border: 1px solid #D2D2D2 !important; border-radius: 25px !important; font-size: 14px !important; outline: none !important; font-family: 'Archivo', sans-serif !important; background: #FFFFFF !important; color: #1C1B19 !important;">
                                <input type="text" placeholder="Your Name" required style="width: 100% !important; box-sizing: border-box !important; padding: 12px 20px !important; border: 1px solid #D2D2D2 !important; border-radius: 25px !important; font-size: 14px !important; outline: none !important; font-family: 'Archivo', sans-serif !important; background: #FFFFFF !important; color: #1C1B19 !important;">
                                <textarea placeholder="Message" required style="width: 100% !important; box-sizing: border-box !important; padding: 12px 20px !important; border: 1px solid #D2D2D2 !important; border-radius: 15px !important; font-size: 14px !important; min-height: 100px !important; resize: vertical !important; outline: none !important; font-family: 'Archivo', sans-serif !important; background: #FFFFFF !important; color: #1C1B19 !important;"></textarea>
                                
                                <div class="form__footer-btn" style="text-align: right !important; width: 100% !important; margin-top: 5px !important;">
                                    <button type="submit" class="btn-send" style="background-color: #9B0000 !important; color: #FFFFFF !important; border: none !important; padding: 12px 40px !important; border-radius: 25px !important; font-weight: 700 !important; cursor: pointer !important; font-family: 'Archivo', sans-serif !important; font-size: 14px !important; transition: background-color 0.2s !important;">Send</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </section>
    </main>

    <!-- ПОДВАЛ (FOOTER) С ЧЕРНЫМ ТОНКИМ НОМЕРОМ ТЕЛЕФОНА -->
    <footer class="footer" style="border-top: 1px solid #E2E2E2 !important; padding: 35px 0 !important; background-color: #FFFFFF !important; font-family: 'Archivo', sans-serif !important; width: 100% !important; box-sizing: border-box !important;">
        <div class="container footer__wrap" style="max-width: 1100px !important; margin: 0 auto !important; display: flex !important; justify-content: space-between !important; align-items: center !important; width: 100% !important; box-sizing: border-box !important; padding: 0 20px !important;">
            
            <!-- Левая часть: Аккуратный текстовый номер телефона ЧЕРНОГО цвета (не жирный) -->
            <div class="footer__phone" style="font-size: 15px !important; font-weight: 400 !important; color: #1C1B19 !important; font-family: 'Archivo', sans-serif !important;">
                +9 000 000 000 00
            </div>

            <!-- Правая часть: Серые юридические надписи -->
            <div class="footer__legal" style="display: flex !important; gap: 30px !important; align-items: center !important;">
                <a href="#" style="font-size: 15px !important; font-weight: 400 !important; color: #A0A0A0 !important; text-decoration: none !important; font-family: 'Archivo', sans-serif !important; transition: color 0.2s !important;" onmouseover="this.style.color='#9B0000'" onmouseout="this.style.color='#A0A0A0'">Privacy Policy</a>
                <a href="#" style="font-size: 15px !important; font-weight: 400 !important; color: #A0A0A0 !important; text-decoration: none !important; font-family: 'Archivo', sans-serif !important; transition: color 0.2s !important;" onmouseover="this.style.color='#9B0000'" onmouseout="this.style.color='#A0A0A0'">Terms of Service</a>
            </div>

        </div>
    </footer>

    <!-- Подключение JS для интерактивного аккордеона FAQ -->
    <script src="../js/hidden_text.js" defer></script>
<!-- Подключение обработчика добавления роллов в корзину -->
    <script src="../js/cart_handler.js" defer></script>
    <script src="../js/hidden_text.js" defer></script>
</body>
</html>