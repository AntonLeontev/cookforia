@extends('layouts.app')

@section('og_title', 'Кулинарный квест на день рождения')
@section('og_description', 'Организуйте незабываемый кулинарный квест на день рождения для детей и взрослых. Веселые задания, вкусные рецепты и море удовольствия ждут поваров!')
@section('og_image', 'https://cookforia.ru/images/gallery/quest/02.jpg')
@section('title', 'Кулинарный квест на день рождения')
@section('description', 'Организуйте незабываемый кулинарный квест на день рождения для детей и взрослых. Веселые задания, вкусные рецепты и море удовольствия ждут поваров!')
@section('keywords', 'кулинарный мастер-класс, корпоратив, творческий кулинарный мастер-класс')

@section('content')
    <div class="section section-main section-main-pages section-main-quest">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Кулинарный квест</h1>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Кулинарное путешествие для искателей приключений</strong></h3>
                <p class="large-text">
                    Что вас ждет:
                </p>
                <ul class="large-text">
                    <li>
                        Незабываемые впечатления. Кулинарный квест для детей на день рождения —оригинальный способ
                        отметить важное событие. Ребенок и его гости запомнят этот праздник надолго.
                    </li>
                    <li>
                        Развитие творческих способностей. Готовя различные блюда, дети развивают свою фантазию, мелкую
                        моторику и творческие способности.
                    </li>
                    <li>
                        Новые знания, навыки. Во время мероприятия ребята узнают много интересного о продуктах, блюдах и
                        кулинарии в целом.
                    </li>
                    <li>
                        Веселье, активность. Это не просто готовка, а веселые игры, конкурсы, задания.
                    </li>
                    <li>
                        Совместное творчество. Готовя вместе, дети учатся работать в команде, договариваться и помогать
                        друг другу.
                    </li>
                </ul>

                <p class="large-text">
                    Хотите сделать день рождения своего ребенка по-настоящему незабываемым? Закажите кулинарный квест в нашей студии прямо сейчас.
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
                        <source srcset="/images/gallery/quest/01.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/quest/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/quest/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/quest/01.jpg" alt="Творческий кулинарный мастер-класс">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/quest/02.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/quest/02-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/quest/02-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/quest/02.jpg" alt="Творческий кулинарный мастер-класс">
                    </picture>
                </div>
                <!-- <div class="item"><img src="/images/gallery/quest/1.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/quest/2.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/quest/3.jpg" alt=""></div> -->
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
                        <a class="_active" href="/quest">Кулинарный квест</a>
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
