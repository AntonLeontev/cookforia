@extends('layouts.app')

@section('og_title', 'Мастер-класс творческий кулинарный')
@section('og_description', 'Присоединяйтесь к творческому кулинарному мастер-классу! Развивайте свои кулинарные и творческие навыки, создавайте уникальные блюда и наслаждайтесь процессом приготовления в компании единомышленников.')
@section('og_image', 'https://cookforia.ru/images/main-corporate-back.jpg')
@section('title', 'Мастер-класс творческий кулинарный')
@section('description', 'Присоединяйтесь к творческому кулинарному мастер-классу! Развивайте свои кулинарные и творческие навыки, создавайте уникальные блюда и наслаждайтесь процессом приготовления в компании единомышленников.')
@section('keywords', 'кулинарный мастер-класс, корпоратив, творческий кулинарный мастер-класс')

@section('content')
    <div class="section section-main section-main-pages section-main-creative">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Творческий кулинарный мастер-класс</h1>
                <p>
                    <strong>Творческий кулинарный мастер-класс</strong> — интересный способ отметить любое событие ярко
                    и незабываемо,
                    получив заряд позитива.
                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Творческий кулинарный мастер-класс для новых впечатлений</strong></h3>
                <p class="large-text">
                    Что вас ждет:
                </p>
                <ul class="large-text">
                    <li>
                        Путешествие в мир вкусов. Приготовите, а потом попробуете кулинарные шедевры одной из мировых
                        кухонь (меню нужно согласовать заранее).
                    </li>
                    <li>
                        Кулинарное творчество. Опытный шеф-повар поделится своими секретами и мастерством, помогая вам
                        раскрыть свой творческий потенциал.
                    </li>
                    <li>
                        Феерия вкуса. Приготовьтесь к настоящей симфонии вкусов и ароматов. Для каждого гостя — не менее
                        3 аппетитных блюд, приготовленных своими руками.
                    </li>
                    <li>
                        Бесплатные безалкогольные напитки станут приятным дополнением к сытным блюдам и теплой
                        атмосфере.
                    </li>
                    <li>
                        Командная работа. Объединяйтесь с друзьями, коллегами или близкими, чтобы приятно провести
                        время, получить новые навыки и от души повеселиться.
                    </li>
                    <li>
                        Возможность дополнить ужин алкоголем, который принесете с собой (пробковый сбор) или закажете у
                        нас (винная карта).
                    </li>
                    <li>
                        Уютные студии. Для камерных вечеринок (до 25 участников) — на Московском проспекте, для больших
                        компаний (до 50 человек) — на улицах Дыбенко и Ильюшина.
                    </li>
                </ul>

                <p class="large-text">
                    Приходите к нам, и мы сделаем ваш праздник незабываемым. Звоните в студию «Cookforia», чтобы
                    забронировать дату вашего мастер-класса.
                </p>
            </div>
        </div>
    </div>

    <div class="section section-schedule-gallery">
        <div class="container">
            <h2>Галерея</h2>
            <div class="schedule-gallery-container owl-carousel owl-theme">
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/creative/01.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/creative/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/creative/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/creative/01.jpg" alt="Творческий кулинарный мастер-класс">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/creative/02.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/creative/02-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/creative/02-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/creative/02.jpg" alt="Творческий кулинарный мастер-класс">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/creative/03.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/creative/03-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/creative/03-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/creative/03.jpg" alt="Творческий кулинарный мастер-класс">
                    </picture>
                </div>
                <!-- <div class="item"><img src="/images/gallery/creative/1.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/creative/2.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/creative/3.jpg" alt=""></div> -->
            </div>
        </div>
    </div>

    {{--    @component('components.additionally')--}}
    {{--    @endcomponent--}}
    <div class="section section-sig-in" name="sign-in-form" id="sign-in-form">
        @component('components.sign_in_form')
        @endcomponent
    </div>
    <section class="section section-seo">
        <div class="container">
            <div class="section-seo__inner seo-block">
                <div class="seo-block__item">
                    <div class="seo-block__title">
                        Кухни мира
                    </div>
                    <div class="seo-block__links">
                        <a href="/italian-cuisine">Итальянская кухня</a>
                        <a href="/georgian-cuisine">Грузинская кухня</a>
                        <a href="/french-cuisine">Французская кухня</a>
                    </div>
                </div>
                <div class="seo-block__item">
                    <div class="seo-block__title">
                        Лучшие блюда
                    </div>
                    <div class="seo-block__links">
                        <a href="/sushi">Cуши</a>
                        <a href="/bbq">Барбекю</a>
                        <a href="/tom-yum">Том ям</a>
                        <a href="/khachapuri">Хачапури</a>
                        <a href="/pizza">Пицца</a>
                        <a href="/bruschettas">Брускеты</a>
                    </div>
                </div>
                <div class="seo-block__item">
                    <div class="seo-block__title">
                        Тематические мастер классы
                    </div>
                    <div class="seo-block__links">
                        <a href="/for-man">Кулинарный мастер-класс для мужчин</a>
                        <a href="/for-woman">Кулинарный мастер-класс для женщин</a>
                        <a href="/teenager">Кулинарный мастер-класс для подростков</a>
                        <a href="/chef">Кулинарный мастер-класс от шефа</a>
                        <a class="_active" href="/creative">Творческий кулинарный мастер-класс</a>
                        <a href="/wine">Кулинарный мастер класс с вином</a>
                        <a href="/quest">Кулинарный квест</a>
                        <a href="/february">Кулинарный мастер-класс 23 февраля</a>
                        <a href="/valentins-day">Кулинарный мастер-класс 14 февраля</a>
                        <a href="/march">Кулинарный мастер-класс 8 Марта</a>
                        <a href="/v-day">Кулинарный мастер-класс 9 мая</a>
                        <a href="/easter">Кулинарный мастер-класс Пасха</a>
                        <a href="/nature">Кулинарный мастер-класс на природе</a>
                        {{--                    <a href="">Грузинская кухня</a>--}}
                        <a href="/group">Кулинарный мастер-класс групповой</a>
                        {{--                    <a href="">Итальянская кухня</a>--}}
                        <a href="/cakes">Кулинарный мастер-класс по тортам</a>
                        {{--                    <a href="">Французская кухня</a>--}}
                        <a href="/meat">Кулинарный мастер-класс по мясу</a>
                        <a href="/pizza">Кулинарный мастер-класс по пицце</a>
                        <a href="/bbq">Кулинарный мастер-класс по барбекю</a>
                        <a href="/sushi">Кулинарный мастер-класс по суши</a>
                        <a href="/khachapuri">Кулинарный мастер-класс по хачапури</a>
                        <a href="/tom-yum">Кулинарный мастер-класс по том ям</a>
                        <a href="/baking">Кулинарный мастер-класс по выпечке</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
