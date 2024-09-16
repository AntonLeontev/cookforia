@extends('layouts.app')

@section('og_title', 'Мастер класс свидание для двоих')
@section('og_description', 'Удивите свою вторую половинку необычным свиданием. Приглашаем влюбленных на кулинарный мастер класс от Cookforia. Большой выбор меню и уютная атмосфера.')
@section('og_image', 'https://cookforia.ru/images/evening/03.jpg')
@section('title', 'Мастер класс свидание для двоих')
@section('description', 'Удивите свою вторую половинку необычным свиданием. Приглашаем влюбленных на кулинарный мастер класс от Cookforia. Большой выбор меню и уютная атмосфера.')
@section('keywords', 'кулинарный мастер-класс, корпоратив, тимбилдинг')

@section('content')
    <div class="section section-main section-main-pages section-main-appointment">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Свидание</h1>
                <p><strong>Мастер-класс, свидание для двоих</strong> — вот секрет чудесного вечера, если хотите
                    сблизиться
                    с любимым человеком, а также получить новые впечатления и навыки.</p>
                <p> Приходите на мастер-класс (свидание для двоих) в СПб в «Cookforia». Опытный шеф-повар поделится
                    своими
                    секретами, и вы вместе приготовите изысканные блюда по рецептам мировой кухни.</p>
                <p class="text-left"> Это не просто ужин, а настоящее приключение, где вы:</p>
                <ul>
                    <li>
                        Станете шеф-поварами на один вечер. Наденете фирменные колпаки, повяжите фартуки и приготовитесь
                        творить кулинарные шедевры. Почувствуете себя настоящими профессионалами, узнаете секреты
                        приготовления
                        пищи.
                    </li>
                    <li>
                        Освоите новые кулинарные техники. Под руководством опытного шеф-повара научитесь создавать
                        вкусные
                        блюда, красиво подавать их.
                    </li>
                    <li>
                        Приготовите салаты, горячее и десерты своими руками. Вложите в каждое блюдо свою любовь и
                        заботу.
                        Попробовав результат своего труда, будете гордиться собой.
                    </li>
                    <li>
                        Поужинаете в романтической обстановке. Насладитесь вкусом приготовленных вами блюд в компании
                        друг
                        друга. Поделитесь своими впечатлениями и эмоциями.
                    </li>
                    <li>
                        Сблизитесь и создадите незабываемые воспоминания. Этот вечер станет одним из самых ярких в вашей
                        истории любви.
                    </li>
                </ul>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Приходите в кулинарную студию на свидание</strong></h3>
                <p class="large-text">Этот необычный формат свидания позволит вам насладиться вкусной едой, а также
                    узнать друг друга с новой стороны, вместе приятно провести время.</p>
                <p class="large-text">В нашей кулинарной студии вы найдете:</p>
                <ul class="large-text">
                    <li>Уютную атмосферу, подходящую для свидания.</li>
                    <li>Опытного шеф-повара, которые будет вашим проводником в мир кулинарии.</li>
                    <li>Все необходимые ингредиенты и оборудование.</li>
                    <li>Широкий выбор рецептов мировых кухонь.</li>
                    <li>Бесплатные безалкогольные напитки.</li>
                    <li>Винную карту, которая дополнит ваш ужин.</li>
                </ul>
                <p>Мастер-класс (свидание для двоих) в Санкт-Петербурге подходит для празднования любого знаменательного события.</p>
            </div>
            <div class="item-desc">
                <h3 class="text-center"><strong>Организовать свидание в кулинарной студии</strong></h3>
                <p class="large-text">Звоните в «Cookforia», если хотите:</p>
                <ul class="large-text">
                    <li>
                        Сделать свой досуг более интересным и разнообразным.
                    </li>
                    <li>Сблизиться с любимым человеком.</li>
                    <li>
                        Преподнести запоминающийся подарок.
                    </li>
                </ul>
                <p class="large-text">Подарите себе и своему партнеру незабываемые впечатления.</p>
            </div>
        </div>
    </div>

    <div class="section section-schedule-gallery">
        <div class="container">
            <h2>Галерея</h2>
            <div class="schedule-gallery-container owl-carousel owl-theme">
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/corporate/2-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/2-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/2-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/corporate/2-1110.webp">
                        <source srcset="/images/gallery/corporate/2-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/2-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/2-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/corporate/2-1110.jpg" alt="Корпоратив">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/corporate/6-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/6-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/6-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/corporate/6-1110.webp">
                        <source srcset="/images/gallery/corporate/6-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/6-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/6-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/corporate/6-1110.jpg" alt="Корпоратив">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/corporate/7-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/7-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/7-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/corporate/7-1110.webp">
                        <source srcset="/images/gallery/corporate/7-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/7-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/7-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/corporate/7-1110.jpg" alt="Корпоратив">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/corporate/8-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/8-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/8-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/corporate/8-1110.webp">
                        <source srcset="/images/gallery/corporate/8-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/8-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/8-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/corporate/8-1110.jpg" alt="Корпоратив">
                    </picture>
                </div>
            </div>
        </div>
    </div>

        @component('components.additionally')
        @endcomponent
    <div class="section section-sig-in" name="sign-in-form" id="sign-in-form">
        @component('components.sign_in_form')
        @endcomponent
    </div>
    @component('components.seo-block')
    @endcomponent
@endsection
