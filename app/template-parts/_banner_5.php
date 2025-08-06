<!-- Banner -->
<div class="section banner-section">
    <div class="banner">
        <?php
            $link = 'service__page.php';
            $prevPage = 'Послуги';
            $currentPage = 'Будівництво';
            include 'template-parts/_breadcrumbs.php';
        ?>

        <div class="banner-media" style="background-color: #181B20;">
            <picture>
                <!-- desktop -->
                <source srcset="img/banner-img-2.webp" type="image/webp" media="(min-width:768px)">
                <source srcset="img/banner-img-2.jpg" type="image/jpg" media="(min-width:768px)">
                <!-- mobile -->
                <source srcset="img/banner-img-2.webp" type="image/webp" media="(max-width:767px)">
                <source srcset="img/banner-img-2 .jpg" type="image/jpg" media="(max-width:767px)">
                <img width="380" height="240" src="#" alt="Banner Image" loading="eager">
            </picture>
        </div>

        <div class="banner-align align-bottom">
            <div class="container">
                <div class="banner-info slideUp">
                    <h1 class="h1 title text-animate">Будівництво.</h1>
                </div>
            </div>
        </div>
    </div>
</div>