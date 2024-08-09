@extends('layouts.app')

@section('og_title', 'Детские праздники в кулинарной студии «Cookforia» - это не только познавательно, но и очень весело!')
@section('og_description', 'Проведите детский праздник в кулинарной студии! Меню на человека от 1500 руб. Бесплатные напитки.')
@section('og_image', 'https://cookforia.ru/images/main-kids-back.jpg')
@section('title', 'Детские праздники в кулинарной студии «Cookforia» - это не только познавательно, но и очень весело!')
@section('description', 'Проведите детский праздник в кулинарной студии! Меню на человека от 1500 руб. Бесплатные напитки.')
@section('keywords', 'детский день рождения, детский праздник, мероприятие для детей')

@section('content')
    <div class="section section-main section-main-pages section-main-kids">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Детские праздники</h1>
                <p> Детский праздник в формате мастер-класса – это настоящее кулинарное развлечение! Это радость,
                    восторг, много детского смеха и яркие эмоции, которые останутся на всю жизнь. Для детей мы
                    разработали отдельное меню. Каждое блюдо вкусное, яркое и веселое в приготовлении.
                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>
    <div class="section section-pages-benefits">
        <div class="container">
            <h2>Праздник в кулинарной студии</h2>
            <div class="pages-benefits-container">
                <div class="pages-benefit-item">
                    <div class="pages-benefits-item-image">
                        <img src="/images/icons/game-zone.svg" alt="">
                    </div>
                    <div class="pages-benefits-item-header">
                        Игровая зона для детей
                    </div>
                    <div class="pages-benefits-item-text">
                        Дети смогут весело провести время
                    </div>
                </div>

                <div class="pages-benefit-item">
                    <div class="pages-benefits-item-image">
                        <img src="/images/icons/fun.svg" alt="">
                    </div>
                    <div class="pages-benefits-item-header">
                        Минимум 3 часа веселья
                    </div>
                    <div class="pages-benefits-item-text">
                        Стандартное мероприятие длится 3 часа, но Вы можете забронировать дополнительное время
                    </div>
                </div>

                <div class="pages-benefit-item">
                    <div class="pages-benefits-item-image">
                        <img src="/images/icons/drinks.svg" alt="">
                    </div>
                    <div class="pages-benefits-item-header">
                        Бесплатные напитки
                    </div>
                    <div class="pages-benefits-item-text">
                        Бесплатные безалкогольные напитки в большом количестве
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-how-much">
        <div class="container">
            <h2>Сколько стоит провести мероприятие?</h2>
            <h3 class="orange-header">от 25000 руб.</h3>
            <p style="text-align: center; margin-bottom: 0;">Стоимость организации мероприятия в декабре - уточняйте у менеджеров студии.</p>
            <p class="large-text">Стоимость зависит от выбранного меню. Цена в меню указана для одного участника.</p>
        </div>
    </div>
    <div class="section section-content-menu">
        <div class="container">
            <div class="content-menu-block">
                <h2>ДЕТСКОЕ МЕНЮ</h2>
                <p class="large-text">В каждом меню 2 блюда + напитки</p>
                <div class="menu-container">

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #1
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/1/1.avif" type="image/avif">
									    <img src="/images/menu/kids/1/1.jpg" alt="Бургер с котлетой из говядины">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/1/2.avif" type="image/avif">
									    <img src="/images/menu/kids/1/2.jpg" alt="Капкейк с кремом из взбитых сливок">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/1/3.avif" type="image/avif">
									    <img src="/images/menu/kids/1/3.jpg" alt="Клубничный коктейль">
								    </picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
                                <ul>
                                    <li>Бургер с котлетой из говядины</li>
                                    <li>Капкейк с кремом из взбитых сливок</li>
                                    <li>Клубничный коктейль</li>
                                </ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">2600 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48519">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.menu-block -->

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #2
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/2/1.avif" type="image/avif">
									    <img src="/images/menu/kids/2/1.jpg" alt="Классический Хот-дог">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/2/2.avif" type="image/avif">
									    <img src="/images/menu/kids/2/2.jpg" alt="Тирамису на сливках">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/2/3.avif" type="image/avif">
									    <img src="/images/menu/kids/2/3.jpg" alt="Ванильный коктейль">
								    </picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
                                <ul>
                                    <li>Классический Хот-дог</li>
                                    <li>Тирамису на сливках</li>
                                    <li>Ванильный коктейль</li>
                                </ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">2500 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48520">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.menu-block -->

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #3
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/3/1.avif" type="image/avif">
									    <img src="/images/menu/kids/3/1.jpg" alt="Пицца в ассортименте">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/3/2.avif" type="image/avif">
									    <img src="/images/menu/kids/3/2.jpg" alt="Печенье с шоколадной крошкой">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/3/3.avif" type="image/avif">
									    <img src="/images/menu/kids/3/3.jpg" alt="Банановый коктейль">
								    </picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
                                <ul>
                                    <li>Пицца в ассортименте</li>
                                    <li>Печенье с шоколадной крошкой</li>
                                    <li>Банановый коктейль</li>
                                </ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">2400 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48521">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="menu-buttons">
                    <a class="button button-bordered" href="#sign-in-form">Записаться</a>
                    <a class="button button-solid" href="/menu">Полное меню</a>
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
                        <source srcset="/images/gallery/kids/1-1110.avif" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/1-690.avif" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/1-510.avif" media="(max-width: 767px)">
                        <source srcset="/images/gallery/kids/1-1110.avif">
                        <source srcset="/images/gallery/kids/1-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/1-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/1-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/kids/1-1110.jpg" alt="Детские праздники">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/kids/2-1110.avif" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/2-690.avif" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/2-510.avif" media="(max-width: 767px)">
                        <source srcset="/images/gallery/kids/2-1110.avif">
                        <source srcset="/images/gallery/kids/2-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/2-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/2-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/kids/2-1110.jpg" alt="Детские праздники">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/kids/3-1110.avif" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/3-690.avif" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/3-510.avif" media="(max-width: 767px)">
                        <source srcset="/images/gallery/kids/3-1110.avif">
                        <source srcset="/images/gallery/kids/3-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/3-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/3-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/kids/3-1110.jpg" alt="Детские праздники">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/kids/4-1110.avif" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/4-690.avif" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/4-510.avif" media="(max-width: 767px)">
                        <source srcset="/images/gallery/kids/4-1110.avif">
                        <source srcset="/images/gallery/kids/4-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/4-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/4-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/kids/4-1110.jpg" alt="Детские праздники">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/kids/5-1110.avif" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/5-690.avif" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/5-510.avif" media="(max-width: 767px)">
                        <source srcset="/images/gallery/kids/5-1110.avif">
                        <source srcset="/images/gallery/kids/5-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/5-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/5-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/kids/5-1110.jpg" alt="Детские праздники">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/kids/6-1110.avif" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/6-690.avif" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/6-510.avif" media="(max-width: 767px)">
                        <source srcset="/images/gallery/kids/6-1110.avif">
                        <source srcset="/images/gallery/kids/6-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/6-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/6-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/kids/6-1110.jpg" alt="Детские праздники">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/kids/7-1110.avif" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/7-690.avif" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/7-510.avif" media="(max-width: 767px)">
                        <source srcset="/images/gallery/kids/7-1110.avif">
                        <source srcset="/images/gallery/kids/7-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/7-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/7-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/kids/7-1110.jpg" alt="Детские праздники">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/kids/8-1110.avif" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/8-690.avif" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/8-510.avif" media="(max-width: 767px)">
                        <source srcset="/images/gallery/kids/8-1110.avif">
                        <source srcset="/images/gallery/kids/8-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/kids/8-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/kids/8-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/kids/8-1110.jpg" alt="Детские праздники">
                    </picture>
                </div>
                <!-- <div class="item"><img src="/images/gallery/kids/1.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/kids/2.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/kids/3.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/kids/4.jpg" alt=""></div> -->
            </div>
        </div>
    </div>
    @component('components.additionally')
    @endcomponent

    <div class="section section-sig-in" name="sign-in-form" id="sign-in-form">
        @component('components.sign_in_form')
        @endcomponent
    </div>
@endsection
