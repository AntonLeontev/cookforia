@extends('layouts.app')

@section('og_title', 'Кулинарный мастер класс 23 февраля')
@section('og_description', 'Присоединяйтесь к нашему кулинарному мастер-классу 23 февраля! Научитесь готовить сочные мясные блюда и вкуснейшие закуски к любому поводу.')
@section('og_image', 'https://cookforia.ru/images/gallery/february/01.jpg')
@section('title', 'Кулинарный мастер класс 23 февраля')
@section('description', 'Присоединяйтесь к нашему кулинарному мастер-классу 23 февраля! Научитесь готовить сочные мясные блюда и вкуснейшие закуски к любому поводу.')
@section('keywords', 'кулинарный мастер-класс, корпоратив, творческий кулинарный мастер-класс')

@section('content')
    <div class="section section-main section-main-pages section-main-february">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Кулинарный мастер-класс 23 февраля</h1>
                <p>
                    <strong>Кулинарный мастер-класс 23 Февраля</strong> — прекрасная альтернатива традиционным подаркам.
                    Каждый участник мероприятия сможет почувствовать себя настоящим шеф-поваром, удивить близких своими
                    кулинарными талантами и провести время в приятной компании.
                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Незабываемые эмоции: взрыв веселья, драйва и позитива</strong></h3>
                <p class="large-text">
                    Что вас ждет:
                </p>
                <ul class="large-text">
                    <li>
                        Праздничная атмосфера. 23 Февраля — это праздник настоящих мужчин. Каждый гость нашей студии
                        почувствует себя героем
                    </li>
                    <li>
                        Разнообразное меню. Участники приготовят блюда той страны, которую заранее выберут. Салаты,
                        закуски, горячее и десерты понравятся даже самым взыскательным гурманам.
                    </li>
                    <li>
                        Удобная студия. Мероприятие проходит в просторной уютной студии, где есть все необходимое для
                        комфортного приготовления пищи.
                    </li>
                    <li>
                        Беззаботное веселье. Бесплатные безалкогольные напитки в большом количестве уже включены в
                        стоимость. Можно с собой принести алкоголь (пробковый сбор), дополнив праздничный ужин
                        ароматными винами.
                    </li>
                    <li>
                        Вкусный финал. Дегустация приготовленных своими руками трех блюд в приятной компании — сытно,
                        вкусно, душевно.
                    </li>
                </ul>

                <p class="large-text">
                    Подарите своим защитникам незабываемые эмоции. Забронируйте места на <strong>кулинарный мастер-класс 23 Февраля</strong> в студии «Cookforia».
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
                        <source srcset="/images/gallery/february/01.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/february/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/february/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/february/01.jpg" alt="Творческий кулинарный мастер-класс">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/february/02.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/february/02-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/february/02-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/february/02.jpg" alt="Творческий кулинарный мастер-класс">
                    </picture>
                </div>
                <!-- <div class="item"><img src="/images/gallery/february/1.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/february/2.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/february/3.jpg" alt=""></div> -->
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
                        <a class="_active" href="/february">Кулинарный мастер-класс 23 февраля</a>
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
