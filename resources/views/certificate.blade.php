@extends('layouts.app')

@section('og_title', "Подарочные сертификаты В КУЛИНАРНУЮ СТУДИЮ Cookforia")
@section('og_description', 'Кулинарная студия в Санкт-Петербурге. Меню на человека от 2000 руб. Бесплатные напитки.')
@section('og_image', 'https://cookforia.ru/images/menu-back.jpg')
@section('title', 'Подарочные сертификаты В КУЛИНАРНУЮ СТУДИЮ Cookforia')
@section('description', 'Кулинарная студия в Санкт-Петербурге. Меню на человека от 2000 руб. Бесплатные напитки.')
@section('keywords', 'кулинарный мастер-класс, день рождения, корпоратив, девичник, мероприятие, праздник')

@section('content')
    <div class="section section-main section-main-certificate">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>подарочные сертификаты <span>в&nbsp;кулинарную студию Cookforia</span></h1>
                <p>
                    Подарочный сертификат Cookforia — оригинальный и практичный подарок, который оценят и женщины, и
                    мужчины. Подарочный сертификат можно активировать на любое мероприятие из нашего календаря.
                    Получатель подарка сам выберет развлечения, которые ему по вкусу.
                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>
    <div class="section section-padding">
        <div class="container">
            <div class="certificate-about d-flex align-items-center flex-md-nowrap flex-wrap">
                <div class="certificate-about__text">
                    <p>
                        Подарочный сертификат на кулинарный мастер-класс станет отличным сюрпризом и романтической
                        возможностью удивить и накормить.
                    </p>
                    <p>
                        Подарите себе и своим друзьям мастер-класс в кулинарной студии Cookforia, и потрясающие
                        воспоминания останутся с вами надолго!
                    </p>
                    <p>
                        Зажигательные шеф-повара поделятся своими секретами, дружная веселая компания не даст заскучать,
                        а вкусный гастрономический ужин, приготовленный своими руками, станет прекрасным завершением
                        вечера!
                    </p>
                    <p>
                        Приходите к нам вместе с другом или самостоятельно, учитесь готовить легко и просто, или
                        подарите такую возможность близким!
                    </p>
                </div>
                <div class="certificate-about__img">
                    <picture>
                        <source srcset="/images/certificate-img.webp" type="image/webp">
                        <img class="ibg" src="/images/certificate-img.jpg" alt="Интерьеры студий">
                    </picture>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-bottom">
        <div class="container">
            <h2>Как работают наши подарочные сертификаты?</h2>
            <div class="how mt-md-5 mt-4 d-flex justify-content-between flex-md-nowrap flex-wrap">
                <div class="how-item text-center d-flex align-items-center flex-column">
                    <img src="images/icons/calendar.svg" alt="Календарь - иконка" class="how-item__icon">
                    <div class="how-item__title">
                        срок действия <br> 6&nbsp;месяцев
                    </div>
                    <div class="how-item__text">
                        Можете купить сертификат сейчас и&nbsp;подарить его позже
                    </div>
                </div>
                <div class="how-item text-center d-flex align-items-center flex-column">
                    <img src="images/icons/money.svg" alt="Календарь - иконка" class="how-item__icon">
                    <div class="how-item__title">
                        Любой номинал <br> сертификата от&nbsp;4000₽
                    </div>
                    <div class="how-item__text">
                        Вы сами определяете комфортный для&nbsp;вас номинал сертификата
                    </div>
                </div>
                <div class="how-item text-center d-flex align-items-center flex-column">
                    <img src="images/icons/certificate.svg" alt="Календарь - иконка" class="how-item__icon">
                    <div class="how-item__title">
                        Любой <br> удобный формат
                    </div>
                    <div class="how-item__text">
                        Вы получите электронный сертификат после оплаты, в&nbsp;тот же день
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-padding section_grey">
        <div class="container">
            <h2>варианты сертификатов</h2>
            <div class="certificates-items additional-slider owl-carousel owl-theme mt-md-5 mt-4">
                <div class="item">
                    <div class="certificate-item d-flex flex-column">
                        <div class="certificate-item__img">
                            <picture>
                                <source srcset="/images/certificates/01.webp" type="image/webp">
                                <img class="ibg" src="images/certificates/01.jpg" alt="Сертификат 1">
                            </picture>
                        </div>
                        <div class="certificate-item__body">
                            <div class="certificate-item__title">
                                групповой мастер-класс
                            </div>
                            <div class="certificate-item__text">
                                <ul>
                                    <li>Группы до 50 человек</li>
                                    <li>Три блюда и напитки</li>
                                    <li>Ведущие - лучшие шефы</li>
                                    <li>Вкусный ужин</li>
                                </ul>
                            </div>
                        </div>
                        <div class="certificate-item__action">
                            <a href="#sign-in-form" class="button button-solid">купить!</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="certificate-item d-flex flex-column">
                        <div class="certificate-item__img">
                            <picture>
                                <source srcset="/images/certificates/02.webp" type="image/webp">
                                <img class="ibg" src="images/certificates/02.jpg" alt="Сертификат 1">
                            </picture>
                        </div>
                        <div class="certificate-item__body">
                            <div class="certificate-item__title">
                                Кулинарное свидание
                            </div>
                            <div class="certificate-item__text">
                                Романтический ужин, приготовленный своими руками, под руководством профессионального
                                шеф-повара
                            </div>
                        </div>
                        <div class="certificate-item__action">
                            <a href="#sign-in-form" class="button button-solid">купить!</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="certificate-item d-flex flex-column">
                        <div class="certificate-item__img">
                            <picture>
                                <source srcset="/images/certificates/03.webp" type="image/webp">
                                <img class="ibg" src="images/certificates/03.jpg" alt="Сертификат 1">
                            </picture>
                        </div>
                        <div class="certificate-item__body">
                            <div class="certificate-item__title">
                                Сертификат любого номинала
                            </div>
                            <div class="certificate-item__text">
                                Вы можете приобрести подарочный сертификат в нашу студию с любым номиналом.
                            </div>
                        </div>
                        <div class="certificate-item__action">
                            <a href="#sign-in-form" class="button button-solid">купить!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-padding">
        <div class="container">
            <h2>Как купить сертификат?</h2>
            <div class="how-buy text-center mt-md-4 mt-5 d-flex flex-column ">
                <img src="images/icons/wifi.svg" alt="Icon" class="how-buy__icon">
                <div class="how-buy__body d-flex flex-column">
                    <strong>Можете заказать на сайте или позвоните нашему менеджеру</strong>
                    <p>После оплаты, в тот же день, вы получите электронный формат сертификата. Для использования
                        сертификат не обязательно распечатывать.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-schedule-gallery">
        <div class="container">
            <h2>наши фотоотчеты</h2>
            <div class="schedule-gallery-container owl-carousel owl-theme">
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/about/01-1100.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/about/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/about/01-1100.webp">
                        <source srcset="/images/gallery/about/01-1100.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/about/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/corporate/01-1100.jpg" alt="Интерьеры студий">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/about/02-1100.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/about/02-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/about/02-1100.webp">
                        <source srcset="/images/gallery/about/02-1100.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/about/02-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/corporate/02-1100.jpg" alt="Интерьеры студий">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/about/03-1100.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/about/03-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/about/03-1100.webp">
                        <source srcset="/images/gallery/about/03-1100.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/about/03-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/corporate/03-1100.jpg" alt="Интерьеры студий">
                    </picture>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-sig-in" name="sign-in-form" id="sign-in-form">
        @component('components.sign_in_form')
        @endcomponent
    </div>
@endsection
<script>
    document.addEventListener("DOMContentLoaded", function () {
        //additional
        function postsCarousel() {
            var owlPost = $(".additional-slider");
            owlPost.owlCarousel({
                items: 3,
                slideSpeed: 500,
                touchDrag: true,
                mouseDrag: false,
                margin: 30,
                autoHeight: true,
                dots: true,
                // loop: true,
                responsive: {
                    // breakpoint from 0 up
                    320: {
                        items: 1,
                    },

                    // breakpoint from 480 up
                    480: {
                        items: 1.3,
                    },
                    // breakpoint from 480 up
                    768: {
                        items: 2,
                    },
                    // breakpoint from 768 up
                    1200: {
                        items: 3,
                    }
                }
            });

        }

        postsCarousel();

    });

</script>
