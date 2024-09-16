@extends('layouts.app')

@section('og_title', 'Кулинарный мастер-класс для женщин')
@section('og_description', 'Запишитесь на кулинарный мастер-класс для женщин! Освойте искусство приготовления изысканных блюд, порадуйте себя и своих близких новыми кулинарными навыками.')
@section('og_image', 'https://cookforia.ru/images/gallery/for-women/03.jpg')
@section('title', 'Кулинарный мастер-класс для женщин')
@section('description', 'Запишитесь на кулинарный мастер-класс для женщин! Освойте искусство приготовления изысканных блюд, порадуйте себя и своих близких новыми кулинарными навыками.')
@section('keywords', 'кулинарный мастер-класс, корпоратив, тимбилдинг')

@section('content')
    <div class="section section-main section-main-pages section-main-woman">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Кулинарный мастер класс для женщин</h1>
                <p>
                    <strong>Кулинарный мастер-класс для женщин</strong> — праздник вкуса и общения, где вы проведете
                    время в приятной
                    компании и научитесь готовить новые блюда под руководством шеф-повара. Здесь теория сочетается с
                    практикой, а каждый рецепт — маленькое открытие.


                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Вечеринка для гурманов: вкусно, весело и очень по-женски</strong></h3>
                <ul class="large-text">
                    <li>
                        Кулинарное путешествие вокруг света. Студия «Cookforia» предлагает большой выбор
                        кухонь — от итальянской до грузинской. Каждая встреча – это гастрономическое приключение,
                        которое
                        откроет для тебя новые вкусы и ароматы.
                    </li>
                    <li>
                        Все включено. Бесплатные безалкогольные напитки, приготовленные своими руками разнообразные
                        закуски, сытные блюда, – все это уже включено в стоимость мастер-класса.
                    </li>
                    <li>
                        Веселье, творчество. Наши мастер-классы – это не просто обучение кулинарии, это отличная
                        возможность провести время в кругу подруг, пообщаться, повеселиться, испытать приятные эмоции
                    </li>
                    <li>
                        Комфорт. Сочетание домашнего уюта и бытового оборудования (так вы с легкостью сможете повторить
                        все в домашней обстановке) — идеальная формула для ваших кулинарных экспериментов.
                    </li>
                    <li>
                        Гибкий формат. Хотите насладиться своим любимым вином? Приносите его с собой! У нас есть
                        пробковый сбор, но выбор остается за вами. Решили что-то заказать из нашей винной карты? С
                        радостью подберем напиток под ваше блюдо.
                    </li>
                    <li>
                        Разные локации. От камерного ужина до шумной вечеринки — у нас есть все для вашего идеального
                        мероприятия. Выбирайте подходящий формат и место: уютная студия на Московском проспекте или
                        просторные залы на Дыбенко и Ильюшина.
                    </li>
                </ul>
                <p class="large-text">
                    Подарите себе незабываемые впечатления. Забронируйте места на кулинарном мастер-классе для женщин
                    прямо сейчас и откройте для себя мир новых вкусов.
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
                        <source srcset="/images/gallery/for-women/01.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/for-women/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/for-women/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/for-women/01.jpg" alt="Тимбилдинг">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/for-women/02.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/for-women/02-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/for-women/02-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/for-women/02.jpg" alt="Тимбилдинг">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/for-women/03.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/for-women/03-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/for-women/03-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/for-women/03.jpg" alt="Тимбилдинг">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/for-women/04.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/for-women/04-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/for-women/04-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/for-women/04.jpg" alt="Тимбилдинг">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/for-women/05.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/for-women/05-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/for-women/05-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/for-women/05.jpg" alt="Тимбилдинг">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/for-women/06.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/for-women/06-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/for-women/06-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/for-women/06.jpg" alt="Тимбилдинг">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/for-women/07.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/for-women/07-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/for-women/07-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/for-women/07.jpg" alt="Тимбилдинг">
                    </picture>
                </div>
                <!-- <div class="item"><img src="/images/gallery/for-women/1.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/for-women/2.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/for-women/3.jpg" alt=""></div> -->
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
                        <a class="_active" href="/for-woman">Кулинарный мастер-класс для женщин</a>
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
