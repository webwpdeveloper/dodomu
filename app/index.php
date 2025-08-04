<!DOCTYPE html>
<html lang="uk">

<head>
    <?php include 'inc/global/_top.php'; ?>
    <title>Dodomy :: Home</title>
</head>

<body>
    <div id="content-block">
        <?php include 'inc/global/_header.php'; ?>

        <main>

            <?php include 'template-parts/_banner-full.php'; ?>

            <!-- BENEFITS -->
            <div class="section">
                <div class="container">
                    <div class="h2 title text-center mb-40">Наші сильні сторони.</div>
                    <div class="benefit-wrapp">
                        <div class="benefit-item">

                        </div>
                    </div>
                </div>
            </div>

            <!-- L & R section ( Right content ) -->
            <div class="section">
                <div class="container">
                    <div class="rl-block">
                        <div class="lr-img-1">
                            <picture>
                                <source srcset="img/lr-img.webp" type="image/webp">
                                <source srcset="img/lr-img.jpg" type="image/jpg">
                                <img width="384" height="384" src="#" alt="" loading="lazy">
                            </picture>
                        </div>
                        <div class="lr-content-1">
                            <div class="h2 title">Про компанію.</div>
                            <div class="text">
                                <p>Команда, яка об'єднує досвід, сучасний підхід та любов до своєї справи. Ми спеціалізуємось на будівництві житлових об’єктів, що відповідають сучасним вимогам якості, естетики та функціональності.</p>
                                <p>Наш пріоритет — створювати простір, у якому комфортно жити, зростати та повертатися.</p>
                                <p>Ми не просто зводимо стіни — ми продумуємо кожен метр, враховуємо потреби майбутніх мешканців і впроваджуємо рішення, які служать роками. Надійність, чесність і відповідальність — наші основні принципи, які формують довіру клієнтів.</p>
                            </div>
                            <div class="btn"><b>Більше про нас</b></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- L & R section ( Left content ) -->
            <div class="section">
                <div class="container">
                    <div class="rl-block rl-right">
                        <div class="lr-img-1">
                            <picture>
                                <source srcset="img/lr-img-2.webp" type="image/webp">
                                <source srcset="img/lr-img-2.jpg" type="image/jpg">
                                <img width="384" height="384" src="#" alt="" loading="lazy">
                            </picture>
                        </div>
                        <div class="lr-content-1">
                            <div class="h2 title">Залишіть заявку і розрахуємо вартість вашого дому мрії.</div>
                            <div class="btn"><b>Отримати приблизний розрахунок</b></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- WORK COMPLEX -->
            <div class="section sec-black sec-padd">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="content-block">
                                <div class="h2 title">Будуємо якісно.<br> Працюємо комплексно.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROJECTS -->
            <div class="section sec-gray sec-padd">
                <div class="container">
                    <div class="h2 title text-center mb-40">Проєкти, що стали домом.</div>
                </div>
            </div>

            <!-- OUR WORKS -->
            <div class="section">
                <div class="container">
                    <div class="h2 title text-center mb-40">Наші роботи</div>
                </div>
            </div>

            <!-- L & R section ( Right content ) -->
            <div class="section">
                <div class="container">
                    <div class="rl-block">
                        <div class="lr-img-1">
                            <picture>
                                <source srcset="img/lr-img-3.webp" type="image/webp">
                                <source srcset="img/lr-img-3.jpg" type="image/jpg">
                                <img width="384" height="384" src="#" alt="" loading="lazy">
                            </picture>
                        </div>
                        <div class="lr-content-1">
                            <div class="h2 title">Особливості наших проєктів.</div>
                            <div class="text">
                                <p>У кожному будинку, який ми зводимо, є більше, ніж просто цегла і бетон. Ми закладаємо в основу комфорт, функціональність і турботу про майбутніх мешканців.</p>
                                <p>Наші проєкти відрізняються продуманим плануванням, сучасними архітектурними рішеннями та увагою до деталей. Ми працюємо з надійними матеріалами, впроваджуємо енергоефективні технології та дбаємо про естетику — як зовні, так і всередині.</p>
                                <p>«Додому-Буд» — це будівництво з акцентом на якість, довговічність та стиль.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- STEPS -->
            <div class="section">
                <div class="container">
                    <div class="h2 title mb-40">Етапи роботи.</div>
                </div>
            </div>

            <!-- СTA -->
            <div class="section sec-black sec-padd">
                <div class="container">
                    <div class="content-block text-center">
                        <div class="h2 title">Готові до першого кроку?<br> Ваш дім ближче, ніж здається.</div>
                        <div class="btn open-popup" data-rel="2"><b>Надіслати заявку</b></div>
                    </div>
                </div>
            </div>

        </main>

        <?php include 'inc/global/_footer.php'; ?>
    </div>

    <!-- Popups -->
    <div class="popup-wrapper" id="popups"></div>

    <?php include 'inc/global/_bottom.php'; ?>
    <?php include 'inc/global/_form.php'; ?>

</body>
</html>