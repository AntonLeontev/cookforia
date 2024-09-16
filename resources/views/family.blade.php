@extends('layouts.app')

@section('og_title', 'Кулинарный тимбилдинг – необычный и интересный формат для корпоратива')
@section('og_description', 'Кулинарный тимбилдинг – необычный и интересный формат для корпоратива. Меню на человека от 2000 руб. Бесплатные напитки.')
@section('og_image', 'https://cookforia.ru/images/main-corporate-back.jpg')
@section('title', 'Семейный кулинарный мастер-класс')
@section('description', 'Кулинарный мастер-класс для всей семьи. Вместе с шеф-поварам приготовите вкуснейшие блюда для детей и взрослых. И проведете незабываемый семейный ужин. В кулинарной студии Cookforia.')
@section('keywords', 'кулинарный мастер-класс, корпоратив, тимбилдинг')

@section('content')
    <div class="section section-main section-main-pages section-main-family">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Семейный мастер-класс</h1>
                <p>
                    Семейный кулинарный мастер-класс — необычный способ провести время с семьёй и превратить любое
                    событие в настоящий праздник. Это гастрономическое приключение надолго останется в памяти у ваших
                    близких, а приобретенные кулинарные навыки вы сможете применить у себя дома.
                </p>
                <p>
                    Студия Cookforia — кулинарное пространство, где каждый, даже самый маленький участник, примерит на
                    себя роль шеф-повара. Кулинарный мастер-класс для семьи пройдет увлекательно как для взрослых, так и
                    для детей.
                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Почему кулинарный мастер-класс для детей и взрослых — это хорошая
                        идея?</strong></h3>
                <div class="item-desc__block block-desc">
                    <div class=" block-desc__title">
                        Вы вместе готовите
                    </div>
                    <div class="block-desc__text large-text">
                        Ваша семья приготовит три вкусных блюда под руководством опытного шеф-повара. Даже если кто-то
                        не умеет готовить, он всё равно внесёт свою лепту в общее дело. Совместное приготовление вкусной
                        еды сплачивает семью, улучшает взаимоотношения между детьми и родителями.
                    </div>
                </div>
                <div class="item-desc__block block-desc">
                    <div class=" block-desc__title">
                        Для детей есть игровая зона
                    </div>
                    <div class="block-desc__text large-text">
                        В студии предусмотрена детская игровая зона с кикером (на Московском проспекте), playstation и
                        настольные игры во всех студиях. Она понравится не только маленьким кулинарам, но и взрослым,
                        которые смогут поиграть вместе с детьми и отдохнуть в перерывах между приготовлением блюд.
                    </div>
                </div>
                <div class="item-desc__block block-desc">
                    <div class=" block-desc__title">
                        Вы сами выбираете меню
                    </div>
                    <div class="block-desc__text large-text">
                        Предлагаем на выбор 15 видов меню, где каждая семья найдет что-то по вкусу. У нас вы найдёте
                        разную кухню — итальянскую, французскую, японскую, американскую. Главные блюда включают стейки,
                        пасту, роллы и другие любимые блюда, которые понравятся как взрослым, так и детям.
                    </div>
                </div>
                <div class="item-desc__block block-desc">
                    <div class=" block-desc__title">
                        Безалкогольные напитки — бесплатно
                    </div>
                    <div class="block-desc__text large-text">
                        Предлагаем бесплатные безалкогольные напитки для всех участников мастер-класса. Количество
                        напитков неограниченно, его хватит на всё мероприятие.
                    </div>
                </div>
                <div class="item-desc__block block-desc">
                    <div class=" block-desc__title">
                        Вы можете продлить время
                    </div>
                    <div class="block-desc__text large-text">
                        Стандартное время мероприятия — 3 часа, но при желании вы можете забронировать дополнительное
                        время. Это позволит насладиться приготовленными блюдами и общением с близкими без спешки.
                    </div>
                </div>
            </div>
            <div class="item-desc">
                <h3 class="text-center"><strong>Бронируйте кулинарный мастер-класс для детей и родителей в
                        Cookforia</strong></h3>
                <p class="large-text">Проведите время с семьёй в необычном формате!</p>
                <p class="large-text">Записывайтесь на мастер-класс через наш сайт или звоните нам по телефону. Мы
                    организуем мероприятие
                    для вашей семьи, которое надолго останется в памяти.</p>
            </div>
        </div>
    </div>

    <div class="section section-schedule-gallery">
        <div class="container">
            <h2>Галерея</h2>
            <div class="schedule-gallery-container owl-carousel owl-theme">
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/family/01.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/family/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/family/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/family/01.jpg" alt="Тимбилдинг">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/family/02.webp" media="(min-width: 768px)">
                        <source srcset="/images/gallery/family/02-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/family/02-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/family/02.jpg" alt="Тимбилдинг">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/corporate/2-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/2-690.webp"
                                media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/2-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/corporate/2-1110.webp">
                        <source srcset="/images/gallery/corporate/2-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/2-690.jpg"
                                media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/2-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/corporate/2-1110.jpg" alt="Корпоратив">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/corporate/6-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/6-690.webp"
                                media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/6-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/corporate/6-1110.webp">
                        <source srcset="/images/gallery/corporate/6-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/6-690.jpg"
                                media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/6-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/corporate/6-1110.jpg" alt="Корпоратив">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/corporate/7-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/7-690.webp"
                                media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/7-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/corporate/7-1110.webp">
                        <source srcset="/images/gallery/corporate/7-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/7-690.jpg"
                                media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/7-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/corporate/7-1110.jpg" alt="Корпоратив">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/kids/7-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/7-690.webp"
                                media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/7-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/kids/7-1110.webp">
                        <source srcset="/images/gallery/kids/7-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/7-690.jpg"
                                media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/7-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/kids/7-1110.jpg" alt="Детские праздники">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/kids/1-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/1-690.webp"
                                media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/1-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/kids/1-1110.webp">
                        <source srcset="/images/gallery/kids/1-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/1-690.jpg"
                                media="(min-width: 768px) and (max-width: 991px)">
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
