@extends('layouts.app')

@section('og_title', 'Кулинарные вечеринки')
@section('og_description', 'Организуем кулинарные вечеринки в Санкт-Петербурге для детей и взрослых. Увлекательные мастер-классы для компаний. Подарите себе и близким незабываемые гастрономические впечатления!')
@section('og_image', 'https://cookforia.ru/images/evening/03.jpg')
@section('title', 'Кулинарные вечеринки')
@section('description', 'Организуем кулинарные вечеринки в Санкт-Петербурге для детей и взрослых. Увлекательные мастер-классы для компаний. Подарите себе и близким незабываемые гастрономические впечатления!')
@section('keywords', 'кулинарный мастер-класс, корпоратив, тимбилдинг')

@section('content')
    <div class="section section-main section-main-evening">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Вечеринка</h1>
                <p><strong>Кулинарные вечеринки</strong> — это настоящий праздник вкуса и веселья для любого случая.
                    Мечтаете о незабываемом празднике, где окунетесь в атмосферу веселья, творчества и ароматы
                    вкуснейших блюд? Тогда вам к нам! Наша студия предлагает кулинарные мастер-классы для компании.
                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Почему именно кулинарные вечеринки?</strong></h3>
                <ul class="large-text">
                    <li>
                        Уникальный формат для корпоратива, тимбилдинга, дня рождения, девичника, мальчишника или просто
                        веселого вечера с друзьями. Это не просто ужин, а увлекательное приключение, где каждый сможет
                        попробовать себя в роли шеф-повара.
                    </li>
                    <li>
                        Разнообразное меню. В нашей студии вы можете выбрать кухню разных стран мира — от пикантных
                        итальянских блюд до изысканных французских деликатесов.
                    </li>
                    <li>
                        Командная работа. Совместное приготовление ужина сплотит вашу компанию (рабочий коллектив),
                        подарит заряд позитива, поможет лучше узнать друг друга.
                    </li>
                    <li>
                        Новые навыки. Под руководством опытного шеф-повара вы освоите новые кулинарные техники и сможете
                        удивить близких вкусными блюдами.
                    </li>
                    <li>
                        Вкусный ужин. Вы приготовите 3 блюда своими руками и насладитесь ими в теплой компании.
                    </li>
                </ul>
                <p class="large-text">
                    В нашей студии вы можете:
                </p>
                <ul class="large-text">
                    <li>
                        Заказать кулинарную вечеринку для компании от 2 до 50 человек в определенной стилистике.
                        Например, в итальянском, морском, ретро-стиле.
                    </li>
                    <li>
                        Провести вечеринку в нашей вместительной студии, где есть отдельная зона отдыха.
                    </li>
                    <li>
                        Расширить свой кругозор и попробовать новые вкусы.
                    </li>
                    <li>
                        Насладиться общением и бесплатными безалкогольными напитками.
                    </li>
                    <li>
                        Получить заряд позитива и незабываемые воспоминания, которые останутся с вами надолго.
                    </li>
                    <li>
                        Воспользоваться игровой зоной, если вы хотите организовать семейное мероприятие или кулинарную
                        вечеринку для детей.
                    </li>
                    <li>
                        Заказать алкоголь у нас (винная карта) или принести с собой алкогольные напитки (пробковый
                        сбор). Мы предлагаем удобные бокалы для каждого вида напитка. Обеспечиваем оптимальную
                        температуру хранения алкоголя.
                    </li>
                </ul>
            </div>
            <div class="item-desc">
                <h3 class="text-center"><strong>Кулинарная вечеринка в СПб</strong></h3>
                <p class="large-text">
                    Мы сделаем ваш праздник незабываемым. Забронируйте кулинарную вечеринку уже сегодня в студии
                    «Cookforia». Отправляйтесь в незабываемое гастрономическое путешествие, не покидая пределы
                    Санкт-Петербурга.
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
                        <source srcset="/images/gallery/evening/01.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/evening/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/evening/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/evening/01.jpg" alt="Тимбилдинг">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/evening/02.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/evening/02-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/evening/02-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/evening/02.jpg" alt="Тимбилдинг">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/evening/03.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/evening/03-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/evening/03-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/evening/03.jpg" alt="Тимбилдинг">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/evening/04.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/evening/04-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/evening/04-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/evening/04.jpg" alt="Тимбилдинг">
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
