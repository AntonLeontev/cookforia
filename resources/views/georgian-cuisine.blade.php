@extends('layouts.app')

@section('og_title', 'Кулинарный мастер-класс: грузинская кухня')
@section('og_description', 'Присоединяйтесь к нашему кулинарному мастер-классу по грузинской кухне и научитесь готовить настоящие хинкали. Откройте секреты традиционных рецептов и удивите своих близких!')
@section('og_image', 'https://cookforia.ru/images/gallery/georgian/01.jpg')
@section('title', 'Кулинарный мастер-класс: грузинская кухня')
@section('description', 'Присоединяйтесь к нашему кулинарному мастер-классу по грузинской кухне и научитесь готовить настоящие хинкали. Откройте секреты традиционных рецептов и удивите своих близких!')
@section('keywords', 'кулинарный мастер-класс, корпоратив, творческий кулинарный мастер-класс')

@section('content')
    <div class="section section-main section-main-pages section-main-georgian">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Грузинская кухня</h1>
                <p>
                    <strong>Кулинарный мастер-класс грузинской кухни</strong> — взрыв вкуса и ароматов. Представьте себе: вокруг вас
                    витают пьянящие ароматы пряных трав, сыра сулугуни и сочного мяса. Вы лепите из теста сочные
                    хинкали, а в печи золотятся румяные хачапури. Это не сон, а реальность наших кулинарных
                    мастер-классов.

                </p>
                <p>
                    Студия «Cookforia» приглашает всех ценителей настоящей грузинской кухни окунуться в мир ярких вкусов
                    и неповторимой атмосферы.
                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Кулинарный мастер-класс по хинкали и многому другому для настоящих гурманов</strong></h3>
                <p class="large-text">
                    С нами вы сможете…
                </p>
                <ul class="large-text">
                    <li>
                        Вкуснее дома не приготовить. Вы научитесь готовить блюда, которые покорят сердца ваших близких и друзей.
                    </li>
                    <li>
                        Праздник для всех чувств. Ароматы, вкусы, атмосфера — все это создаст незабываемые впечатления.
                    </li>
                    <li>
                     Идеальный подарок. Подарите близким незабываемые эмоции и новые кулинарные навыки.
                    </li>
                    <li>
                        Корпоратив с изюминкой. Организуйте для своей команды незабываемый тимбилдинг с элементами грузинского гостеприимства.
                    </li>
                </ul>
                <p class="large-text">
                    Погрузитесь в мир кавказских вкусов. Запишитесь на наш МК и откройте для себя новые гастрономические горизонты.
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
                        <source srcset="/images/gallery/georgian/01.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/georgian/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/georgian/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/georgian/01.jpg" alt="Грузинская кухня">
                    </picture>
                </div>
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
                        <a class="_active" href="/georgian-cuisine">Грузинская кухня</a>
                        <a href="/french-cuisine">Французская кухня</a>
                    </div>
                </div>
                <div class="seo-block__item">
                    <div class="seo-block__title">
                        Лучшие блюда
                    </div>
                    <div class="seo-block__links">
{{--                        <a href="/italian-cuisine">Паста</a>--}}
                        <a href="/sushi">Cуши</a>
                        <a href="/bbq">Барбекю</a>
                        <a href="/tom-yum">Том ям</a>
                        <a href="/khachapuri">Хачапури</a>
                        <a href="/pizza">Пицца</a>
                        <a href="/bruschettas">Брускеты</a>
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
