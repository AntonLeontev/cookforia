@extends('layouts.app')

@section('og_title', 'Кулинарный тимбилдинг – необычный и интересный формат для корпоратива')
@section('og_description', 'Кулинарный тимбилдинг – необычный и интересный формат для корпоратива. Меню на человека от 2000 руб. Бесплатные напитки.')
@section('og_image', 'https://cookforia.ru/images/main-corporate-back.jpg')
@section('title', 'Кулинарный тимбилдинг – необычный и интересный формат для корпоратива')
@section('description', 'Кулинарный тимбилдинг – необычный и интересный формат для корпоратива. Меню на человека от 2000 руб. Бесплатные напитки.')
@section('keywords', 'кулинарный мастер-класс, корпоратив, тимбилдинг')

@section('content')
    <div class="section section-main section-main-pages section-main-corporate">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Корпоратив</h1>
                <p> Кулинарная вечеринка и вкусный ужин за одним столом – идеальный вариант для проведения корпоратива
                    или тимбилдинга. Каждый участник будет при деле и приготовит блюда с самого начала до украшения и
                    подачи. Мы всегда найдем комфортный и интересный для вас формат в зависимости от целей мероприятия.
                    Например, устроим кулинарный баттл! Ваши сотрудники запомнят такой праздник надолго.</p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-pages-benefits">
        <div class="container">
            <h2>Корпоратив в кулинарной студии</h2>
            <div class="pages-benefits-container">

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
                        <img src="/images/icons/team.svg" alt="">
                    </div>
                    <div class="pages-benefits-item-header">
                        Еда, приготовленная совместно
                    </div>
                    <div class="pages-benefits-item-text">
                        Командная работа позволит сплотить коллектив
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
                            Меню #6
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
										<source srcset="/images/menu/main/6/1.webp" type="image/webp">
										<img src="/images/menu/main/6/1.webp" alt="Тёплый салат с жареным Адыгейским сыром, виноградом и печёным перцем">
									</picture>
                                </div>
                                <div class="item">
                                    <picture>
										<source srcset="/images/menu/main/6/2.webp" type="image/webp">
										<img src="/images/menu/main/6/2.webp" alt="Стейк Мачетте с картофелем Дофинуа и соусом Чимимурри">
									</picture>
                                </div>
                                <div class="item">
                                    <picture>
										<source srcset="/images/menu/main/6/3.webp" type="image/webp">
										<img src="/images/menu/main/6/3.webp" alt="Тирамису с кремом на сыре Маскарпоне">
									</picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
								<ul>
									<li>Тёплый салат с жареным Адыгейским сыром, виноградом и печёным перцем</li>
									<li>Стейк Мачете с картофелем Дофинуа и соусом Чимимурри</li>
									<li>Тирамису с кремом на сыре Маскарпоне</li>
								</ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">5400 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48509">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #7
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
										<source srcset="/images/menu/main/7/1.webp" type="image/webp">
										<img src="/images/menu/main/7/1.webp" alt="Тёплый чилийский салат с соусом Путонегро">
									</picture>
                                </div>
                                <div class="item">
                                    <picture>
										<source srcset="/images/menu/main/7/2.webp" type="image/webp">
										<img src="/images/menu/main/7/2.webp" alt="Запечёный палтус на цитрусовой подушке, с бейби картофелем и соусом Холландез">
									</picture>
                                </div>
                                <div class="item">
                                    <picture>
										<source srcset="/images/menu/main/7/3.webp" type="image/webp">
										<img src="/images/menu/main/7/3.webp" alt="Штрудель с лимонным курдом и грушевым мороженым">
									</picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
                                <ul>
                                    <li>Тёплый чилийский салат с соусом Путонегро</li>
                                    <li>Запечённый палтус на цитрусовой подушке, с бейби картофелем и соусом Холландез</li>
                                    <li>Штрудель с лимонным курдом и грушевым мороженым</li>
                                </ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">4500 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48510">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #12
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
									<source srcset="/images/menu/main/12/1.webp" type="image/webp">
									<img src="/images/menu/main/12/1.jpg" alt="Салат с баклажаном и фето сыром">
								</picture>
                                </div>
                                <div class="item">
                                    <picture>
									<source srcset="/images/menu/main/12/2.webp" type="image/webp">
									<img src="/images/menu/main/12/2.jpg" alt="Корейка на кости с печёным картофелем и брусничным соусом">
								</picture>
                                </div>
                                <div class="item">
                                    <picture>
									<source srcset="/images/menu/main/12/3.webp" type="image/webp">
									<img src="/images/menu/main/12/3.jpg" alt="Шоколадные пряники в сахарной пудре">
								</picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
								<ul>
									<li>Салат с баклажаном и сыром фета</li>
									<li>Корейка на кости с печёным картофелем и брусничным соусом</li>
									<li>Шоколадные пряники в сахарной пудре</li>
								</ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">3900 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48515">Выбрать</a>
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
                        <source srcset="/images/gallery/corporate/1-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/1-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/1-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/corporate/1-1110.webp">
                        <source srcset="/images/gallery/corporate/1-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/1-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/1-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/corporate/1-1110.jpg" alt="Корпоратив">
                    </picture>
                </div>
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
                        <source srcset="/images/gallery/corporate/3-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/3-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/3-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/corporate/3-1110.webp">
                        <source srcset="/images/gallery/corporate/3-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/3-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/3-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/corporate/3-1110.jpg" alt="Корпоратив">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/corporate/4-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/4-690.webp" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/4-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/corporate/4-1110.webp">
                        <source srcset="/images/gallery/corporate/4-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/corporate/4-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/corporate/4-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/corporate/4-1110.jpg" alt="Корпоратив">
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
