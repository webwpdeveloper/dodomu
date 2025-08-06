<!DOCTYPE html>
<html lang="uk">

<head>
    <?php include 'inc/global/_top.php'; ?>
    <title>Template :: Elements</title>
</head>

<body>
    <div id="content-block">
        <?php include 'inc/global/_header.php'; ?>

        <main>
            <!-- popup -->
            <div class="section">
                <div class="container">
                    <div class="h1 title mb-md text-center">Popups</div>

                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10 text-center"
                            style="font-size:0;display:flex;flex-wrap:wrap;gap:0.625rem;">
                            <div class="btn btn-primary open-popup" data-rel="1">
                                <b>Thanks</b>
                            </div>
                            <div class="btn btn-primary open-popup" data-rel="2">
                                <b>Form popup</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- inputs -->
            <div class="section">
                <div class="container">
                    <div class="h1 title mb-md text-center">Form inputs</div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <form class="form-block">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-field">
                                            <div class="input-label">Ім'я*</div>
                                            <input class="input" type="text" placeholder="Введіть ваше ім'я" aria-label="Ім'я" required>
                                            <div class="input-error">Будь ласка, заповніть це поле</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-field">
                                            <div class="input-label">Телефон*</div>
                                            <input class="input" type="tel" placeholder="Введіть ваш номер телефону" aria-label="Номер телефону" required>
                                            <div class="input-error">Будь ласка, заповніть це поле</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-field">
                                            <div class="input-label">Емейл*</div>
                                            <input class="input" type="email" placeholder="Емейл" aria-label="Емейл" required>
                                            <div class="input-error">Будь ласка, заповніть це поле</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-field">
                                            <div class="input-label">Повідомлення*</div>
                                            <textarea class="input" aria-label="Напишіть ваше повідомлення" required></textarea>
                                            <div class="input-error">Будь ласка, заповніть це поле</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ch-box-wrap">
                                    <label class="ch-box">
                                        <input type="checkbox">
                                        <span>
                                            Я прочитав(-ла) і погоджуюся з <a href="privacy.php">Політикою конфіденційності</a>
                                        </span>
                                    </label>
                                </div>

                                <div class="ch-box-wrap">
                                    <label class="ch-box">
                                        <input type="radio" name="name">
                                        <span>Вибір 1</span>
                                    </label>
                                    <label class="ch-box">
                                        <input type="radio" name="name">
                                        <span>Вибір 2</span>
                                    </label>
                                    <label class="ch-box">
                                        <input type="radio" name="name">
                                        <span>Вибір 3</span>
                                    </label>
                                </div>

                                <!-- change on program to button tag and add type="submit" -->
                                <div class="btn btn-primary open-popup" data-rel="1">
                                    <b data-txt="Надіслати">Надіслати</b>
                                    <div class="btn-icon">
                                        <svg width="24" height="24">
                                            <use xlink:href="img/icons/icons_global.svg#arrow-rt" fill="none"></use>
                                        </svg>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- btn -->
            <div class="section">
                <div class="container">
                    <div class="h1 title mb-md text-center">Buttons</div>
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="btn btn-primary">
                                <b data-txt="Отримати приблизний розрахунок">Отримати приблизний розрахунок</b>
                            </div>
                            <div class="btn btn-primary">
                                <b data-txt="Отримати приблизний розрахунок">Отримати приблизний розрахунок</b>
                                <div class="btn-icon">
                                    <svg width="24" height="24">
                                        <use xlink:href="img/icons/icons_global.svg#arrow-rt" fill="none"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="btn btn-primary disabled">
                                <b data-txt="Отримати приблизний розрахунок">Отримати приблизний розрахунок</b>
                            </div>
                            <div class="btn-close"></div>
                        </div>

                        <div class="col-md-6">
                            <div class="btn btn-primary btn-block">
                                <b data-txt="Отримати приблизний розрахунок">Отримати приблизний розрахунок</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Colors  -->
            <div class="section">
                <div class="container">
                    <div class="h2 title mb-md text-center">Colors</div>

                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                    <span
                                        style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--clr-title)">
                                    </span>
                                    <br>
                                    <b>--clr-title: #131E29</b>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                    <span
                                        style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--clr-text)">
                                    </span>
                                    <br>
                                    <b>--clr-text: #4A5055</b>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                    <span
                                        style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--clr-plc)">
                                    </span>
                                    <br>
                                    <b>--clr-plc: #4A5055</b>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                    <span
                                        style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--clr-input)">
                                    </span>
                                    <br>
                                    <b>--clr-input: #D3D3D3</b>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                    <span
                                        style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--clr-black)">
                                    </span>
                                    <br>
                                    <b>--clr-black: #131E29</b>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                    <span
                                        style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--clr-white)">
                                    </span>
                                    <br>
                                    <b>--clr-white: #ffffff</b>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                    <span
                                        style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--clr-red)">
                                    </span>
                                    <br>
                                    <b>--clr-red: #e70000</b>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                    <span
                                        style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--clr-grey)">
                                    </span>
                                    <br>
                                    <b>--clr-grey: #D3D3D3</b>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                    <span
                                        style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--clr-grey-2)">
                                    </span>
                                    <br>
                                    <b>--clr-grey-2: #E6E6E6</b>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                    <span
                                        style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--clr-org)">
                                    </span>
                                    <br>
                                    <b>--clr-org: #FF6A39</b>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                    <span
                                        style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--clr-green)">
                                    </span>
                                    <br>
                                    <b>--clr-green: #009F4D</b>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                    <span
                                        style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--clr-prl)">
                                    </span>
                                    <br>
                                    <b>--clr-prl: #A05EB5</b>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                    <span
                                        style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--bg-1)">
                                    </span>
                                    <br>
                                    <b>--clr-bg-1: #F9F9F9</b>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                    <span
                                        style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--bg-2)">
                                    </span>
                                    <br>
                                    <b>--clr-bg-2: #1A2530</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Editor text -->
            <div class="section">
                <div class="container">
                    <div class="h1 title mb-md text-center">Editor text</div>
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10 ">
                            <h1>H1 - Lorem ipsum dolor</h1>
                            <h2>H2 - Lorem ipsum dolor</h2>
                            <h3>H3 - Lorem ipsum dolor</h3>
                            <h4>H4 - Lorem ipsum dolor</h4>
                            <h5>H5 - Lorem ipsum dolor</h5>
                            <h6>H6 - Lorem ipsum dolor</h6>
                        </div>

                        <!-- Editor text -->
                        <div class="col-xl-8 col-lg-10">
                            <div class="text">
                                <h4>Lorem ipsum dolor sit amet, consectetur</h4>
                                <p>
                                    <strong>Lorem ipsum dolor</strong> sit amet consectetur. Fermentum <a href="#">bibendum tempor</a> nisl
                                    bibendum purus mi eget facilisis. Magna sit sed consequat netus et mauris. Consectetur amet risus malesuada
                                    vivamus vivamus facilisi. Vitae elementum aliquam lobortis pellentesque. Commodo nisl rutrum ut ac
                                    pellentesque tortor. Fermentum enim porttitor interdum viverra sit sit morbi.
                                </p>
                                <p>
                                    <b>Lorem ipsum</b> dolor sit amet consectetur. Fermentum bibendum tempor nisl bibendum purus mi eget
                                    facilisis. Magna sit sed consequat netus et mauris. Consectetur amet risus malesuada vivamus vivamus
                                    facilisi.
                                </p>

                                <picture>
                                    <source srcset="img/desktop.webp" type="image/webp">
                                    <source srcset="img/desktop.jpg" type="image/jpg">
                                    <img width="380" height="240" src="#" alt="" loading="lazy">
                                </picture>

                                <h4>Lorem ipsum dolor sit amet, consectetur</h4>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet consectetur. Fermentum</li>
                                    <li>Lorem ipsum dolor sit amet consectetur. Fermentum</li>
                                    <li>Lorem ipsum dolor sit amet consectetur. Fermentum</li>
                                    <li>
                                        Fermentum <a href="#">bibendum tempor</a> nisl bibendum purus mi eget facilisis. Magna sit sed consequat
                                        netus et mauris. Fermentum bibendum tempor nisl bibendum purus mi eget facilisis. Magna sit sed
                                        consequat netus et mauris
                                    </li>
                                </ul>

                                <figure class="aligncenter">
                                    <picture>
                                        <source srcset="img/laptop.webp" type="image/webp">
                                        <source srcset="img/laptop.jpg" type="image/jpg">
                                        <img width="380" height="240" src="#" alt="" loading="lazy">
                                    </picture>
                                    <figcaption>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda eum incidunt alias praesentium
                                        tempore obcaecati pariatur. Obcaecati adipisci porro provident eveniet rem sapiente fugiat sed, odit
                                        esse ipsum maxime quo!
                                    </figcaption>
                                </figure>

                                <h4>Lorem ipsum dolor sit amet, consectetur</h4>
                                <ol>
                                    <li>Lorem ipsum dolor sit amet consectetur. Fermentum</li>
                                    <li>Lorem ipsum dolor sit amet consectetur. Fermentum</li>
                                    <li>Lorem ipsum dolor sit amet consectetur. Fermentum</li>
                                    <li>
                                        Fermentum <a href="#">bibendum tempor</a> nisl bibendum purus mi eget facilisis. Magna sit sed consequat
                                        netus et mauris. Fermentum bibendum tempor nisl bibendum purus mi eget facilisis. Magna sit sed
                                        consequat netus et mauris
                                    </li>
                                </ol>

                                <iframe title="frame" src="https://www.youtube.com/embed/Hqj2elVAP_k" loading='lazy'
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>


                                <blockquote>
                                    Fermentum bibendum tempor nisl bibendum purus mi eget facilisis bibendum purus. Magna netus et mauris.
                                    Fermentum bibendum tempor nisl bibendum purus mi eget facilisis. Magna sit sed consequat netus et mauris
                                </blockquote>

                                <p>
                                    Lorem ipsum dolor sit amet consectetur. Fermentum bibendum tempor nisl bibendum purus mi eget facilisis.
                                    Magna sit sed consequat netus et mauris. Consectetur amet risus malesuada vivamus vivamus facilisi. Vitae
                                    elementum aliquam lobortis pellentesque. Commodo nisl rutrum ut ac pellentesque tortor. Fermentum enim
                                    porttitor interdum viverra sit sit morbi.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur. Fermentum bibendum tempor nisl bibendum purus mi eget facilisis.
                                    Magna sit sed consequat netus et mauris. Consectetur amet risus malesuada vivamus vivamus facilisi.
                                </p>

                                <h4>Lorem ipsum dolor sit amet, consectetur</h4>
                                <table>
                                    <thead>
                                        <tr>
                                            <td>Properties</td>
                                            <td>Apartments</td>
                                            <td>Links</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Professional</td>
                                            <td>Antibes</td>
                                            <td>Antibes</td>
                                        </tr>
                                        <tr>
                                            <td>Cannes</td>
                                            <td>Cannes</td>
                                            <td>Real estate Georgia</td>
                                        </tr>
                                        <tr>
                                            <td>French Riviera magazine</td>
                                            <td>Grasse</td>
                                            <td>Grasse</td>
                                        </tr>
                                        <tr>
                                            <td>To subscribe</td>
                                            <td>Monaco</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Grasse</td>
                                            <td>Short term rentals</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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