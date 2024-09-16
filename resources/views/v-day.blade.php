@extends('layouts.app')

@section('og_title', 'Мастер класс кулинария 9 мая')
@section('og_description', 'Присоединяйтесь к нашему кулинарному мастер-классу 9 мая! Узнайте секреты приготовления вкусных блюд и отметьте праздник с новыми кулинарными навыками.')
@section('og_image', 'https://cookforia.ru/images/gallery/v-day/02.jpg')
@section('title', 'Мастер класс кулинария 9 мая')
@section('description', 'Присоединяйтесь к нашему кулинарному мастер-классу 9 мая! Узнайте секреты приготовления вкусных блюд и отметьте праздник с новыми кулинарными навыками.')
@section('keywords', 'кулинарный мастер-класс, корпоратив, творческий кулинарный мастер-класс')

@section('content')
    <div class="section section-main section-main-pages section-main-v-day">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Кулинарный мастер-класс 9 мая</h1>
                <p>
                    <strong>Мастер-класс по кулинарии 9 мая</strong> — возможность соединить историю и гастрономию. Научитесь готовить блюда, которые стали символом Победы.

                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Кулинарный мастер-класс 9 мая: <br> от бабушкиных рецептов к современным шедеврам</strong></h3>
                <p class="large-text">
                    Это не просто занятие, это возможность:
                </p>
                <ul class="large-text">
                    <li>
                        Погрузиться в историю. Изучить традиционные блюда, которые готовили наши бабушки и дедушки во время Великой Отечественной войны.
                    </li>
                    <li>
                        Создать семейную традицию. Вместе с детьми или внуками приготовить что-то особенное и надолго сохранить эти теплые воспоминания.
                    </li>
                    <li>
                        Подарить радость близким. Приготовить праздничный торт, украшенный символикой Победы, или напечь ароматных пирожков, которые соберут за столом всю семью.
                    </li>
                    <li>
                        Развить свои кулинарные навыки. Научиться новым техникам и рецептам, расширить свои гастрономические горизонты.
                    </li>
                    <li>
                        Провести время с пользой. Полезно и весело провести время, создавая что-то своими руками.
                    </li>
                </ul>
                <p class="large-text">
                    Приглашаем вас на кулинарный мастер-класс, посвященный Дню Победы. Вместе мы окунемся в мир вкуса и создадим незабываемые воспоминания.
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
                        <source srcset="/images/gallery/v-day/01.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/v-day/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/v-day/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/v-day/01.jpg" alt="Кулинарный мастер-класс 14 февраля">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/v-day/02.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/v-day/02-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/v-day/02-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/v-day/02.jpg" alt="Кулинарный мастер-класс 14 февраля">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/v-day/03.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/v-day/03-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/v-day/03-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/v-day/03.jpg" alt="Кулинарный мастер-класс 14 февраля">
                    </picture>
                </div>
                <!-- <div class="item"><img src="/images/gallery/march/1.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/march/2.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/march/3.jpg" alt=""></div> -->
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
                        <a href="">Итальянская кухня</a>
                        <a href="">Грузинская кухня</a>
                        <a href="">Французская кухня</a>
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
                        <a href="/creative">Творческий кулинарный мастер-класс</a>
                        <a href="/wine">Кулинарный мастер класс с вином</a>
                        <a href="/quest">Кулинарный квест</a>
                        <a href="/february">Кулинарный мастер-класс 23 февраля</a>
                        <a href="/valentins-day">Кулинарный мастер-класс 14 февраля</a>
                        <a href="/march">Кулинарный мастер-класс 8 Марта</a>
                        <a class="_active" href="/v-day">Кулинарный мастер-класс 9 мая</a>
                        <a href="/easter">Кулинарный мастер-класс Пасха</a>
                        <a href="">Кулинарный мастер-класс на природе</a>
                        {{--                    <a href="">Грузинская кухня</a>--}}
                        <a href="">Кулинарный мастер-класс групповой</a>
                        {{--                    <a href="">Итальянская кухня</a>--}}
                        <a href="">Кулинарный мастер-класс по тортам</a>
                        {{--                    <a href="">Французская кухня</a>--}}
                        <a href="">Кулинарный мастер-класс по мясу</a>
                        <a href="">Кулинарный мастер-класс по пицце</a>
                        <a href="">Кулинарный мастер-класс по барбекю</a>
                        <a href="">Кулинарный мастер-класс по суши</a>
                        <a href="">Кулинарный мастер-класс по хачапури</a>
                        <a href="">Кулинарный мастер-класс по том ям</a>
                        <a href="">Кулинарный мастер-класс по выпечке</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
