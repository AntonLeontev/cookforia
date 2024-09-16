@extends('layouts.app')

@section('og_title', 'Аренда студии «Cookforia»')
@section('og_description', 'Аренда студии «Cookforia»')
@section('og_image', 'https://cookforia.ru/images/main-studio-rental-1279.jpg')
@section('title', 'Аренда студии «Cookforia»')
@section('description', 'Аренда студии «Cookforia»')
@section('keywords', 'аренда студии «cookforia»')

@section('content')
    <div class="section section-main section-main-pages section-main-studiorental">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Аренда студии</h1>
                <p>Аренда пространства 120 м2 для проведения: <br>мастер-классов, вечеринок на кухне, презентаций, <br>фотосессий, кулинарных шоу.</p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>
    <div class="section section-how-much">
        <div class="container">
            <h2>Час = 10000 рублей, от 3 часов.</h2>
            <h3 class="orange-header">В стоимость аренды входит: </h3>
            <p class="large-text">
            Все кухонное оборудование. <br>
            Весь инвентарь.<br>
            Пространство нашей студии разделено на две зоны: <br>
            первый этаж зона проведения мастер-класса, а так же обеденная зона; <br>
            музыкальное сопровождение в виде колонки.<br><br>
            на втором этаже зона, с мягкими пуфами, телевизором, приставкой и настольными играми. <br>
            Клининг на все время мероприятия = 2000 рублей.
            </p>
        </div>
    </div>
    <div class="section section-schedule-gallery">
        <div class="container">
            <h2>Галерея</h2>
            <div class="schedule-gallery-container owl-carousel owl-theme">
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/studio-rental/1-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/studio-rental/1-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/studio-rental/1-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/studio-rental/1-1110.webp">
                        <source srcset="/images/gallery/studio-rental/1-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/studio-rental/1-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/studio-rental/1-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/studio-rental/1-1110.jpg" alt="Аренда студии">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/studio-rental/2-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/studio-rental/2-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/studio-rental/2-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/studio-rental/2-1110.webp">
                        <source srcset="/images/gallery/studio-rental/2-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/studio-rental/2-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/studio-rental/2-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/studio-rental/2-1110.jpg" alt="Аренда студии">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/studio-rental/3-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/studio-rental/3-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/studio-rental/3-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/studio-rental/3-1110.webp">
                        <source srcset="/images/gallery/studio-rental/3-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/studio-rental/3-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/studio-rental/3-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/studio-rental/3-1110.jpg" alt="Аренда студии">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/studio-rental/4-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/studio-rental/4-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/studio-rental/4-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/studio-rental/4-1110.webp">
                        <source srcset="/images/gallery/studio-rental/4-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/studio-rental/4-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/studio-rental/4-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/studio-rental/4-1110.jpg" alt="Аренда студии">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/studio-rental/5-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/studio-rental/5-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/studio-rental/5-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/studio-rental/5-1110.webp">
                        <source srcset="/images/gallery/studio-rental/5-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/studio-rental/5-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/studio-rental/5-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/studio-rental/5-1110.jpg" alt="Аренда студии">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/studio-rental/6-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/studio-rental/6-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/studio-rental/6-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/studio-rental/6-1110.webp">
                        <source srcset="/images/gallery/studio-rental/6-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/studio-rental/6-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/studio-rental/6-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/studio-rental/6-1110.jpg" alt="Аренда студии">
                    </picture>
                </div>
                <!-- <div class="item"><img src="/images/gallery/studio-rental/1.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/studio-rental/2.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/studio-rental/3.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/studio-rental/4.jpg" alt=""></div> -->
            </div>
        </div>
    </div>

    <div class="section section-sig-in" name="sign-in-form" id="sign-in-form">
        @component('components.sign_in_form')
        @endcomponent
    </div>
@endsection
