@extends('layouts.app')

@section('og_title', 'День рождения в формате кулинарного мастер-класса')
@section('og_description', 'Оригинальный способ отметить праздничное событие и удивить своих близких и друзей необычной гастрономической вечеринкой. Меню на человека от 2000 руб. Бесплатные напитки.')
@section('og_image', 'https://cookforia.ru/images/main-birthday-back.jpg')
@section('title', 'День рождения в формате кулинарного мастер-класса')
@section('description', 'Оригинальный способ отметить праздничное событие и удивить своих близких и друзей необычной гастрономической вечеринкой. Меню на человека от 2000 руб. Бесплатные напитки.')
@section('keywords', 'кулинарный мастер-класс, день рождения, юбилей')



@section('content')
    <div class="section section-main section-main-pages section-main-birthday">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>День рождения</h1>
                <p> Отметьте день рождения в формате кулинарного мастер-класса, чтобы вовлечь гостей в приготовление
                    блюд и поужинать кулинарными шедеврами, созданными своими руками. Мы трепетно относимся к любому
                    событию, поэтому уделяем максимальное внимание каждой детали на празднике. Сообщите нам о своих
                    пожеланиях, и мы постараемся сделать все, чтобы у вас и ваших гостей остались яркие эмоции от
                    мероприятия.</p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-pages-benefits">
        <div class="container">
            <h2>День рождения в кулинарной студии</h2>
            <div class="pages-benefits-container">
                {{-- <div class="pages-benefit-item">
                    <div class="pages-benefits-item-image">
                        <img src="/images/icons/prob-sbor.svg" alt="">
                    </div>
                    <div class="pages-benefits-item-header">
                        Без пробкового сбора
                    </div>
                    <div class="pages-benefits-item-text">
                        Вы можете принести с собой алкогольные напитки
                    </div>
                </div> --}}

                <div class="pages-benefit-item">
                    <div class="pages-benefits-item-image">
                        <img src="/images/icons/menu.svg" alt="">
                    </div>
                    <div class="pages-benefits-item-header">
                        Разнообразное меню
                    </div>
                    <div class="pages-benefits-item-text">
                        В меню представлены кухни разных стран
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

                <div class="pages-benefit-item">
                    <div class="pages-benefits-item-image">
                        <img src="/images/icons/3-dish.svg" alt="">
                    </div>
                    <div class="pages-benefits-item-header">
                        Не менее 3 блюд каждому
                    </div>
                    <div class="pages-benefits-item-text">
                        Вкусные и сытные блюда понравятся всем
                    </div>
                </div>

                <div class="pages-benefit-item">
                    <div class="pages-benefits-item-image">
                        <img src="/images/icons/kids.svg" alt="">
                    </div>
                    <div class="pages-benefits-item-header">
                        Можно с детьми от 4 лет
                    </div>
                    <div class="pages-benefits-item-text">
                        Интересно будет всем
                    </div>
                </div>

				<div class="pages-benefit-item">
                    <div class="pages-benefits-item-image">
                        <img height="80px" src="/images/icons/bottle.png" alt="Бутылка" style="width: auto;">
                    </div>
                    <div class="pages-benefits-item-header">
                        Винная карта
                    </div>
                    <div class="pages-benefits-item-text">
                        (Пробковый&nbsp;сбор)
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
                <h2>ОСНОВНОЕ МЕНЮ</h2>
                <p class="large-text">В каждом меню 3 блюда + бесплатные напитки</p>
                <div class="menu-container">
                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #1
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
										<source srcset="/images/menu/main/1/1.avif" type="image/avif">
										<img src="/images/menu/main/1/1.jpg" alt="Салат Цезарь с курицей и перепелиными яйцами">
									</picture>
                                </div>
                                <div class="item">
                                    <picture>
										<source srcset="/images/menu/main/1/2.avif" type="image/avif">
										<img src="/images/menu/main/1/2.jpg" alt="Домашняя паста карбонара">
									</picture>
                                </div>
                                <div class="item">
                                    <picture>
										<source srcset="/images/menu/main/1/3.avif" type="image/avif">
										<img src="/images/menu/main/1/3.jpg" alt="Мильфей 1000 слоёв">
									</picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
                                <ul>
                                    <li>Салат Цезарь с курицей и перепелиными яйцами</li>
                                    <li>Домашняя паста карбонара</li>
                                    <li>Мильфей 1000 слоёв</li>
                                </ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">3400 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48504">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #2
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
										<source srcset="/images/menu/main/2/1.avif" type="image/avif">
										<img src="/images/menu/main/2/1.jpg" alt="Салат с тартаром из тунца, свежим манго и сливочным гуакамоле">
									</picture>
                                </div>
                                <div class="item">
                                    <picture>
										<source srcset="/images/menu/main/2/2.avif" type="image/avif">
										<img src="/images/menu/main/2/2.jpg" alt="Стейк из оленины с брусничным соусом и яблочным компоте">
									</picture>
                                </div>
                                <div class="item">
                                    <picture>
										<source srcset="/images/menu/main/2/3.avif" type="image/avif">
										<img src="/images/menu/main/2/3.jpg" alt="Нежнейший многослойный десерт — трайфл">
									</picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
                                <ul>
                                    <li>Салат с тартаром из тунца, свежим манго и сливочным гуакамоле</li>
                                    <li>Стейк из оленины с брусничным соусом и яблочным компоте</li>
                                    <li>Нежнейший многослойный десерт — трайфл</li>
                                </ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">4900 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48505">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #3
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
										<source srcset="/images/menu/main/3/1.avif" type="image/avif">
										<img src="/images/menu/main/3/1.webp" alt="Аджаб сандал">
									</picture>
                                </div>
                                <div class="item">
                                    <picture>
										<source srcset="/images/menu/main/3/2.avif" type="image/avif">
										<img src="/images/menu/main/3/2.webp" alt="Хачапури по аджарски">
									</picture>
                                </div>
                                <div class="item">
                                    <picture>
										<source srcset="/images/menu/main/3/3.avif" type="image/avif">
										<img src="/images/menu/main/3/3.webp" alt="Оджахури с говяжьей вырезкой и грибами в соусе наршараб">
									</picture>
                                </div>
                                <div class="item">
                                    <picture>
										<source srcset="/images/menu/main/3/4.avif" type="image/avif">
										<img src="/images/menu/main/3/4.webp" alt="Оджахури с говяжьей вырезкой и грибами в соусе наршараб">
									</picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
								<ul>
									<li>Аджаб сандал</li>
									<li>Хачапури по аджарски</li>
									<li>Оджахури с говяжьей вырезкой и грибами в соусе наршараб</li>
									<li>Гозинак</li>
								</ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">3700 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48506">Выбрать</a>
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
                        <source srcset="/images/gallery/birthday/1-1110.avif" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/1-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/1-690.avif" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/1-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/1-510.avif" media="(max-width: 767px)">
                        <source srcset="/images/gallery/birthday/1-510.jpg" media="(max-width: 767px)">
                        <source srcset="/images/gallery/birthday/1-1110.avif" alt="День рождения">
                        <img src="/images/gallery/birthday/1-1110.jpg" alt="День рождения">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/birthday/2-1110.avif" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/2-690.avif" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/2-510.avif" media="(max-width: 767px)">
                        <source srcset="/images/gallery/birthday/2-1110.avif" alt="День рождения">
                        <source srcset="/images/gallery/birthday/2-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/2-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/2-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/birthday/2-1110.jpg" alt="День рождения">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/birthday/3-1110.avif" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/3-690.avif" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/3-510.avif" media="(max-width: 767px)">
                        <source srcset="/images/gallery/birthday/3-1110.avif" alt="День рождения">
                        <source srcset="/images/gallery/birthday/3-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/3-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/3-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/birthday/3-1110.jpg" alt="День рождения">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/birthday/4-1110.avif" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/4-690.avif" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/4-510.avif" media="(max-width: 767px)">
                        <source srcset="/images/gallery/birthday/4-1110.avif" alt="День рождения">
                        <source srcset="/images/gallery/birthday/4-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/4-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/4-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/birthday/4-1110.jpg" alt="День рождения">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/birthday/5-1110.avif" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/5-690.avif" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/5-510.avif" media="(max-width: 767px)">
                        <source srcset="/images/gallery/birthday/5-1110.avif" alt="День рождения">
                        <source srcset="/images/gallery/birthday/5-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/5-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/5-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/birthday/5-1110.jpg" alt="День рождения">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/birthday/6-1110.avif" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/6-690.avif" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/6-510.avif" media="(max-width: 767px)">
                        <source srcset="/images/gallery/birthday/6-1110.avif">
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
    @component('components.additionally')
    @endcomponent
    <div class="section section-sig-in" name="sign-in-form" id="sign-in-form">
        @component('components.sign_in_form')
        @endcomponent
    </div>
@endsection
