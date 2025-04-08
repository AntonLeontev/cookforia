$(document).ready(function () {
    //header
    document.addEventListener('click', documentActions);
    if (window.matchMedia("(min-width: 991.98px)").matches) {
        document.addEventListener('mouseover', documentHover);
    }


    function documentActions(e) {
        const targetElement = e.target;
        if (targetElement.closest('[data-parent]')) {
            const numMenu = targetElement.dataset.parent ? targetElement.dataset.parent : null,
                subMenu = document.querySelector(`[data-submenu="${numMenu}"]`);
            if (subMenu) {
                const activeLink = document.querySelector('._submenu-open--active'),
                    activeBlock = document.querySelector('._submenu-open');
                if (activeLink && activeLink !== targetElement) {
                    activeLink.classList.remove('_submenu-open--active');
                    activeBlock.classList.remove('_submenu-open');
                }
                targetElement.classList.toggle('_submenu-open--active');
                subMenu.classList.toggle('_submenu-open');
            } else {
                console.log('Нет такого меню!');
            }
            e.preventDefault();
        }
        if (targetElement.closest('.has-submenu .nav-link')) {
            const activeLink = document.querySelector('._submenu-open--active'),
                activeBlock = document.querySelector('._submenu-open'),
                submenu = document.querySelector('.submenu-wrapper');
            activeLink ? activeLink.classList.remove('_submenu-open--active') : null
            activeBlock ? activeBlock.classList.remove('_submenu-open') : null
            targetElement.classList.toggle('_active-nav-link');
            submenu.classList.toggle('submenu-wrapper_open')
        }
    }

//thumb corusel
    var sync1 = $("#sync1");
    var sync2 = $("#sync2");
    var slidesPerPage = 3; //globaly define number of elements per page
    var syncedSecondary = true;

    sync1.owlCarousel({
        items: 1,
        slideSpeed: 1000,
        nav: false,
        autoplay: false,
        dots: false,
        loop: true,
        responsiveRefreshRate: 200,
        responsive:
            {
                320: {dots: true},
                480: {dots: false},
            }
    }).on('changed.owl.carousel', syncPosition);

    sync2
        .on('initialized.owl.carousel', function () {
            sync2.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
            items: slidesPerPage,
            nav: false,
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            responsiveRefreshRate: 100,
            responsive:
                {
                    320: {margin: 10},
                    768: {margin: 10},
                    992: {margin: 30},
                }
        }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;

        //if you disable loop you have to comment this block
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }

        //end block

        sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();

        if (current > end) {
            sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
    }

    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 100, true);
        }
    }

    sync2.on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
    });

