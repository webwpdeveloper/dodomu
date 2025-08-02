<!-- Banner -->
<div class="section banner-section">
    <div class="banner">
        <?php
            $link = 'blog__page.php';
            $prevPage = 'Блог';
            $currentPage = 'Назва статті';
            include 'template-parts/_breadcrumbs.php';
        ?>

        <div class="banner-media">
            <picture>
                <!-- desktop -->
                <source srcset="img/laptop.webp" type="image/webp" media="(min-width:768px)">
                <source srcset="img/laptop.jpg" type="image/jpg" media="(min-width:768px)">
                <!-- mobile -->
                <source srcset="img/mobile.webp" type="image/webp" media="(max-width:767px)">
                <source srcset="img/mobile.jpg" type="image/jpg" media="(max-width:767px)">
                <img width="380" height="240" src="#" alt="Banner Image" loading="eager">
            </picture>
        </div>

        <div class="banner-align align-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="banner-info text-center">
                            <h1 class="h1 title">
                                Software & product engineering
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>