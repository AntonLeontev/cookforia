@extends('layouts.app')

@section('og_title', 'Кулинарный мастер-класс по хачапури')
@section('og_description', 'Присоединяйтесь к нашему кулинарному мастер-классу и научитесь готовить традиционные грузинские хачапури. Подробные инструкции, секреты приготовления и лучшие рецепты ждут вас!')
@section('og_image', 'https://cookforia.ru/images/gallery/khachapuri/02.jpg')
@section('title', 'Кулинарный мастер-класс по хачапури')
@section('description', 'Присоединяйтесь к нашему кулинарному мастер-классу и научитесь готовить традиционные грузинские хачапури. Подробные инструкции, секреты приготовления и лучшие рецепты ждут вас!')
@section('keywords', 'кулинарный мастер-класс, корпоратив, творческий кулинарный мастер-класс')

@section('content')
    <div class="section section-main section-main-pages section-main-khachapuri">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Кулинарный мастер-класс по хачапури</h1>
                <p>
                    <strong>Кулинарный мастер-класс хачапури</strong> окунет вас в мир грузинской кухни.

                </p>
                <p>
                    Аромат расплавленного сыра, золотистая корочка, сочная начинка... Хачапури — это простое и безумно
                    вкусное блюдо. Хотите научиться готовить его сами? Приглашаем вас на кулинарный мастер-класс по
                    хачапури в студию «Cookforia».
                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Почему стоит посетить наш мастер-класс?</strong></h3>
                {{--                <p class="large-text">--}}
                {{--                    Что вас ждет:--}}
                {{--                </p>--}}
                <ul class="large-text">
                    <li>
                        Погружение в культуру. Вы не только научитесь готовить хачапури, но и узнаете много интересного
                        о грузинской кухне, традициях, гостеприимстве.
                    </li>
                    <li>
                        Развитие кулинарных навыков. Даже если вы никогда раньше не готовили, под руководством опытного
                        шеф-повара вы легко освоите все тонкости приготовления хачапури.
                    </li>
                    <li>
                        Незабываемые впечатления. Это отличный способ провести время в приятной компании, научиться
                        чему-то новому и получить море удовольствия.
                    </li>
                    <li>
                        Вкусный результат. После МК вы сможете насладиться приготовленными блюдами вместе с чашкой
                        ароматного грузинского чая.
                    </li>
                </ul>
                <p class="large-text">
                    Запишитесь на наш МК и совершите настоящее гастрономическое путешествие в солнечную Грузию.
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
                        <source srcset="/images/gallery/khachapuri/01.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/khachapuri/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/khachapuri/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/khachapuri/01.jpg" alt="Кулинарный мастер-класс по хачапури">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/khachapuri/02.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/khachapuri/02-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/khachapuri/02-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/khachapuri/02.jpg" alt="Кулинарный мастер-класс по хачапури">
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
                        <a href="/cakes">Кулинарный мастер-класс по тортам</a>
                        {{--                    <a href="">Французская кухня</a>--}}
                        <a href="/meat">Кулинарный мастер-класс по мясу</a>
                        <a href="/pizza">Кулинарный мастер-класс по пицце</a>
                        <a href="/bbq">Кулинарный мастер-класс по барбекю</a>
                        <a href="/sushi">Кулинарный мастер-класс по суши</a>
                        <a class="_active" href="/khachapuri">Кулинарный мастер-класс по хачапури</a>
                        <a href="/tom-yum">Кулинарный мастер-класс по том ям</a>
                        <a href="/baking">Кулинарный мастер-класс по выпечке</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
