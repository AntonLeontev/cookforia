@extends('layouts.app')

@section('og_title', 'Хотите улучшить командное взаимодействие коллектива? Организуем и проведем для вас кулинарный тимбилдинг в просторной студии. В вашем распоряжение две отдельные зоны для мероприятия и отдыха.')
@section('og_description', 'Кулинарный тимбилдинг – необычный и интересный формат для корпоратива. Меню на человека от 2000 руб. Бесплатные напитки.')
@section('og_image', 'https://cookforia.ru/images/section-main-teambilding-1920.jpg')
@section('title', 'Кулинарный тимбилдинг')
@section('description', 'Хотите улучшить командное взаимодействие коллектива? Организуем и проведем для вас кулинарный тимбилдинг в просторной студии. В вашем распоряжение две отдельные зоны для мероприятия и отдыха.')
@section('keywords', 'кулинарный мастер-класс, корпоратив, тимбилдинг')

@section('content')
    <div class="section section-main section-main-pages section-main-teambilding">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Тимбилдинг</h1>
                <p><strong>Кулинарный тимбилдинг</strong> — это эффективный способ сплотить коллектив за вкусным ужином,
                    приготовленным своими руками, повысить мотивацию и просто хорошо провести время вместе.
                    Представьте уютную кухню, аромат свежеприготовленных блюд, азарт соревнования. В этой непринужденной
                    обстановке сотрудники компании смогут отлично провести время, лучше узнать друг друга, развить
                    командный дух, укрепить связи между собой.
                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Что такое кулинарный тимбилдинг?</strong></h3>
                <p class="large-text">Стоимость зависит от выбранного меню. Цена в меню указана для одного
                    участника.</p>
                <p class="large-text">Это уникальный формат, включающий кулинарный мастер-класс, праздник и командную
                    работу. Под руководством
                    опытных шеф-поваров ваши сотрудники отправятся в гастрономическое путешествие, где приготовят
                    вкусные
                    блюда с нуля.
                    Меню может быть самым разнообразным — от грузинской кухни до изысканных блюд Средиземноморья.
                    Во время приготовления ваши коллеги научатся работать в команде, делиться идеями, помогать друг
                    другу и
                    преодолевать трудности. А финалом этого приключения станет совместный ужин, где все смогут
                    насладиться
                    плодами своих трудов.
                </p>
            </div>
            <div class="item-desc">
                <h3 class="text-center"><strong>Готовим вместе: кулинарный тимбилдинг СПб</strong></h3>
                <ul class="large-text">
                    <li>
                        Сплочение коллектива
                    </li>
                    <li>Совместная работа над общей целью всегда сближает людей. <strong>Кулинарный мастер-класс,
                            тимбилдинг</strong> — это
                        отличный способ улучшить коммуникацию, повысить доверие к друг другу, прокачать навыки
                        взаимовыручки.
                    </li>
                    <li>
                        Универсальность
                    </li>
                    <li>
                        Мероприятие подходит для бизнеса любого направления.
                    </li>
                    <li>
                        Развитие навыков
                    </li>
                    <li>
                        Каждый участник мероприятия получит ценные знания и практические навыки в области кулинарии,
                        которые
                        сможет применять в быту.
                    </li>
                    <li>
                        Незабываемые впечатления
                    </li>
                    <li>
                        Такое мероприятие — это не просто еда, это яркие эмоции, веселье, позитив. Такое событие надолго
                        останется в памяти ваших сотрудников.
                    </li>
                    <li>
                        Разнообразие
                    </li>
                    <li>
                        Много кулинарных форматов — от мастер-классов по приготовлению пиццы до тематических ужинов с
                        дегустацией вина.
                    </li>
                </ul>
            </div>
            <div class="item-desc">
                <h3 class="text-center"><strong>Организовать кулинарный тимбилдинг</strong></h3>
                <p class="large-text">
                    Студия «Cookforia» занимается организацией кулинарных мероприятий в Санкт-Петербурге.
                </p>
                <p class="large-text">
                    Звоните, чтобы заказать корпоратив в необычном формате, который сделает незабываемым любое событие.
                    Подарите сотрудникам море позитивных эмоций, сплотив их в неформальной обстановке.
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
                        <source srcset="/images/gallery/team-building/01.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/team-building/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/team-building/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/team-building/01.jpg" alt="Тимбилдинг">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/team-building/02.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/team-building/02-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/team-building/02-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/team-building/02.jpg" alt="Тимбилдинг">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/team-building/03.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/team-building/03-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/team-building/03-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/team-building/03.jpg" alt="Тимбилдинг">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/team-building/04.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/team-building/04-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/team-building/04-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/team-building/04.jpg" alt="Тимбилдинг">
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
