<!DOCTYPE html>
<html lang="uk">

<head>
    <?php include 'inc/global/_top.php'; ?>
    <title>Dodomy Bud :: Сторінки не існує</title>
</head>

<body>
    <div id="content-block">
        <?php include 'inc/global/_header.php'; ?>

        <main>
            <div class="section page-404">
                <div class="container">
                    <div class="page-404-inner col-xl-8 col-lg-10 mx-auto">
                        <div class="h1 page-404-title slideUp">404</div>

                        <h1 class="h1 title text-animate">Такої сторінки не існує.</h1>

                        <div class="text slideUp">Вибачте, сторінку не знайдено. Пропонуємо повернутись на головну сторінку</div>

                        <div class="slideUp">
                            <a class="btn btn-primary" href="index.php">
                                <b data-txt="На головну">На головну</b>
                                <div class="btn-icon">
                                    <svg width="24" height="24">
                                        <use xlink:href="img/icons/icons_global.svg#arrow-rt" fill="none"></use>
                                    </svg>
                                </div>
                            </a>
                        </div>
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