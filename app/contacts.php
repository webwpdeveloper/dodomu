<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/global/_top.php'; ?>
    <title>Template :: Contacts</title>
</head>

<body>
    <div id="content-block">
        <?php include 'inc/global/_header.php';?>

        <main>
            <!-- Contact ( type 1 ) -->
            <div class="section">
                <div class="container">
                    <!-- title -->
                    <h1 class="h2 title mb-md text-center">
                        Contact Us - type 1
                    </h1>

                    <!-- Contact items -->
                    <div class="row ct-items-row">
                        <div class="col-xl-3 col-md-6">
                            <div class="contact-item">
                                <div class="contact-item-img">
                                    <img width="30" height="30" src="img/icons/icon-phone.svg" alt="" loading="lazy">
                                </div>
                                <div class="contact-item-info">
                                    <a href="tel:+380988888888">
                                        +38 (098) 888 88 88
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="contact-item">
                                <div class="contact-item-img">
                                    <img width="30" height="30" src="img/icons/icon-mail.svg" alt="" loading="lazy">
                                </div>
                                <div class="contact-item-info">
                                    <a href="mailto:contact@gmail.com">
                                        contact@gmail.com
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="contact-item">
                                <div class="contact-item-img">
                                    <img width="30" height="30" src="img/icons/icon-pin.svg" alt="" loading="lazy">
                                </div>
                                <div class="contact-item-info">
                                    <div>
                                        Lorem ipsum dolor sit 159, consectetur
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="contact-item">
                                <div class="contact-item-img">
                                    <img width="30" height="30" src="img/icons/icon-calendar.svg" alt="" loading="lazy">
                                </div>
                                <div class="contact-item-info">
                                    <div>Mon. - Fr. 09:00 - 20:00</div>
                                    <div>Mon. - Fr. 09:00 - 20:00</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="contact-block mt-md">
                        <div class="map" id="map" data-link="json/map.json" data-lat="" data-lng="" data-xs-zoom=""
                            data-zoom="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact ( type 2 ) -->
            <div class="section">
                <div class="container">
                    <!-- title -->
                    <h1 class="h2 title mb-md text-center">
                        Contact Us - type 2
                    </h1>

                    <div class="row">
                        <div class="col-lg-4">
                            <!-- Contact items -->
                            <div class="contact-item">
                                <div class="contact-item-img">
                                    <img width="30" height="30" src="img/icons/icon-phone.svg" alt="" loading="lazy">
                                </div>
                                <div class="contact-item-info">
                                    <a href="tel:+380988888888">
                                        +38 (098) 888 88 88
                                    </a>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-item-img">
                                    <img width="30" height="30" src="img/icons/icon-mail.svg" alt="" loading="lazy">
                                </div>
                                <div class="contact-item-info">
                                    <a href="mailto:contact@gmail.com">
                                        contact@gmail.com
                                    </a>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-item-img">
                                    <img width="30" height="30" src="img/icons/icon-pin.svg" alt="" loading="lazy">
                                </div>
                                <div class="contact-item-info">
                                    <div>
                                        Lorem ipsum dolor sit 159, consectetur
                                    </div>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-item-img">
                                    <img width="30" height="30" src="img/icons/icon-calendar.svg" alt="" loading="lazy">
                                </div>
                                <div class="contact-item-info">
                                    <div>Mon. - Fr. 09:00 - 20:00</div>
                                    <div>Mon. - Fr. 09:00 - 20:00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <!-- Map -->
                            <div class="spacer-sm d-lg-none"></div>
                            <div class="contact-block">
                                <div class="map" id="map-2" data-link="json/map-2.json" data-lat="49.878439"
                                    data-lng="24.08405" data-xs-zoom="" data-zoom=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact ( type 3 ) -->
            <div class="section">
                <div class="container">
                    <!-- title -->
                    <h1 class="h2 title mb-md text-center">
                        Contact Us - type 3
                    </h1>

                    <div class="sub-links js_map_filters">
                        <ul>
                            <li class="is-active" data-map-filter="*">All<i></i></li>
                            <li data-map-filter="schools">Schools<i></i></li>
                            <li data-map-filter="parks">Parks<i></i></li>
                            <li data-map-filter="infrastructure">Infrastructure<i></i></li>
                        </ul>
                    </div>

                    <!-- Map -->
                    <div class="contact-block mt-sm">
                        <div class="map" id="map-filter" data-link="json/map-filter.json" data-lat="49.8444114"
                            data-lng="24.0086384" data-xs-zoom="15" data-zoom="17"></div>
                    </div>
                </div>
            </div>

            <?php include 'template-parts/_form-block.php';?>
        </main>

        <?php include 'inc/global/_footer.php';?>
    </div>

    <!-- Popups -->
    <div class="popup-wrapper" id="popups"></div>
    <?php include 'inc/global/_bottom.php';?>
    <?php include 'inc/global/_form.php';?>
    <?php include 'inc/map/_include-files-map.php';?>
</body>

</html>