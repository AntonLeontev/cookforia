@extends('layouts.app')

@section('og_title', 'Кулинарный мастер-класс от шефа')
@section('og_description', 'Запишитесь на кулинарный мастер-класс от шеф-повара! Узнайте секреты приготовления блюд от настоящего профессионала, улучшите свои навыки под руководством знаменитого шефа.')
@section('og_image', 'https://cookforia.ru/images/gallery/chef/03.jpg')
@section('title', 'Кулинарный мастер-класс от шефа')
@section('description', 'Запишитесь на кулинарный мастер-класс от шеф-повара! Узнайте секреты приготовления блюд от настоящего профессионала, улучшите свои навыки под руководством знаменитого шефа.')
@section('keywords', 'кулинарный мастер-класс, корпоратив, тимбилдинг')

@section('content')
    <div class="section section-main section-main-pages section-main-chef">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Кулинарный мастер-класс от шефа</h1>
                <p>
                    <strong>Кулинарный мастер-класс от шефа </strong>— это вкусная еда, яркие впечатления и новые
                    кулинарные открытия.
                    Вместе с родственниками, друзьями или коллегами вы освоите тонкости приготовления ресторанных блюд.
                    Такой необычный формат подойдёт для празднования дней рождений, корпоративов, девичников и других
                    важных событий.
                </p>
                <p>
                    Хотите почувствовать себя настоящим кулинаром? Судия Cookforiа организует праздник, после которого
                    вы научитесь и полюбите готовить. Записаться на кулинарный мастер-класс от шеф-повара вы можете на
                    сайте студии или по телефону.
                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Что вас ждёт в Cookforiа?</strong></h3>
                <ul class="large-text">
                    <li>
                        Индивидуальный подход
                    </li>
                </ul>
                <p class="large-text">
                    Если в групповых мастер-классах вы готовите вместе с незнакомыми людьми, индивидуальный МК
                    предполагает мероприятие только для вашей компании. Вы сами выбираете время, меню и желаемый формат
                    праздника. Таким образом, вы получаете уютный вечер с близкими без лишних глаз.
                </p>
                <ul class="large-text">
                    <li>
                        Богатое меню на выбор
                    </li>
                </ul>
                <p class="large-text">
                    У нас вы найдете 15 вариантов меню самой разной кухни — итальянской, грузинской, французской,
                    японской. Давно хотели научиться готовить хачапури или искусно крутить роллы? С нами вы освоите
                    тонкости разных кухонь мира.
                </p>
                <ul class="large-text">
                    <li>
                        Гастрономические открытия
                    </li>
                </ul>
                <p class="large-text">
                    МК в Cookforiа — это про новые вкусы и навыки. Каждый гость участвует в приготовлении блюд и
                    наблюдает за действиями шеф-повара. В зависимости от количества человек, шеф-повар разделяет
                    участников МК на несколько групп: одни готовят горячее, другие — салат, а третьи ответственны за
                    десерт. В результате, вы получаете секреты и знания, которые вы не найдёте в обычных кулинарных
                    рецептах. При этом приготовление еды проходит весело и легко.
                </p>
            </div>
            <div class="item-desc">
                <h3 class="text-center"><strong>Записывайтесь на кулинарный мастер-класс в Cookforiа</strong></h3>
                <p class="large-text">
                    Откройте для себя новые вкусы!
                </p>
                <p class="large-text">
                    Пригласите своих близких на МК и удивите их вкусными блюдами, которые вы приготовите вместе.
                    Оставить заявку и заказать кулинарный мастер-класс у знаменитого шефа можно на сайте студии. Мы
                    забронируем время, меню и учтём все ваши пожелания к мероприятию.
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
                        <source srcset="/images/gallery/chef/01.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/chef/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/chef/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/chef/01.jpg" alt="Тимбилдинг">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/chef/02.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/chef/02-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/chef/02-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/chef/02.jpg" alt="Тимбилдинг">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/chef/03.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/chef/03-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/chef/03-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/chef/03.jpg" alt="Тимбилдинг">
                    </picture>
                </div>
                <!-- <div class="item"><img src="/images/gallery/chef/1.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/chef/2.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/chef/3.jpg" alt=""></div> -->
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
                        <a class="_active" href="/chef">Кулинарный мастер-класс от шефа</a>
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
