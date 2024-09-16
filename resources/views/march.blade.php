@extends('layouts.app')

@section('og_title', 'Кулинарный мастер класс 8 марта')
@section('og_description', 'Присоединяйтесь к нашему кулинарному мастер классу на 8 марта! Узнайте новые рецепты, удивите своих близких вкусными блюдами и проведите незабываемый праздник.')
@section('og_image', 'https://cookforia.ru/images/main-corporate-back.jpg')
@section('title', 'Кулинарный мастер класс 8 марта')
@section('description', 'Присоединяйтесь к нашему кулинарному мастер классу на 8 марта! Узнайте новые рецепты, удивите своих близких вкусными блюдами и проведите незабываемый праздник.')
@section('keywords', 'кулинарный мастер-класс, корпоратив, творческий кулинарный мастер-класс')

@section('content')
    <div class="section section-main section-main-pages section-main-march">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Кулинарный мастер-класс 8 Марта</h1>
                <p>
                    <strong>Кулинарный мастер-класс 8 Марта</strong> — возможность отметить праздник ярко и незабываемо.
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
                    Приглашаем на кулинарное мероприятие, где вы научитесь готовить изысканные блюда и проведете время в
                    приятной компании коллег или подруг.
                </p>
            </div>
            <div class="item-desc">
                <h3 class="text-center"><strong>Кулинарный мастер-класс 8 Марта с изысканным сопровождением</strong>
                </h3>
                <p class="large-text">
                    Что вас ждет:
                </p>
                <ul class="large-text">
                    <li>
                        Гастрономическое путешествие. Предлагаем вам окунуться в мир разнообразных вкусов. В нашем меню
                        представлены блюда различных кухонь мира — от классической итальянской пасты до ароматного
                        грузинского чахохбили . Выбирайте страну и узнавайте секреты ее кухни.
                    </li>
                    <li>
                        Винная карта. Для ценителей изысканных вкусов у нас представлена богатая винная карта. Вы можете
                        принести свое вино (пробковый сбор).
                    </li>
                    <li>
                        Удобство. Наш мастер-класс проходит в просторной и уютной студии, где есть все необходимое для
                        комфортной работы. Отдельная зона отдыха позволит вам расслабиться и насладиться общением.
                    </li>
                    <li>
                        Гибкий формат. Стандартная продолжительность мероприятия — 3 часа, но мы готовы адаптироваться
                        под ваши пожелания и продлить аренду студии.
                    </li>
                </ul>
                <p class="large-text">
                    Хотите провести 8 Марта по-особенному? Присоединяйтесь к нашей кулинарной вечеринке. Гарантируем
                    отличное настроение и новые впечатления.
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
                        <source srcset="/images/gallery/march/01.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/march/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/march/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/march/01.jpg" alt="Творческий кулинарный мастер-класс">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/corporate/5-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/5-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/5-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/corporate/5-1110.webp">
                        <source srcset="/images/gallery/corporate/5-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/5-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/5-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/corporate/5-1110.jpg" alt="Корпоратив">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/girls/1-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/girls/1-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/girls/1-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/girls/1-1110.webp">
                        <source srcset="/images/gallery/girls/1-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/girls/1-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/girls/1-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/girls/1-1110.jpg" alt="Девичник">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/girls/4-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/girls/4-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/girls/4-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/girls/4-1110.webp">
                        <source srcset="/images/gallery/girls/4-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/girls/4-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/girls/4-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/girls/4-1110.jpg" alt="Девичник">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/girls/5-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/girls/5-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/girls/5-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/girls/5-1110.webp">
                        <source srcset="/images/gallery/girls/5-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/girls/5-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/girls/5-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/girls/5-1110.jpg" alt="Девичник">
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
                        <a class="_active" href="/march">Кулинарный мастер-класс 8 Марта</a>
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
