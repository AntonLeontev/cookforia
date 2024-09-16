@extends('layouts.app')

@section('og_title', 'Кулинарный мастер-класс Пасха')
@section('og_description', 'Присоединяйтесь к нашему кулинарному пасхальному мастер-классу и научитесь готовить вкусные праздничные блюда. Пошаговые инструкции, советы от шеф-поваров и много интересного!')
@section('og_image', 'https://cookforia.ru/images/gallery/easter/02.jpg')
@section('title', 'Кулинарный мастер-класс Пасха')
@section('description', 'Присоединяйтесь к нашему кулинарному пасхальному мастер-классу и научитесь готовить вкусные праздничные блюда. Пошаговые инструкции, советы от шеф-поваров и много интересного!')
@section('keywords', 'кулинарный мастер-класс, корпоратив, творческий кулинарный мастер-класс')

@section('content')
    <div class="section section-main section-main-pages section-main-easter">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Кулинарный мастер-класс Пасха</h1>
                <p>
                    <strong>Кулинарный пасхальный мастер-класс</strong> — это прекрасная возможность проявить свои
                    творческие способности и удивить близких ароматной выпечкой.

                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Кулинарный мастер-класс Пасха</strong></h3>
                <p class="large-text">
                    Хотите почувствовать себя настоящим кулинаром и создать на своей кухне маленькие произведения
                    искусства? Приглашаем вас на наш кулинарный пасхальный мастер-класс.
                </p>
                <ul class="large-text">
                    <li>
                        Создание праздника. Мы не просто готовим, мы создаем атмосферу. Вы научитесь готовить
                        традиционные пасхальные блюда и оформлять праздничный стол, чтобы порадовать своих близких.
                    </li>
                    <li>
                        Индивидуальный подход. Сможете заранее выбрать блюда, которые хотите приготовить. Классический
                        кулич, нежная творожная пасха с цукатами, изюмом, вишней, орехами или оригинальные закуски — мы
                        учтем все ваши пожелания.
                    </li>
                    <li>
                        Авторские рецепты. Наши опытные шеф-повара поделятся с вами своими знаниями и секретами,
                        накопленными за годы работы в лучших ресторанах.
                    </li>
                    <li>
                        Уютная атмосфера. Забудете о заботах, расслабитесь, отдохнете и зарядитесь положительными
                        эмоциями.
                    </li>
                    <li>
                        Гастрономическое удовольствие. Насладитесь результатами своего труда, поделитесь впечатлениями с
                        другими участниками.
                    </li>
                </ul>
                <p class="large-text">
                    Хотите узнать, как приготовить самый вкусный кулич? Шеф-повар студии «Cookforia» научит вас этому.
                    Бронируйте место на нашем мастер-классе.
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
                        <source srcset="/images/gallery/easter/01.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/easter/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/easter/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/easter/01.jpg" alt="Кулинарный мастер-класс 14 февраля">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/easter/02.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/easter/02-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/easter/02-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/easter/02.jpg" alt="Кулинарный мастер-класс 14 февраля">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/easter/03.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/easter/03-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/easter/03-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/easter/03.jpg" alt="Кулинарный мастер-класс 14 февраля">
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
                        <a class="_active" href="/easter">Кулинарный мастер-класс Пасха</a>
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
