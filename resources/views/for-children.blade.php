@extends('layouts.app')

@section('og_title', 'Кулинарный тимбилдинг – необычный и интересный формат для корпоратива')
@section('og_description', 'Кулинарный тимбилдинг – необычный и интересный формат для корпоратива. Меню на человека от 2000 руб. Бесплатные напитки.')
@section('og_image', 'https://cookforia.ru/images/main-corporate-back.jpg')
@section('title', 'Кулинарный мастер класс для детей')
@section('description', 'Проведем незабываемый кулинарный мастер-класс для детей, для вас игровая зона, детское меню, безлимитные безалкогольные напитки. Кулинарный мастер класс от Cookforia - это полезные навыки и море эмоций.')
@section('keywords', 'кулинарный мастер-класс, корпоратив, тимбилдинг')

@section('content')
    <div class="section section-main section-main-pages section-main-children">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Мастер-класс для детей</h1>
                <p>
                    <strong>Кулинарный мастер класс для детей</strong> — возможность провести детский день рождения
                    весело и с пользой! Такое мероприятие точно подарит имениннику и его гостям яркие эмоции.
                    Кулинарная студия Cookforia организует детский кулинарный мастер-класс для школьников. Маленькие
                    кулинары будут готовить под руководством шеф-повара, который превратит приготовление еды в настоящее
                    приключение. Предлагаем на выбор пять разных меню, каждое из которых включает два блюда и напиток.
                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Почему стоит обратиться в Cookforia?</strong></h3>
                <div class="item-desc__block block-desc">
                    <div class=" block-desc__title">
                        Детская игровая зона
                    </div>
                    <div class="block-desc__text large-text">
                        Один из главных плюсов нашей студии — игровая зона (на Московском проспекте). Здесь дети могут
                        повеселиться и отдохнуть в перерывах между приготовлением блюд. Это делает мастер-класс по
                        приготовлению еды для детей ещё более интересным и комфортным.
                    </div>
                </div>
                <div class="item-desc__block block-desc">
                    <div class=" block-desc__title">
                        3 часа веселья
                    </div>
                    <div class="block-desc__text large-text">
                        Мастер-класс длится три часа, но по желанию время можно продлить. В течение всего мероприятия
                        дети успевают не только приготовить вкусные блюда, но и поиграть, повеселиться и получить много
                        положительных эмоций.
                    </div>
                </div>
                <div class="item-desc__block block-desc">
                    <div class=" block-desc__title">
                        Бесплатные безалкогольные напитки
                    </div>
                    <div class="block-desc__text large-text">
                        Предлагаем каждому маленькому участнику МК бесплатные напитки: вода, домашний лимонад и
                        ароматный чай. Их количество — неограниченно, поэтому дети смогут наслаждаться ими на протяжении
                        всего праздника.
                    </div>
                </div>
                <div class="item-desc__block block-desc">
                    <div class=" block-desc__title">
                        Профессиональный шеф-повар
                    </div>
                    <div class="block-desc__text large-text">
                        <strong> Наш МК проходит под чутким надзором опытного шеф-повара. Он научит маленьких кулинаров
                            готовить
                            простые и вкусные блюда, поможет каждому справиться с поставленной задачей. При желании вы
                            можете воспользоваться дополнительными платными услугами: заказать ведущего, аниматоров,
                            аквагрим или украшение студии шарами.</strong>
                    </div>
                </div>
                <div class="item-desc__block block-desc">
                    <div class=" block-desc__title">
                        Детское меню
                    </div>
                    <div class="block-desc__text large-text">
                        Предлагаем на выбор пять разных меню, в которые мы включили наиболее вкусные и любимые детские
                        блюда — бургеры, хот-доги, пиццу, тортильи, пасту карбонара. Во время приготовления еды дети
                        научатся работать в команде, а в конце праздника — лично попробуют свои кулинарные творения.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-schedule-gallery">
        <div class="container">
            <h2>Галерея</h2>
            <div class="schedule-gallery-container owl-carousel owl-theme">
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/kids/4-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/4-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/4-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/kids/4-1110.webp">
                        <source srcset="/images/gallery/kids/4-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/4-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/4-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/kids/4-1110.jpg" alt="Детские праздники">
                    </picture>
                </div>

                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/kids/2-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/2-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/2-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/kids/2-1110.webp">
                        <source srcset="/images/gallery/kids/2-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/2-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/2-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/kids/2-1110.jpg" alt="Детские праздники">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/kids/3-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/3-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/3-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/kids/3-1110.webp">
                        <source srcset="/images/gallery/kids/3-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/3-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/3-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/kids/3-1110.jpg" alt="Детские праздники">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/kids/5-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/5-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/5-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/kids/5-1110.webp">
                        <source srcset="/images/gallery/kids/5-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/5-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/5-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/kids/5-1110.jpg" alt="Детские праздники">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/kids/6-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/6-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/6-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/kids/6-1110.webp">
                        <source srcset="/images/gallery/kids/6-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/6-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/6-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/kids/6-1110.jpg" alt="Детские праздники">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/kids/7-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/7-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/7-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/kids/7-1110.webp">
                        <source srcset="/images/gallery/kids/7-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/7-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/7-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/kids/7-1110.jpg" alt="Детские праздники">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/kids/8-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/8-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/8-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/kids/8-1110.webp">
                        <source srcset="/images/gallery/kids/8-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/8-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/8-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/kids/8-1110.jpg" alt="Детские праздники">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/kids/1-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/1-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/1-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/kids/1-1110.webp">
                        <source srcset="/images/gallery/kids/1-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/1-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/1-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/kids/1-1110.jpg" alt="Детские праздники">
                    </picture>
                </div>
                <!-- <div class="item"><img src="/images/gallery/kids/1.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/kids/2.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/kids/3.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/kids/4.jpg" alt=""></div> -->
            </div>
        </div>
    </div>

    {{--    @component('components.additionally')--}}
    {{--    @endcomponent--}}
    <div class="section section-sig-in" name="sign-in-form" id="sign-in-form">
        @component('components.sign_in_form')
        @endcomponent
    </div>
    @component('components.seo-block')
    @endcomponent
@endsection
