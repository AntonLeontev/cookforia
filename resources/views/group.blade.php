@extends('layouts.app')

@section('og_title', 'Кулинарный мастер-класс групповой')
@section('og_description', 'Присоединяйтесь к нашему кулинарному мастер-классу в группе и откройте для себя новые кулинарные горизонты. Идеально для новых знакомств в дружеской атмосфере. ( на групповые МК как правило приходят незнакомые люди, думаю это не про дружеские встречи) Запишитесь сегодня!.')
@section('og_image', 'https://cookforia.ru/images/gallery/group/02.jpg')
@section('title', 'Кулинарный мастер-класс групповой')
@section('description', 'Присоединяйтесь к нашему кулинарному мастер-классу в группе и откройте для себя новые кулинарные горизонты. Идеально для новых знакомств в дружеской атмосфере. ( на групповые МК как правило приходят незнакомые люди, думаю это не про дружеские встречи) Запишитесь сегодня!.')
@section('keywords', 'кулинарный мастер-класс, корпоратив, творческий кулинарный мастер-класс')

@section('content')
    <div class="section section-main section-main-pages section-main-group">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Кулинарный мастер-класс групповой</h1>
                <p>
                    <strong>Кулинарный мастер-класс для группы</strong> в студии «Cookforia» — место, где рождается
                    магия вкуса.
                </p>
                <p>
                    Представьте… Уютная атмосфера, смех друзей, аромат пряностей и щепотка волшебства в воздухе. Вы
                    окружены талантливым шеф-поваром, который с радостью раскрывает секреты мировой кухни. Это не просто
                    мастер-класс – это гастрономическое приключение, где каждая минута наполнена вкусом, творчеством и
                    радостью общения.
                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Групповой кулинарный мастер-класс: готовьте, пробуйте,
                        наслаждайтесь</strong></h3>
                <p class="large-text">
                    С нами вы сможете…
                </p>
                <ul class="large-text">
                    <li>
                        Отвлечься от рутины. Забыть о повседневных заботах, погрузиться в мир новых вкусов и ароматов.
                    </li>
                    <li>
                        Познакомиться с интересными людьми. Найти единомышленников, с которыми можно поделиться своими
                        кулинарными открытиями и просто приятно провести время.
                    </li>
                    <li>
                        Научиться готовить что-то новое. Расширить свои кулинарные горизонты, а впоследствии удивить
                        близких необычными блюдами.
                    </li>
                    <li>
                        Провести незабываемый вечер. Сочетание обучения, творчества и дегустации превратит ваш вечер в
                        настоящее гастрономическое приключение.
                    </li>
                </ul>
                <p class="large-text">
                    Не откладывайте свою мечту на потом. Запишитесь на групповой мастер-класс по кулинарии уже сегодня.
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
                        <source srcset="/images/gallery/group/01.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/group/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/group/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/group/01.jpg" alt="Кулинарный мастер-класс групповой">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/group/02.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/group/02-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/group/02-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/group/02.jpg" alt="Кулинарный мастер-класс групповой">
                    </picture>

                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/group/03.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/group/03-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/group/03-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/group/03.jpg" alt="Кулинарный мастер-класс групповой">
                    </picture>

                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/group/04.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/group/04-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/group/04-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/group/04.jpg" alt="Кулинарный мастер-класс групповой">
                    </picture>

                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/group/05.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/group/05-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/group/05-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/group/05.jpg" alt="Кулинарный мастер-класс групповой">
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
                        <a href="/easter">Кулинарный мастер-класс Пасха</a>
                        <a href="/nature">Кулинарный мастер-класс на природе</a>
                        {{--                    <a href="">Грузинская кухня</a>--}}
                        <a class="_active" href="/group">Кулинарный мастер-класс групповой</a>
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
