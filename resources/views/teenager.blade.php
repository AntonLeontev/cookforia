@extends('layouts.app')

@section('og_title', 'Кулинарный мастер-класс для подростков')
@section('og_description', 'Присоединяйтесь к кулинарному мастер-классу для подростков в Санкт-Петербурге! Научитесь готовить вкусные и полезные блюда, развивайте свои кулинарные навыки в дружеской атмосфере.')
@section('og_image', 'https://cookforia.ru/images/gallery/teenager/03.jpg')
@section('title', 'Кулинарный мастер-класс для подростков')
@section('description', 'Присоединяйтесь к кулинарному мастер-классу для подростков в Санкт-Петербурге! Научитесь готовить вкусные и полезные блюда, развивайте свои кулинарные навыки в дружеской атмосфере.')
@section('keywords', 'кулинарный мастер-класс, корпоратив, тимбилдинг')

@section('content')
    <div class="section section-main section-main-pages section-main-teenager">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Кулинарный мастер-класс для подростков</h1>
                <p>
                    <strong>Кулинарный мастер-класс для подростков</strong> — возможность провести время с друзьями,
                    научиться чему-то новому и попробовать себя в роли шеф-повара.


                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Кулинарный мастер-класс для подростков: вкус, творчество,
                        уверенность</strong></h3>
                <ul class="large-text">
                    <li>
                        Развитие творческих способностей. Каждый сможет проявить свою фантазию и создать уникальные
                        гастрономические шедевры.
                    </li>
                    <li>
                        Полезные навыки на всю жизнь. Умение готовить — это вкусно и полезно. Ребенок научится выбирать
                        качественные продукты, правильно их сочетать и готовить здоровую пищу.
                    </li>
                    <li>
                        Уверенность в себе. Успешно приготовленное блюдо — повод для гордости. Мастер-класс по кулинарии
                        для подростков поможет поверить в свои силы, развить самостоятельность.
                    </li>
                    <li>
                        Новые знакомства. На наших занятиях ребята встретят новых друзей, с которыми смогут общаться на
                        интересные темы и делиться своими кулинарными открытиями.
                    </li>
                    <li>
                        Знания от экспертов. Наши курсы ведут опытные шеф-повара, которые поделятся секретами своего
                        мастерства и авторскими рецептами.
                    </li>
                    <li>
                        Мир вкусов без границ. От сочных стейков до нежных паст, от ароматных хачапури до изысканных
                        десертов — у нас вы найдете блюда разных кухонь мира.
                    </li>
                    <li>
                        Готовим вместе. Мы делаем процесс обучения максимально интересным и увлекательным. Вы не просто
                        слушаете, а активно участвуете в создании блюд.
                    </li>
                    <li>
                        Комфортная обстановка. Уютная атмосфера наших студий способствует творчеству и вдохновению.
                    </li>
                    <li>
                        Дегустация готовых блюд. Ребята смогут оценить результаты своей работы и насладиться вкусом
                        приготовленных блюд.
                    </li>
                </ul>
                <p class="large-text">
                    Готовы отправить своих детей в увлекательное кулинарное путешествие? Запишите их на МК в студию «Cookforia».
                </p>
                <p class="large-text">
                    <strong>Курсы воспринимаются у наших гостей, как получения какого-то диплома, какого-то сертификата. У студии нет образовательной лицензии. Формат мероприятий - развлекательный.</strong>
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
                        <source srcset="/images/gallery/teenager/01.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/teenager/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/teenager/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/teenager/01.jpg" alt="Тимбилдинг">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/teenager/02.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/teenager/02-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/teenager/02-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/teenager/02.jpg" alt="Тимбилдинг">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/teenager/03.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/teenager/03-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/teenager/03-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/teenager/03.jpg" alt="Тимбилдинг">
                    </picture>
                </div>
                <!-- <div class="item"><img src="/images/gallery/teenager/1.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/teenager/2.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/teenager/3.jpg" alt=""></div> -->
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
                        <a class="_active" href="/teenager">Кулинарный мастер-класс для подростков</a>
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
