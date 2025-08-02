<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/global/_top.php'; ?>
    <title>Template :: Home</title>
</head>

<body>
    <div id="content-block">
        <?php include 'inc/global/_header.php'; ?>

        <main>
            <?php include 'template-parts/_seo-block.php'; ?>

            <?php include 'template-parts/_banner-slider.php'; ?>

            <?php include 'template-parts/_advantages.php'; ?>

            <?php 
                $deleteBtn = false; 
                include 'inc/products/product-card/_products-slider.php'; 
            ?>

            <?php include 'template-parts/_latest-blog.php'; ?>

            <?php include 'template-parts/_form-block.php'; ?>
        </main>

        <?php include 'inc/global/_footer.php'; ?>
    </div>

    <!-- Popups -->
    <div class="popup-wrapper" id="popups"></div>

    <?php include 'inc/global/_bottom.php'; ?>
    <?php include 'inc/global/_cookies.php'; ?>
    <?php include 'inc/global/_swiper.php'; ?>
    <?php include 'inc/global/_form.php'; ?>

    <!-- informers -->
    <?php include 'inc/popups/_informers.php'; ?>

    <!-- FOR PRODUCT -->
    <script defer src="js/app-product.js"></script>
</body>

</html>