@extends('layouts.app')

@section('og_title', 'Кулинарные мастер классы итальянской кухни – Учитесь у лучших')
@section('og_description', 'Примите участие в итальянских кулинарных мастер классах и научитесь готовить изысканные блюда под руководством опытных шеф-поваров. Откройте секреты итальянской кухни!')
@section('og_image', 'https://cookforia.ru/images/gallery/italian/01.jpg')
@section('title', 'Кулинарные мастер классы итальянской кухни – Учитесь у лучших')
@section('description', 'Примите участие в итальянских кулинарных мастер классах и научитесь готовить изысканные блюда под руководством опытных шеф-поваров. Откройте секреты итальянской кухни!')
@section('keywords', 'кулинарный мастер-класс, корпоратив, творческий кулинарный мастер-класс')

@section('content')
    <div class="section section-main section-main-pages section-main-italian">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Итальянская кухня</h1>
                <p>
                    <strong>Итальянские кулинарные мастер-классы</strong> — это не просто обучение, а возможность
                    провести время в теплой компании единомышленников.

                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Кулинарные мастер-классы итальянской кухни для гурманов</strong></h3>
                <p class="large-text">
                    С нами вы сможете…
                </p>
                <ul class="large-text">
                    <li>
                        Кулинарные приключения. Каждый МК от студии «Cookforia» — это маленькое путешествие в мир
                        итальянской кухни.
                    </li>
                    <li>
                        Ингредиенты отборного качества. Используем только самые свежие продукты, чтобы вы могли создать
                        незабываемые вкусовые впечатления.
                    </li>
                    <li>
                        Секреты итальянских бабушек. Наши шеф-повара поделятся с вами проверенными рецептами, которые
                        передаются из поколения в поколение.
                    </li>
                    <li>
                        Практика лучше теории. Вы сами приготовите все блюда и почувствуете себя настоящим творцом на
                        кухне.
                    </li>
                    <li>
                        Делимся радостью. После мастер-класса мы вместе насладимся результатами нашей работы.
                    </li>
                    <li>
                        Сочетание вкуса и настроения. Выберите вино, которое подчеркнет вкус ваших блюд, или принесите
                        свое любимое (пробковый сбор).
                    </li>
                </ul>
                <p class="large-text">
                    Наши мастер-классы — праздник вкуса и общения. Вы сможете попробовать новые блюда, познакомиться с
                    интересными людьми и провести время с удовольствием. Бронируйте места на себя и друзей.
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
                        <source srcset="/images/gallery/italian/01.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/italian/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/italian/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/italian/01.jpg" alt="Итальянская кухня">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/italian/02.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/italian/02-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/italian/02-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/italian/02.jpg" alt="Итальянская кухня">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/italian/03.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/italian/03-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/italian/03-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/italian/03.jpg" alt="Итальянская кухня">
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
                        <a class="_active" href="/italian-cuisine">Итальянская кухня</a>
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
{{--                        <a href="/georgian-cuisine">Хинкали</a>--}}
{{--                        <a href="/french-cuisine">Салат «нисуаз»</a>--}}
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
                        <a href="/baking">Кулинарный мастер-класс по выпечке</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
