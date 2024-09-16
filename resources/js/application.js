$(document).ready(function () {

    // Разворачивание телефона в шапке
    $('.header-phone.--desktop').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('--active');
    });

    // Инициализация карусели
    $('.menu-content-images').owlCarousel({
        items: 1,
        loop: false,
        margin: 5,
        nav: false
    });

    // Инициализация галереи
    $('.schedule-gallery-container').owlCarousel({
        loop: true,
        margin: 10,
        items: 1,
        nav: true
    });

    // Маска для номера телефона в форме заявки
    $(".input-phone").mask("+7(999) 999-99-99");

    // Выбираем нужное меню в форме записи, по клику на кнопке "Выбрать" (на всех страницах кроме расписания)
    $('.menu-select-btn').click(function (e) {
        let id = $(this).data('form-val');
        $('select#wdgMoyklass29899Form1793').val(id);
    });

    // Выбираем нужное занятие в форме записи, по клику на кнопке "Выбрать" (на странице расписания)
    $('.lesson-select-btn').click(function (e) {
        let id = $(this).data('form-val');
        $('select.lesson-select').val(id);
    });

    var observer = new MutationObserver(function (mutations) {
        var el = document.getElementById('wdgMoyklass29899Form1792');
        if (el) {
            $('#wdgMoyklass29899Form1792').datetimepicker({ footer: true, modal: true, locale: 'ru-ru', format: "HH:MM d mmmm yyyy" });
            observer.disconnect();
        }
    });
    observer.observe(document.body, { childList: true });

    // // Range slider
    // var rangeSlider = document.getElementById("range-line");
    // var rangeBullet = document.getElementById("range-bullet");
    //
    // showSliderValue();
    //
    // rangeSlider.addEventListener("input", showSliderValue, false);
    //
    // function showSliderValue() {
    //     rangeBullet.innerHTML = rangeSlider.value;
    //     var bulletPosition = (rangeSlider.value - rangeSlider.min) / (rangeSlider.max - rangeSlider.min);
    //     var bulletPositionPer = bulletPosition * 100;
    //
    //     rangeBullet.style.left = (bulletPositionPer) + "%";
    //     $(".range-slider .range-slider-min").html(rangeSlider.min);
    //     $(".range-slider .range-slider-max").html(rangeSlider.max);
    // }



    // Отправка форм через AJAX
    $('form [name=utm_source]').val(getCookie('utm_source'));
    $('form [name=utm_medium]').val(getCookie('utm_medium'));
    $('form [name=utm_campaign]').val(getCookie('utm_campaign'));
    $('form [name=utm_content]').val(getCookie('utm_content'));
    $('form [name=utm_term]').val(getCookie('utm_term'));

    $('#main-form').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: $('#main-form').attr('action'),
            data: $('#main-form').serialize(),
            success: function (data) {
                $('#main-form .form-fields').hide();
                $('#main-form .form-success').show();
            },
            error: function () {
                // Ничего не делаем
            }
        });
    });

    $('#sign-in-form').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: $('#bottom-form').attr('action'),
            data: $('#bottom-form').serialize(),
            success: function (data) {
                $('#bottom-form .form-fields').hide();
                $('#bottom-form .form-success').show();
            },
            error: function () {
                // Ничего не делаем
            }
        });
    });

});



function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}




