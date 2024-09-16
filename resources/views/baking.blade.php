@extends('layouts.app')

@section('og_title', 'Кулинарный мастер-класс по выпечке - научитесь печь вкусно!')
@section('og_description', 'Присоединяйтесь к нашему кулинарному мастер-классу по выпечке и узнайте секреты приготовления вкусных пирогов, тортов и печенья. Подходит для новичков и профессионалов.')
@section('og_image', 'https://cookforia.ru/images/gallery/baking/01.jpg')
@section('title', 'Кулинарный мастер-класс по выпечке - научитесь печь вкусно!')
@section('description', 'Присоединяйтесь к нашему кулинарному мастер-классу по выпечке и узнайте секреты приготовления вкусных пирогов, тортов и печенья. Подходит для новичков и профессионалов..')
@section('keywords', 'кулинарный мастер-класс, корпоратив, творческий кулинарный мастер-класс')

@section('content')
    <div class="section section-main section-main-pages section-main-baking">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Кулинарный мастер-класс по выпечке</h1>
                <p>
                    <strong>Кулинарный мастер-класс по выпечке </strong>— возможность освоить тонкости приготовления
                    теста и создать свои
                    кулинарные шедевры в уютной атмосфере нашей студии.
                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Кулинарный мастер-класс по выпечке, наполненный вкусом и
                        вдохновением</strong></h3>

                <ul class="large-text">
                    <li>
                        Секреты шеф-повара. Хотите превратить свою кухню в волшебную пекарню? Наши мастера откроют вам
                        тайные ингредиенты и приемы, которые сделают вашу выпечку просто неотразимой.
                    </li>
                    <li>
                        Теория и практика рука об руку. Окунетесь в мир выпечки с головой. Месите тесто, творите
                        кулинарные чудеса и наслаждайтесь каждым мгновением.
                    </li>
                    <li>
                        Новые рецепты и яркие впечатления. Каждый МК — маленькое гастрономическое приключение.
                    </li>
                    <li>
                        Атмосфера творчества. Наша кухня — место, где рождаются самые вкусные идеи. Приходите и вдохновляйтесь вместе с нами.
                    </li>
                </ul>
                <p class="large-text">
                    Запишитесь на мастер-класс в студию «Cookforia» и откройте для себя мир выпечки с новой стороны.
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
                        <source srcset="/images/gallery/baking/01.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/baking/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/baking/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/baking/01.jpg" alt="Кулинарный мастер-класс по выпечке">
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
                        <a href="/khachapuri">Кулинарный мастер-класс по хачапури</a>
                        <a href="/tom-yum">Кулинарный мастер-класс по том ям</a>
                        <a class="_active" href="/baking">Кулинарный мастер-класс по выпечке</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
