$(document).ready(function () {
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
    observer.observe(document.body, { childList: true });

    // Установка капчи

    let headerFormCaptcha, bottomFormCaptcha, phoneFormCaptcha;
    const mainForm = document.getElementById("main-form");
    const bottomForm = document.getElementById("bottom-form");
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
                $.ajax({
                    type: "POST",
                    url: $("#main-form").attr("action"),
                    data: $("#main-form").serialize(),
                    success: function (data) {
                        $("#main-form .form-fields").hide();
                        $("#main-form .form-success").show();
                    },
                    error: function () {
                        // Ничего не делаем
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
                $.ajax({
                    type: "POST",
                    url: $("#bottom-form").attr("action"),
                    data: $("#bottom-form").serialize(),
                    success: function (data) {
                        $("#bottom-form .form-fields").hide();
                        $("#bottom-form .form-success").show();
                    },
                    error: function () {
                        // Ничего не делаем
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
