@extends('layouts.app')

@section('og_title', 'Кулинарный мастер класс с вином')
@section('og_description', 'Хотите приготовить вкуснейшие блюда которые будут прекрасным дополнением к вашему любимому вину? Узнайте, как готовить изысканные блюда и сочетать их с лучшими винами под руководством опытного шеф-повара.')
@section('og_image', 'https://cookforia.ru/images/gallery/wine/02.jpg')
@section('title', 'Кулинарный мастер класс с вином')
@section('description', 'Хотите приготовить вкуснейшие блюда которые будут прекрасным дополнением к вашему любимому вину? Узнайте, как готовить изысканные блюда и сочетать их с лучшими винами под руководством опытного шеф-повара.')
@section('keywords', 'кулинарный мастер-класс, корпоратив, творческий кулинарный мастер-класс')

@section('content')
    <div class="section section-main section-main-pages section-main-wine">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Кулинарный мастер-класс с вином: готовим, дегустируем, веселимся</h1>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Кулинарный мастер-класс с вином</strong></h3>
                <p class="large-text">
                    Что вас ждет:
                </p>
                <ul class="large-text">
                    <li>
                        Путешествие по одной из выбранных кухонь мира. Погрузитесь в атмосферу этой страны через кулинарные традиции, узнаете секреты приготовления национальных блюд.
                    </li>
                    <li>
                        Вкусные и сытные шедевры. Не менее 3 блюд на каждого гостя, приготовленных из свежих продуктов по авторским рецептам, порадуют даже самых искушенных гурманов.
                    </li>
                    <li>
                        Изысканные вина. Дополните ужин бокалом ароматного вина, подобранного нашим сомелье. Вы можете принести алкоголь с собой (пробковый сбор).
                    </li>
                    <li>
                        Командный дух. Объединяйтесь и творите вместе, создавая и дегустируя вкусные блюда.
                    </li>
                    <li>
                        Теплая атмосфера. Веселье, азарт, творчество, волшебные ароматы и вкусы наполнят ваш вечер.
                    </li>
                    <li>
                        Незабываемые воспоминания. Совместные кулинарные приключения останутся в вашей памяти надолго, даря вам радость и наполняя энергией.
                    </li>
                </ul>

                <p class="large-text">
                    Сделайте свой праздник по-настоящему особенным.
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
                        <source srcset="/images/gallery/wine/01.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/wine/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/wine/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/wine/01.jpg" alt="Творческий кулинарный мастер-класс">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/wine/02.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/wine/02-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/wine/02-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/wine/02.jpg" alt="Творческий кулинарный мастер-класс">
                    </picture>
                </div>
                <!-- <div class="item"><img src="/images/gallery/wine/1.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/wine/2.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/wine/3.jpg" alt=""></div> -->
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
                        <a class="_active" href="/wine">Кулинарный мастер класс с вином</a>
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
