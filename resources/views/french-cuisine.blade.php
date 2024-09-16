@extends('layouts.app')

@section('og_title', 'Кулинарные мастер классы французской кухни – Учитесь у лучших')
@section('og_description', 'Присоединяйтесь к нашему кулинарному мастер-классу французской кухни и откройте для себя секреты приготовления изысканных блюд. Учитесь у профессионалов и наслаждайтесь уникальными вкусами Франции.')
@section('og_image', 'https://cookforia.ru/images/gallery/birthday/2-1110.jpg')
@section('title', 'Кулинарные мастер классы французской кухни – Учитесь у лучших')
@section('description', 'Присоединяйтесь к нашему кулинарному мастер-классу французской кухни и откройте для себя секреты приготовления изысканных блюд. Учитесь у профессионалов и наслаждайтесь уникальными вкусами Франции.')
@section('keywords', 'кулинарный мастер-класс, корпоратив, творческий кулинарный мастер-класс')

@section('content')
    <div class="section section-main section-main-pages section-main-french">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Французская кухня</h1>
                <p>
                    <strong> Кулинарный мастер-класс французской кухни</strong> от студии «Cookforia» откроет для вас
                    новый мир вкуса в компании единомышленников, где ждет теплая атмосфера и приятное общение.

                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Bon appétit! Покоряем вершины французской гастрономии</strong></h3>
                <p class="large-text">
                    С нами вы сможете…
                </p>
                <ul class="large-text">
                    <li>
                        Путешествие по вкусам Франции. Мы приготовим вместе с вами самые популярные блюда французской
                        кухни — от классических закусок до изысканных десертов.
                    </li>
                    <li>
                        Разнообразное меню. Вы сможете попробовать 3 блюда разных регионов Франции (меню оговаривается
                        заранее).
                    </li>
                    <li>
                        Бесплатные напитки. На протяжении всего мастер-класса у вас в доступе будет большое количество
                        напитков.
                    </li>
                    <li>
                        Алкоголь. У нас есть винная карта, а также вы можете принести с собой любимые напитки
                        (оплачивается пробковый сбор).
                    </li>
                    <li>
                        Удобство. Наши студии оборудованы всем необходимым для комфортного приготовления пищи.
                    </li>
                    <li>
                        Отдельная зона отдыха. После приготовления блюд вы сможете отдохнуть в нашей уютной зоне отдыха
                        и насладиться результатами своего труда.
                    </li>
                </ul>
                <p class="large-text">
                    Откройте для себя мир французской гастрономии в студии «Cookforia». Бронируйте места на МК уже
                    сейчас.
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
                        <source srcset="/images/gallery/team-building/02.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/team-building/02-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/team-building/02-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/team-building/02.jpg" alt="Французская кухня">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/team-building/01.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/team-building/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/team-building/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/team-building/01.jpg" alt="Французская кухня">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/evening/01.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/evening/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/evening/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/evening/01.jpg" alt="Французская кухня">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/birthday/2-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/2-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/2-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/birthday/2-1110.webp" alt="День рождения">
                        <source srcset="/images/gallery/birthday/2-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/2-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/2-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/birthday/2-1110.jpg" alt="Французская кухня">
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
                        <a class="_active" href="/french-cuisine">Французская кухня</a>
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
{{--                        <a href="/italian-cuisine">Паста</a>--}}
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
