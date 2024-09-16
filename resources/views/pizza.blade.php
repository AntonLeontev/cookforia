@extends('layouts.app')

@section('og_title', 'Кулинарный мастер класс по готовке пиццы для детей и взрослых')
@section('og_description', 'Присоединяйтесь к нашему кулинарному мастер классу по приготовлению пиццы! Узнайте секреты идеальной пиццы и порадуйте своих близких. Мастер класс для детей и взрослых.')
@section('og_image', 'https://cookforia.ru/images/gallery/pizza/02.jpg')
@section('title', 'Кулинарный мастер класс по готовке пиццы для детей и взрослых')
@section('description', 'Присоединяйтесь к нашему кулинарному мастер классу по приготовлению пиццы! Узнайте секреты идеальной пиццы и порадуйте своих близких. Мастер класс для детей и взрослых.')
@section('keywords', 'кулинарный мастер-класс, корпоратив, творческий кулинарный мастер-класс')

@section('content')
    <div class="section section-main section-main-pages section-main-pizza">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Кулинарный мастер-класс по пицце</h1>
                <p>
                    <strong> Кулинарные мастер-классы по пицце</strong> — это отличный способ провести время с пользой и
                    удовольствием. Мы откроем для вас все секреты этого блюда, научим вас создавать настоящие шедевры на
                    своей кухне.
                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Пицца-пати: создаем вкусные истории</strong></h3>
                <p class="large-text">
                    Что вас ждет:
                </p>
                <ul class="large-text">
                    <li>
                        Кулинарный мастер-класс по готовке пиццы для детей и взрослых. Независимо от вашего возраста и
                        опыта в кулинарии вы сможете приготовить вкусную и ароматную пиццу под руководством опытного
                        шеф-повара.
                    </li>
                    <li>
                        Разнообразие рецептов. Предлагаем большой выбор рецептов — от классической Маргариты до более
                        экзотических вариантов с морепродуктами или овощами. Откройте для себя новые вкусовые сочетания
                        и расширьте свои кулинарные горизонты.
                    </li>
                    <li>
                        Бесплатные безалкогольные напитки. Пока вы будете творить кулинарные шедевры, вас будут ждать
                        разные напитки.
                    </li>
                    <li>
                        Уютная атмосфера. Мы проводим мастер-классы в комфортных студиях, способных вместить до 50
                        человек, где вы сможете расслабиться, отдохните от городской суеты, окунуться в мир вкусной еды
                        и творчества.
                    </li>
                    <li>
                        Идеально для любого события. Мастер-класс по приготовлению пиццы – это отличная идея для
                        корпоративного мероприятия, дня рождения или просто дружеской встречи.
                    </li>
                </ul>
                <p class="large-text">
                    Научитесь готовить как настоящий пиццайоло! Забронируйте места на МК и получите незабываемые гастрономические впечатления.
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
                        <source srcset="/images/gallery/pizza/01.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/pizza/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/pizza/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/pizza/01.jpg" alt="Кулинарный мастер-класс по пицце">
                    </picture>
                    </div>
                <div class="item">
                          <picture>
                        <source srcset="/images/gallery/pizza/02.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/pizza/02-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/pizza/02-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/pizza/02.jpg" alt="Кулинарный мастер-класс по пицце">
                    </picture>

                </div>
                <div class="item">

                    <picture>
                        <source srcset="/images/gallery/pizza/03.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/pizza/03-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/pizza/03-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/pizza/03.jpg" alt="Кулинарный мастер-класс по пицце">
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
                        <a href="/creative">Творческий кулинарный мастер-класс</a>
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
                        <a  href="/cakes">Кулинарный мастер-класс по тортам</a>
                        {{--                    <a href="">Французская кухня</a>--}}
                        <a href="/meat">Кулинарный мастер-класс по мясу</a>
                        <a class="_active" href="/pizza">Кулинарный мастер-класс по пицце</a>
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
