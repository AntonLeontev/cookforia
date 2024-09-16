@extends('layouts.app')

@section('og_title', 'Кулинарный тимбилдинг – необычный и интересный формат для корпоратива')
@section('og_description', 'Кулинарный тимбилдинг – необычный и интересный формат для корпоратива. Меню на человека от 2000 руб. Бесплатные напитки.')
@section('og_image', 'https://cookforia.ru/images/main-corporate-back.jpg')
@section('title', 'Индивидуальный мастер-класс')
@section('description', 'Организуем индивидуальный мастер-класс для вас и вашей компании. Итальянская, Французская, Грузинская и другие кухни на ваш выбор. Готовьте вместе с Cookforia!')
@section('keywords', 'кулинарный мастер-класс, корпоратив, тимбилдинг')

@section('content')
    <div class="section section-main section-main-pages section-main-individual">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Индивидуальный мастер-класс</h1>
                <p>
                    <strong> Индивидуальный кулинарный мастер-класс</strong> — возможность провести уютный вечер с
                    близкими весело,
                    интересно и с пользой. За 3 часа вы получите яркие эмоции, научитесь готовить изысканные блюда и
                    вместе насладитесь результатом.
                    Забронировать индивидуальный кулинарный мастер-класс СПб для вашей компании вы сможете в студии
                    Cookforia. Гарантируем большой выбор блюд, бесплатные безалкогольные напитки и незабываемые
                    впечатления. Участвовать в мероприятии могут от 2 до 50 человек.

                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Что вас ждёт на мастер-классе в Cookforia?</strong></h3>
                <div class="item-desc__block block-desc">
                    <div class=" block-desc__title">
                        Блюда на ваш вкус
                    </div>
                    <div class="block-desc__text large-text">
                        В отличие от групповых занятий, в индивидуальном формате вы сами выбираете меню. Предлагаем 15
                        вариантов меню и самую разную кухню — итальянскую, французскую, тайскую, японскую. Каждый гость
                        приготовит и попробует три аппетитных блюда по авторским рецептам. Как правило, это салат,
                        горячее и десерт.
                    </div>
                </div>
                <div class="item-desc__block block-desc">
                    <div class=" block-desc__title">
                        Новые кулинарные навыки
                    </div>
                    <div class="block-desc__text large-text">
                        Шеф-повар студии не просто научит вас готовить вкусную еду. Он поможет освоить тонкости в
                        приготовлении изысканных блюд. Полученные знания и навыки вы сможете применить у себя дома. <i>Индивидуальный
                            мастер-класс по кулинарии</i> — это про новые вкусы и открытия.
                    </div>
                </div>
                <div class="item-desc__block block-desc">
                    <div class=" block-desc__title">
                        Винная карта
                    </div>
                    <div class="block-desc__text large-text">
                        Дополнить ужин и привнести в него больше положительных эмоций поможет вкусное и ароматное вино.
                        Наша винная карта включает напитки, которые хорошо сочетаются с разными блюдами. Вы можете
                        доверить выбор нашему сомелье или принести алкоголь с собой (действует пробковый сбор).
                    </div>
                </div>
                <div class="item-desc__block block-desc">
                    <div class=" block-desc__title">
                        Командная работа
                    </div>
                    <div class="block-desc__text large-text">
                        Кулинарные мастер-классы отлично подходят для сплочения близких, друзей или рабочего коллектива.
                        Совместное приготовление еды создает атмосферу сотрудничества и доверия, что способствует
                        укреплению взаимоотношений и развитию командного духа.
                    </div>
                </div>
                <div class="item-desc__block block-desc">
                    <div class=" block-desc__title">
                        Удобное пространство
                    </div>
                    <div class="block-desc__text large-text">
                        Наше помещение оборудовано всем необходимым для комфортного приготовления пищи. Предлагаем
                        просторную кухню с современным оборудованием, а также большую зону для отдыха, где вы можете
                        расслабиться и насладиться результатами своего труда.
                    </div>
                </div>
            </div>
            <div class="item-desc">
                <h3 class="text-center"><strong>Запишитесь на мастер-класс в кулинарную студию Cookforia</strong></h3>
                <p class="large-text">И превратите любое событие в праздник!</p>
                <p class="large-text">Общайтесь, делитесь опытом и готовьте с удовольствием вместе с близкими. Мероприятие рассчитано
                    минимум на 3 часа, но вы можете забронировать дополнительное время для вашей компании.</p>

            </div>
        </div>
    </div>

    <div class="section section-schedule-gallery">
        <div class="container">
            <h2>Галерея</h2>
            <div class="schedule-gallery-container owl-carousel owl-theme">
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/birthday/1-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/1-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/1-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/1-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/1-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/birthday/1-510.jpg" media="(max-width: 767px)">
                        <source srcset="/images/gallery/birthday/1-1110.webp" alt="День рождения">
                        <img src="/images/gallery/birthday/1-1110.jpg" alt="День рождения">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/birthday/2-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/2-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/2-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/birthday/2-1110.webp" alt="День рождения">
                        <source srcset="/images/gallery/birthday/2-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/2-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/2-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/birthday/2-1110.jpg" alt="День рождения">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/birthday/3-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/3-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/3-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/birthday/3-1110.webp" alt="День рождения">
                        <source srcset="/images/gallery/birthday/3-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/3-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/3-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/birthday/3-1110.jpg" alt="День рождения">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/birthday/4-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/4-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/4-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/birthday/4-1110.webp" alt="День рождения">
                        <source srcset="/images/gallery/birthday/4-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/4-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/4-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/birthday/4-1110.jpg" alt="День рождения">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/birthday/5-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/5-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/5-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/birthday/5-1110.webp" alt="День рождения">
                        <source srcset="/images/gallery/birthday/5-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/5-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/5-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/birthday/5-1110.jpg" alt="День рождения">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/birthday/6-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/6-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/6-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/birthday/6-1110.webp">
                        <source srcset="/images/gallery/birthday/6-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/6-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/6-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/birthday/6-1110.jpg" alt="День рождения">
                    </picture>
                </div>
                <!-- <div class="item"><img src="/images/gallery/birthday/1.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/birthday/2.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/birthday/3.jpg" alt=""></div> -->
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