// end thumb corusel
    function documentHover(e) {
        const targetElement = e.target;
        if (targetElement.closest('[data-parent]')) {
            const numMenu = targetElement.dataset.parent ? targetElement.dataset.parent : null,
                subMenu = document.querySelector(`[data-submenu="${numMenu}"]`);
            if (subMenu) {
                const activeLink = document.querySelector('._submenu-open--active'),
                    activeBlock = document.querySelector('._submenu-open');
                if (activeLink && activeLink !== targetElement) {
                    activeLink.classList.remove('_submenu-open--active');
                    activeBlock.classList.remove('_submenu-open');
                }
                targetElement.classList.toggle('_submenu-open--active');
                subMenu.classList.toggle('_submenu-open');
            } else {
                console.log('Нет такого меню!');
            }
            e.preventDefault();
        }
        if (targetElement.closest('.nav-link')) {
            const activeLink = document.querySelector('._submenu-open--active'),
                activeBlock = document.querySelector('._submenu-open');
            activeLink ? activeLink.classList.remove('_submenu-open--active') : null
            activeBlock ? activeBlock.classList.remove('_submenu-open') : null

        }
    }

    // Разворачивание телефона в шапке
    $(".header-phone.--desktop").click(function (e) {
        e.preventDefault();
        $(this).toggleClass("--active");
    });

    // Инициализация карусели
    $(".menu-content-images").owlCarousel({
        items: 1,
        loop: false,
        margin: 5,
        nav: false,
    });

    // Инициализация галереи
    $(".schedule-gallery-container").owlCarousel({
        loop: true,
        margin: 10,
        items: 1,
        nav: true,
    });
    // Маска для номера телефона в форме заявки
    $(".input-phone").mask("+7(999) 999-99-99");

    // Выбираем нужное меню в форме записи, по клику на кнопке "Выбрать" (на всех страницах кроме расписания)
    $(".menu-select-btn").click(function (e) {
        let id = $(this).data("form-val");
        $("select#wdgMoyklass29899Form1793").val(id);
    });

    // Выбираем нужное занятие в форме записи, по клику на кнопке "Выбрать" (на странице расписания)
    $(".lesson-select-btn").click(function (e) {
        let id = $(this).data("form-val");
        $("select.lesson-select").val(id);
    });

    var observer = new MutationObserver(function (mutations) {
        var el = document.getElementById("wdgMoyklass29899Form1792");
        if (el) {
            $("#wdgMoyklass29899Form1792").datetimepicker({
                footer: true,
                modal: true,
                locale: "ru-ru",
                format: "HH:MM d mmmm yyyy",
            });
            observer.disconnect();
        }
    });
    observer.observe(document.body, {childList: true});

    // Установка капчи

    let headerFormCaptcha, bottomFormCaptcha, phoneFormCaptcha;
    const mainForm = document.getElementById("main-form");
	const mainFormButton = mainForm.querySelector("button[type=submit]");
    const bottomForm = document.getElementById("bottom-form");
    const bottomFormButton = bottomForm.querySelector("button[type=submit]");
    const phoneMobile = document.getElementById("header-phone_mobile");

    const smartCaptchaConfig = function (callback) {
        return {
            sitekey: "ysc1_zpw1q6iG2Iuzxh3J8lcaYAYBtgyQB3nmQOMd7N4Nf577608a",
            hideShield: true,
            hl: "ru",
            test: false,
            invisible: true, // Сделать капчу невидимой
            callback: callback,
        };
    };

    function onloadFunction() {
        if (!window.smartCaptcha) {
            return;
        }

        if (mainForm) {
            let sendMainForm = function (token) {
                mainFormButton.disabled = true;

                $.ajax({
                    type: "POST",
                    url: $("#main-form").attr("action"),
                    data: $("#main-form").serialize(),
                    success: function (data) {
                        $("#main-form .form-fields").hide();
                        $("#main-form .form-success").show();
                    },
                    error: function () {
                        mainFormButton.disabled = false;
                    },
                });
            };

            headerFormCaptcha = window.smartCaptcha.render(
                "captcha-container",
                smartCaptchaConfig(sendMainForm)
            );
        }

        if (bottomForm) {
            let sendBottomForm = function (token) {
                bottomFormButton.disabled = true;

                $.ajax({
                    type: "POST",
                    url: $("#bottom-form").attr("action"),
                    data: $("#bottom-form").serialize(),
                    success: function (data) {
                        $("#bottom-form .form-fields").hide();
                        $("#bottom-form .form-success").show();
                        bottomFormButton.disabled = false;
                    },
                    error: function () {
                        bottomFormButton.disabled = false;
                    },
                });
            };

            bottomFormCaptcha = window.smartCaptcha.render(
                "bottom-captcha-container",
                smartCaptchaConfig(sendBottomForm)
            );
        }

        if (phoneMobile) {
            const sendPhoneMobile = (token) => {
                location.href = phoneMobile.getAttribute("href");
            };

            phoneFormCaptcha = window.smartCaptcha.render(
                "phone-captcha-container",
                smartCaptchaConfig(sendPhoneMobile)
            );

            phoneMobile.addEventListener("click", (event) => {
                event.preventDefault();

                if (!window.smartCaptcha) {
                    return;
                }

                window.smartCaptcha.execute(phoneFormCaptcha);
            });
        }
    }

    // Отправка форм через AJAX
    $("form [name=utm_source]").val(getCookie("utm_source"));
    $("form [name=utm_medium]").val(getCookie("utm_medium"));
    $("form [name=utm_campaign]").val(getCookie("utm_campaign"));
    $("form [name=utm_content]").val(getCookie("utm_content"));
    $("form [name=utm_term]").val(getCookie("utm_term"));

    $("#main-form").on("submit", function (e) {
        e.preventDefault();

        if (!window.smartCaptcha) {
            return;
        }

        window.smartCaptcha.execute(headerFormCaptcha);
    });

    $("#bottom-form").on("submit", function (e) {
        e.preventDefault();

        if (!window.smartCaptcha) {
            return;
        }

        window.smartCaptcha.execute(bottomFormCaptcha);
    });

    onloadFunction();
});

function getCookie(name) {
    let matches = document.cookie.match(
        new RegExp(
            "(?:^|; )" +
            name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, "\\$1") +
            "=([^;]*)"
        )
    );
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

// Работа youtube видео

document.addEventListener("DOMContentLoaded", function () {
    let video = document.querySelector(".videos-container");

    if (video) {
        video.addEventListener("click", function (e) {
            let wrap = e.target.closest(".image-stub-wrap");

            if (!wrap) return;
            wrap.hidden = true;

            let block = e.target.closest(".videos-block");
            if (!block) return;

            let iframe = block.querySelector(".videos-block-iframe");
            iframe.hidden = false;
            iframe.setAttribute("src", iframe.dataset.src);
        });
    }
});

// Заполнение metrika_client_id
ym(57334753, "getClientID", function (clientID) {
    let inputs = document.getElementsByName("metrika_client_id");

    inputs.forEach((el) => {
        el.value = clientID;
    });
});
