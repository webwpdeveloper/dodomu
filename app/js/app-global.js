//*====================================
//*  FUNCTIONS ON DOCUMENT READY      =
//*====================================
//*  FUNCTIONS CALC, RESIZE, SCROLL   =
//*====================================
//*  ANIMATION                        =
//*====================================
//*  HEADER                           =
//*====================================
//*  POPUPS                           =
//*====================================
//*  KEY FOCUS, TABS, ACCORDION       =
//*====================================
//*  DYNAMIC LOAD JS                  =
//*====================================

const _functions = {};
let winW, winH, winScr, isTouchScreen, isAndroid, isChrome, isIPhone, isMac, isSafari, isFirefox;

jQuery(function ($) {
    "use strict";

    //*================================
    //*  FUNCTIONS ON DOCUMENT READY  =
    //*================================
    isTouchScreen = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i),
        isAndroid = navigator.userAgent.match(/Android/i),
        isChrome = navigator.userAgent.indexOf('Chrome') >= 0 && navigator.userAgent.indexOf('Edge') < 0,
        isIPhone = navigator.userAgent.match(/iPhone/i),
        isMac = navigator.platform.toUpperCase().indexOf('MAC') >= 0,
        isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent),
        isFirefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;


    if (isTouchScreen) $('html').addClass('touch-screen');
    if (isAndroid) $('html').addClass('android');
    if (isChrome) $('html').addClass('chrome');
    if (isIPhone) $('html').addClass('ios');
    if (isMac) $('html').addClass('mac');
    if (isSafari) $('html').addClass('safari');
    if (isFirefox) $('html').addClass('firefox');



    //*===================================
    //*  FUNCTIONS CALC, RESIZE, SCROLL  =
    //*===================================
    // Function Calculations on page
    _functions.pageCalculations = function () {
        winW = $(window).outerWidth();
        winH = $(window).outerHeight();
    }
    _functions.pageCalculations();

    /* Function on page scroll */
    $(window).on('scroll', function () {
        _functions.scrollCall();
    });


    var prev_scroll = 0;
    _functions.scrollCall = function () {
        winScr = $(window).scrollTop();

        if (winScr > $('header').innerHeight()) {
            $('header').addClass('scrolled');

        } else if (winScr <= $('header').innerHeight()) {
            $('header').removeClass('scrolled');
            prev_scroll = 0;
        }

        prev_scroll = winScr;
    }
    _functions.scrollCall();


    /* Function on page resize */
    _functions.resizeCall = function () {
        setTimeout(function () {
            _functions.pageCalculations();
        }, 100);
    };


    if (!isTouchScreen) {
        $(window).on('resize', function () {
            _functions.resizeCall();
        });

    } else {
        window.addEventListener("orientationchange", function (e) {

            // Portrait
            if (window.orientation == 0) {
                $('html').removeClass('landscape');
            }
            // Landscape
            else {
                $('html').addClass('landscape');
            }

            _functions.resizeCall();
        }, false);
    };



    //*==============
    //*  ANIMATION  =
    //*==============
    // Elements Detect
    const observerAnimation = new IntersectionObserver(function (entries, observer) {
        entries.forEach((entry, index) => {
            if (!entry.isIntersecting) return;

            if (index < 10) {
                $(entry.target).css({ '--animate-index': `${index}` })
            } else {
                $(entry.target).css({ '--animate-index': `0` })
            }

            entry.target.classList.add('|', 'animated')
            observer.unobserve(entry.target)
        })
    }, {
        root: null,
        threshold: 0,
        rootMargin: winW < 768 ? "0% 0%" : "-10% 0%"
    });

    $(".slideUp").each(function (index, element) {
        observerAnimation.observe(element)
    });

    // Titles Animate
    $(".text-animate").each(function () {
        $(this).find("*").addBack().contents().each(function () {
            if (this.nodeType == 3) {
                let $this = $(this);
                $this.replaceWith(
                    $this.text().replace(/[^\s]+/g, "<i class='text-animate__word'><i>$&</i></i>")
                );
            }
        });

        let img = $(this).find("img");

        img.each(function (i, el) {
            $(el).wrap(function () {

                return '<i class="text-animate__word"><i></i></i></i>';
            });
        });
    });

    const options = {
        root: document,
        rootMargin: (window.innerWidth > 991) ? "0%" : "0%"
    };

    const textAnimateObserver = new IntersectionObserver((entries) => {
        for (const entry of entries)
            if (
                entry.isIntersecting &&
                !entry.target.classList.contains("text-animated")
            ) {
                entry.target.classList.add("text-animated");
                const letters = entry.target.querySelectorAll(".text-animate__word");
                const delay = 300 / letters.length;
                letters.forEach(function (letter, i) {
                    setTimeout(() => {
                        letter.classList.add("animated");
                    }, i * delay);
                });
            }
    }, options);

    setTimeout(() => {
        document.querySelectorAll(".text-animate")?.forEach((element) => {
            textAnimateObserver.observe(element);
        });
    }, 100);

    // Numbers
    if ($(".number-card-wrap").length) {
        const obsCounter = new IntersectionObserver(
            function (entries, observer) {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) return;

                    $(entry.target)
                        .find(".number-value span")
                        .each(function () {
                            $(this)
                                .prop("Counter", 0)
                                .animate(
                                    {
                                        Counter: $(this).text(),
                                    },
                                    {
                                        duration: 3500,
                                        easing: "swing",
                                        step: function (now) {
                                            $(this).text(Math.ceil(now));
                                        },
                                    }
                                );
                        });

                    observer.unobserve(entry.target);
                });
            },
            {
                root: null,
                threshold: 0,
                rootMargin: window.innerWidth > 767 ? "-10%" : "-5%",
            }
        );

        document.querySelectorAll(".number-card-wrap").forEach((numbers) => {
            obsCounter.observe(numbers);
        });
    }



    //*===========
    //*  HEADER  =
    //*===========
    // Open menu
    $(document).on('click', '.js_open_menu', function () {
        $('html').toggleClass('overflow-menu');
        $('header').removeClass('hide');
        $('header').toggleClass('open-menu');
    });

    // Close menu
    $(document).on('click', '.h-menu-overlay', function () {
        $('html').removeClass('overflow-menu');
        $('header').removeClass('open-menu');
    });



    //*===========
    //*  POPUPS  =
    //*===========
    _functions.scrollWidth = function () {
        let scrWidth = $(window).outerWidth() - $('body').innerWidth();

        $('body, .h-wrap').css({
            "paddingRight": `${scrWidth}px`
        });
    }


    // Popups Functions
    let popupTop = 0;
    _functions.removeScroll = function () {
        _functions.scrollWidth();
        popupTop = winScr;
        $('html').css({
            "top": '-' + winScr,
            "width": "100%"
        }).addClass("overflow-hidden");
    }

    _functions.addScroll = function () {
        _functions.scrollWidth();
        $('html').removeClass("overflow-hidden");
        window.scroll(0, popupTop);
    }

    _functions.openPopup = function (popup) {
        $('.popup-content').removeClass('active');
        $(popup + ', .popup-wrapper').addClass('active');
        _functions.removeScroll();
    };

    _functions.closePopup = function () {
        $('.popup-wrapper, .popup-content').removeClass('active');
        $('.video-popup iframe').remove();
        _functions.addScroll();
    };

    // Close  popup
    $(document).on('click', '.popup-content .close-popup, .popup-content .layer-close', function (e) {
        e.preventDefault();
        _functions.closePopup();
    });

    // Ajax popup
    $(document).on('click', '.open-popup', function (e) {
        const popupWrapper = document.getElementById("popups");

        if (e.target.closest('.open-popup')) {
            let dataRel = e.target.closest('.open-popup').getAttribute('data-rel');
            e.preventDefault();

            if (popupWrapper.hasChildNodes()) {
                _functions.openPopup('.popup-content[data-rel="' + dataRel + '"]');

            } else {
                const ajaxPopup = new XMLHttpRequest();

                ajaxPopup.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        popupWrapper.innerHTML = this.responseText;

                        setTimeout(function () {
                            _functions.initMask()
                            _functions.openPopup('.popup-content[data-rel="' + dataRel + '"]');
                        }, 50);
                    }
                };
                ajaxPopup.open("GET", "inc/popups/_popups.php", true);
                ajaxPopup.send();
            }
        }
    });



    //*===============================
    //*  KEY FOCUS, TABS, ACCORDION  =
    //*===============================
    // Detect if user is using keyboard tab-button to navigate
    // with 'keyboard-focus' class we add default css outlines
    function keyboardFocus(e) {
        if (e.keyCode !== 9) {
            return;
        }

        switch (e.target.nodeName.toLowerCase()) {
            case 'input':
            case 'select':
            case 'textarea':
                break;
            default:
                document.documentElement.classList.add('keyboard-focus');
                document.removeEventListener('keydown', keyboardFocus, false);
        }
    }
    document.addEventListener('keydown', keyboardFocus, false);

    // Tabs
    $(document).on('click', '._tab-item', function () {
        let tab = $(this).closest('._tabs').find('._tab');
        let i = $(this).index();

        $(this).addClass('is-active').siblings().removeClass('is-active');
        tab.eq(i).siblings('._tab:visible').stop().finish().fadeOut(function () {
            tab.eq(i).fadeIn(200);
        });
    });

    // Accordion
    $(document).on('click', '.accordion-title', function () {
        if ($(this).hasClass('is-active')) {
            $(this).removeClass('is-active').next().slideUp();
        } else {
            $(this).closest('.accordion').find('.accordion-title').not(this).removeClass('is-active').next().slideUp();
            $(this).addClass('is-active').next().slideDown();
        }
    });



    //*====================
    //*  DYNAMIC LOAD JS  =
    //*====================
    const videoObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;

            _functions.videoLoad(entry.target);
            observer.unobserve(entry.target)
        })
    }, {
        root: document,
        rootMargin: "50%",
    });

    document.querySelectorAll(".video").forEach((element) => {
        videoObserver.observe(element);
    });

    _functions.videoLoad = function (block) {
        let videoBlock = $(block).find('video'),
            videoSrc = videoBlock.data('src');
        videoBlock.attr('src', videoSrc);
    };

    //activate autoplay video
    if ($('.video').length) {
        $(this).find('video').attr("autoplay", "");
    }



    //*=============
    //*  OTHER JS  =
    //*=============
    function customCursor() {
        if (winW >= 1200) {
            const $cursor = $('.cursor');

            $(window).on("mousemove", function (e) {
                $cursor.css({
                    'left': e.clientX + 'px',
                    'top': e.clientY + 'px'
                });

                if (
                    $(e.target).closest('a').length ||
                    $(e.target).closest('.open-popup').length
                ) {
                    $cursor.css('transform', 'translate(-50%, -50%) scale(1)');
                } else {
                    $cursor.css('transform', 'translate(-50%, -50%) scale(0.25)');
                }
            });

            $(window).on("mouseleave", function () {
                $cursor.css('opacity', '0');
            });

            $(window).on("mouseenter", function () {
                $cursor.css('opacity', '1');
            });
        }
    };
    customCursor();
});