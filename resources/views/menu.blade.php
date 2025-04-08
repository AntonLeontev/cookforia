@extends('layouts.app')

@section('og_title', "Кулинарная студия 'Cookforia'")
@section('og_description', "Меню кулинарной студии 'Cookforia'. Меню на человека от 2000 руб. Бесплатные напитки.")
@section('og_image', 'https://cookforia.ru/images/menu-back.jpg')
@section('title', 'Меню кулинарной студии "Cookforia"')
@section('description', "Меню кулинарной студии 'Cookforia'. Меню на человека от 2000 руб. Бесплатные напитки.")
@section('keywords', 'кулинарный мастер-класс, день рождения, корпоратив, девичник, мероприятие, праздник')

@section('content')
    <div class="section section-main section-main-menu">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>МЕНЮ</h1>
                <p>Кулинарный мастер-класс в студии «Cookforia» - это необычный формат вечеринки, который
                    превратит любое событие в праздник. Это возможность собрать за одним столом своих близких,
                    друзей и коллег – сначала вы все вместе под руководством шеф-повара готовите изысканные блюда,
                    а потом наслаждаетесь результатом. И все это будет сделано вашими руками!
                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>
    <div class="section section-content">
        <div class="container">
            <h2>Приятные дополнения</h2>
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
									    <source srcset="/images/menu/main/1/1.webp" type="image/webp">
									    <img src="/images/menu/main/1/1.jpg" alt="Салат Цезарь с курицей и перепелиными яйцами">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/1/2.webp" type="image/webp">
									    <img src="/images/menu/main/1/2.jpg" alt="Домашняя паста карбонара">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/1/3.webp" type="image/webp">
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
                                <div class="menu-price">4000 р.</div>
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
									    <source srcset="/images/menu/main/2/1.webp" type="image/webp">
									    <img src="/images/menu/main/2/1.jpg" alt="Салат с тартаром из тунца, свежим манго и сливочным гуакамоле">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/2/2.webp" type="image/webp">
									    <img src="/images/menu/main/2/2.jpg" alt="Стейк из оленины с брусничным соусом и яблочным компоте">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/2/3.webp" type="image/webp">
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
                                <div class="menu-price">5500 р.</div>
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
									    <source srcset="/images/menu/main/3/1.webp" type="image/webp">
									    <img src="/images/menu/main/3/1.jpg" alt="Аджаб сандал">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/3/2.webp" type="image/webp">
									    <img src="/images/menu/main/3/2.jpg" alt="Хачапури по аджарски">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/3/3.webp" type="image/webp">
									    <img src="/images/menu/main/3/3.jpg" alt="Оджахури с говяжьей вырезкой и грибами в соусе наршараб">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/3/4.webp" type="image/webp">
									    <img src="/images/menu/main/3/4.jpg" alt="Гозинак">
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
                                <div class="menu-price">4300 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48506">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #4
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
									    <img src="/images/menu/main/4/1.webp" alt="Салат с авокадо, жареным Бри и соусом песто">
                                </div>
                                <div class="item">
									    <img src="/images/menu/main/4/2.webp" alt="ПариБрест с ореховым пралине">
                                </div>
                                <div class="item">
									    <img src="/images/menu/main/4/3.webp" alt="Каре ягненка в фисташковой корочке с овощным демигласом и сливочным булгуром">
                                </div>
                            </div>
                            <div class="menu-content-composition">
                                <ul>
                                    <li>Салат с&nbsp;авокадо, жареным Бри и&nbsp;соусом песто</li>
                                    <li>ПариБрест с&nbsp;ореховым пралине</li>
                                    <li>Каре ягненка в&nbsp;фисташковой корочке с&nbsp;овощным демигласом и&nbsp;сливочным булгуром</li>
                                </ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">6800 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48507">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #5
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/5/1.webp" type="image/webp">
									    <img src="/images/menu/main/5/1.jpg" alt="Салат с ростбифом, бейби картофелем, битыми огурцами и запечёной паприкой">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/5/2.webp" type="image/webp">
									    <img src="/images/menu/main/5/2.jpg" alt="Стейк из форели с киноа и соусом «Ла икрон»">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/5/3.webp" type="image/webp">
									    <img src="/images/menu/main/5/3.jpg" alt="Меренговый рулет с ягодным соусом и сливочным кремом">
								    </picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
                                <ul>
                                    <li>Салат с ростбифом, бейби картофелем, битыми огурцами и запечённой паприкой</li>
                                    <li>Стейк из форели с киноа и соусом «Ла икрон»</li>
                                    <li>Меренговый рулет с ягодным соусом и сливочным кремом</li>
                                </ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">6300 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48508">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #6
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/6/1.webp" type="image/webp">
									    <img src="/images/menu/main/6/1.jpg" alt="Тёплый салат с жареным Адыгейским сыром, виноградом и печёным перцем">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/6/2.webp" type="image/webp">
									    <img src="/images/menu/main/6/2.jpg" alt="Стейк Мачетте с картофелем Дофинуа и соусом Чимимурри">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/6/3.webp" type="image/webp">
									    <img src="/images/menu/main/6/3.jpg" alt="Терамису с кремом на сыре Маскарпоне">
								    </picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
								<ul>
									<li>Тёплый салат с жареным Адыгейским сыром, виноградом и печёным перцем</li>
									<li>Стейк Мачете с картофелем Дофинуа и соусом Чимичурри</li>
									<li>Тирамису с кремом на сыре Маскарпоне</li>
								</ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">5700 р.</div>
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
									    <img src="/images/menu/main/7/1.jpg" alt="Тёплый чилийский салат с соусом Путонегро">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/7/2.webp" type="image/webp">
									    <img src="/images/menu/main/7/2.jpg" alt="Запечёный палтус на цитрусовой подушке, с бейби картофелем и соусом Холландез">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/7/3.webp" type="image/webp">
									    <img src="/images/menu/main/7/3.jpg" alt="Штрудель с лимонным курдом и грушевым мороженым">
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
                                <div class="menu-price">4800 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48510">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #8
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/8/1.webp" type="image/webp">
									    <img src="/images/menu/main/8/1.jpg" alt="Классический том-ям с морепродуктами">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/8/2.webp" type="image/webp">
									    <img src="/images/menu/main/8/2.jpg" alt="Удон с курицей и овощами">
								    </picture>
                                </div>
                                <div class="item">
                                    <img src="/images/menu/main/8/3.jpg?v2"
                                        alt="Кокосовые блинчики с лимонным сиропом и свежим манго">
                                </div>
                            </div>
                            <div class="menu-content-composition">
                                <ul>
                                    <li>Классический том-ям с морепродуктами</li>
                                    <li>Удон с курицей и овощами</li>
                                    <li>Кокосовые блинчики с лимонным сиропом и свежим манго</li>
                                </ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">4500 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48511">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #9
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/9/1.webp" type="image/webp">
									    <img src="/images/menu/main/9/1.jpg" alt="Бельгийские вафли со сливочным кремом и форелью">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/9/2.webp" type="image/webp">
									    <img src="/images/menu/main/9/2.jpg" alt="Судак по Неаполитански">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/9/3.webp" type="image/webp">
									    <img src="/images/menu/main/9/3.jpg" alt="Эклер со сливочным кремом и шоколадной глазурью">
								    </picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
								<ul>
									<li>Бельгийские вафли со сливочным кремом и форелью</li>
									<li>Судак по Неаполитански</li>
									<li>Эклер со сливочным кремом и шоколадной глазурью</li>
								</ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">4200 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48512">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #10
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/10/1.webp" type="image/webp">
									    <img src="/images/menu/main/10/1.jpg" alt="Тёплый салат с уткой и малиновым соусом">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/10/2.webp" type="image/webp">
									    <img src="/images/menu/main/10/2.jpg" alt="Стейк Рибай и Стриплойн с овощами гриль">
								    </picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
                                <ul>
                                    <li>Теплый салат с уткой и малиновым соусом</li>
                                    <li>Стейк Рибай</li>
                                    <li>Стейк Стриплойн</li>
                                    <li>Подаются с овощами гриль</li>
                                </ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">6400 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48513">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #11
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/11/1.webp" type="image/webp">
									    <img src="/images/menu/main/11/1.jpg" alt="Микс салат с киноа, креветками и кальмаром под соусом Кимчи">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/11/2.webp" type="image/webp">
									    <img src="/images/menu/main/11/2.jpg" alt="Стейк из тунца с фруктово-овощным гарниром">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/11/3.webp" type="image/webp">
									    <img src="/images/menu/main/11/3.jpg" alt="Шоколадный фондан с мороженым">
								    </picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
                                <ul>
                                    <li>Микс салат с киноа, креветками и кальмаром под соусом Кимчи</li>
                                    <li>Стейк из тунца с фруктово-овощным гарниром</li>
                                    <li>Шоколадный фондан с мороженым</li>
                                </ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">5400 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48514">Выбрать</a>
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
									    <img src="/images/menu/main/12/1.webp" alt="Хинкали с сацебели и чесночно - сметанным соусом">
                                </div>
                                <div class="item">
									    <img src="/images/menu/main/12/2.webp" alt="Хачапури по-аджарски с картофелем">
                                </div>
                                <div class="item">
									    <img src="/images/menu/main/12/3.webp" alt="Рулетики с баклажаном c творожно- ореховой начинкой, микс салатом и тёртым пармезаном">
                                </div>
                                <div class="item">
									    <img src="/images/menu/main/12/4.webp" alt="Пахлава с грецким орехом">
                                </div>
                            </div>
                            <div class="menu-content-composition">
								<ul>
									<li>Хинкали с сацебели и чесночно - сметанным соусом</li>
									<li>Хачапури по-аджарски с картофелем</li>
									<li>Рулетики с баклажаном c творожно- ореховой начинкой, микс салатом и тёртым пармезаном</li>
									<li>Пахлава с грецким орехом</li>
								</ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">4500 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48515">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #13
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <img src="/images/menu/main/13/2.webp" alt="Салат Панцанелла с страчателлой">
                                </div>
                                <div class="item">
									    <img src="/images/menu/main/13/3.webp" alt="Креветки и сибас под соусом Биск с овощным рататуем">
                                </div>
                                <div class="item">
                                    <img src="/images/menu/main/13/1.webp" alt="Миндальный пирог с карамельным кремом и клубничным муссом">
                                </div>
                            </div>
                            <div class="menu-content-composition">
                                <ul>
                                    <li>Салат Панцанелла с&nbsp;страчателлой</li>
                                    <li>Креветки и&nbsp;сибас под соусом Биск с&nbsp;овощным рататуем</li>
                                    <li>Миндальный пирог с&nbsp;карамельным кремом и&nbsp;клубничным муссом</li>
                                </ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">6000 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48516">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #14
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/14/1.webp" type="image/webp">
									    <img src="/images/menu/main/14/1.jpg" alt="Ролл калифорния с крабом и сыром">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/14/2.webp" type="image/webp">
									    <img src="/images/menu/main/14/2.jpg" alt="Ролл филадельфия с лососем и сыром">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/14/3.webp" type="image/webp">
									    <img src="/images/menu/main/14/3.jpg" alt="Японский Мисо суп">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/14/4.webp" type="image/webp">
									    <img src="/images/menu/main/14/4.jpg" alt="Фруктовый спринг ролл со сливочным сыром и ягодным соусом">
								    </picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
								<ul>
									<li>Ролл калифорния с крабом и сыром</li>
									<li>Ролл филадельфия с лососем и сыром</li>
									<li>Японский Мисо суп</li>
									<li>Фруктовый спринг ролл со сливочным сыром и ягодным соусом</li>
								</ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">4400 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48518">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #15
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/15/01.webp" type="image/webp">
									    <img src="/images/menu/main/15/01.jpg" alt="Овощной салат с жареными грибами и орешками кешью">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/15/02.webp" type="image/webp">
									    <img src="/images/menu/main/15/02.jpg" alt="Стейк Бавет с соусом из черного чеснока и чернослива">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/15/03.webp" type="image/webp">
									    <img src="/images/menu/main/15/03.jpg" alt="Шоколадный торт">
								    </picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
								<ul>
									<li>Овощной салат с жареными грибами и орешками кешью</li>
									<li>Стейк Бавет с соусом из черного чеснока и чернослива</li>
									<li>Шоколадный торт</li>
								</ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">5400 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48524">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #16
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/16/01.webp" type="image/webp">
									    <img src="/images/menu/main/16/01.jpg" alt="Страчателла с глазированным баклажаном и креветками пиль пиль">
								    </picture>
                                </div>
                                
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/16/03.webp" type="image/webp">
									    <img src="/images/menu/main/16/03.jpg" alt="Фетучини с лососем и сливочно-томатным соусом">
								    </picture>
                                </div>
								<div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/16/02.webp" type="image/webp">
									    <img src="/images/menu/main/16/02.jpg" alt="Тарт татен яблочный с облепиховым соусом">
								    </picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
								<ul>
									<li>Страчателла с глазированным баклажаном и креветками пиль пиль</li>
									<li>Фетучини с лососем и сливочно-томатным соусом</li>
									<li>Тарт татен яблочный с облепиховым соусом</li>
								</ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">5700 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48524">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #17
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/17/02.webp" type="image/webp">
									    <img src="/images/menu/main/17/02.jpg" alt="Жареное авокадо с томатом, киноа и яйцом пашот">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/17/03.webp" type="image/webp">
									    <img src="/images/menu/main/17/03.jpg" alt="Равиоли с креветками и сливочным песто">
								    </picture>
                                </div>
								<div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/17/01.webp" type="image/webp">
									    <img src="/images/menu/main/17/01.jpg" alt="Баннофи Пай с обожжёной меренгой">
								    </picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
								<ul>
									<li>Жареное авокадо с томатом, киноа и яйцом пашот</li>
									<li>Равиоли с креветками и сливочным песто</li>
									<li>Баннофи Пай с обожжёной меренгой</li>
								</ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">5900 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48524">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #18
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
								<div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/18/02.webp" type="image/webp">
									    <img src="/images/menu/main/18/02.jpg" alt="Севиче из лосося с авокадо и вяленым томатом">
								    </picture>
                                </div>

                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/18/01.webp" type="image/webp">
									    <img src="/images/menu/main/18/01.jpg" alt="Кебаб из креветки с овощной сальсой и запеченным картофелем">
								    </picture>
                                </div>
                                
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/18/03.webp" type="image/webp">
									    <img src="/images/menu/main/18/03.jpg" alt="Чизкейк манго маракуйя">
								    </picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
								<ul>
									<li>Севиче из лосося с авокадо и вяленым томатом</li>
									<li>Кебаб из креветки с овощной сальсой и запеченным картофелем</li>
									<li>Чизкейк манго маракуйя</li>
								</ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">6100 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48524">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #19
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
								<div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/19/02.webp" type="image/webp">
									    <img src="/images/menu/main/19/02.jpg" alt="Салат с говядиной, жареными овощами и азиатской заправкой">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/19/01.webp" type="image/webp">
									    <img src="/images/menu/main/19/01.jpg" alt="Говядиа Веллингтон с грибами и шпинатом">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/main/19/03.webp" type="image/webp">
									    <img src="/images/menu/main/19/03.jpg" alt="Шоколадно-фисташковый семифредо с клубничным соусом">
								    </picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
								<ul>
									<li>Салат с говядиной, жареными овощами и азиатской заправкой</li>
									<li>Говядина Веллингтон с грибами и шпинатом</li>
									<li>Шоколадно-фисташковый семифредо с клубничным соусом</li>
								</ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">5900 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48524">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
									    <source srcset="/images/menu/kids/1/1.webp" type="image/webp">
									    <img src="/images/menu/kids/1/1.jpg" alt="Бургер с котлетой из говядины">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/1/2.webp" type="image/webp">
									    <img src="/images/menu/kids/1/2.jpg" alt="Капкейк с кремом из взбитых сливок">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/1/3.webp" type="image/webp">
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
                                <div class="menu-price">2900 р.</div>
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
									    <source srcset="/images/menu/kids/2/1.webp" type="image/webp">
									    <img src="/images/menu/kids/2/1.jpg" alt="Классический Хот-дог">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/2/2.webp" type="image/webp">
									    <img src="/images/menu/kids/2/2.jpg" alt="Тирамису на сливках">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/2/3.webp" type="image/webp">
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
                                <div class="menu-price">2800 р.</div>
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
									    <source srcset="/images/menu/kids/3/1.webp" type="image/webp">
									    <img src="/images/menu/kids/3/1.jpg" alt="Пицца в ассортименте">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/3/2.webp" type="image/webp">
									    <img src="/images/menu/kids/3/2.jpg" alt="Печенье с шоколадной крошкой">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/3/3.webp" type="image/webp">
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
                                <div class="menu-price">2700 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48521">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #4
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/4/1.webp" type="image/webp">
									    <img src="/images/menu/kids/4/1.jpg" alt="Тортилья с курицей и овощами">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/4/2.webp" type="image/webp">
									    <img src="/images/menu/kids/4/2.jpg" alt="Булочка с корицей и сливочным кремом">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/4/3.webp" type="image/webp">
									    <img src="/images/menu/kids/4/3.jpg" alt="Овершейк">
								    </picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
                                <ul>
                                    <li>Тортилья с курицей и овощами</li>
                                    <li>Булочка с корицей и сливочным кремом</li>
                                    <li>Овершейк</li>
                                </ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">2600 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48521">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Меню #5
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/5/1.webp" type="image/webp">
									    <img src="/images/menu/kids/5/1.jpg" alt="Паста Карбонара">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/5/2.webp" type="image/webp">
									    <img src="/images/menu/kids/5/2.jpg" alt="Панна-котта с клубничным соусом">
								    </picture>
                                </div>
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/5/3.webp" type="image/webp">
									    <img src="/images/menu/kids/5/3.jpg" alt="Мохито">
								    </picture>
                                </div>
                            </div>
                            <div class="menu-content-composition">
                                <ul>
                                    <li>Паста Карбонара</li>
                                    <li>Панна-котта с клубничным соусом</li>
                                    <li>Мохито</li>
                                </ul>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">3000 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48521">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="menu-block-header">
                            Дополнительно
                        </div>
                        <div class="menu-content-block">
                            <div class="menu-content-images owl-carousel owl-theme">
                                <div class="item">
                                    <picture>
									    <source srcset="/images/menu/kids/6/01.webp" type="image/webp">
									    <img src="/images/menu/kids/6/01.jpg" alt="Шоколадный Фонтан">
								    </picture>
                                </div>
                            </div>
                            <div class="menu-content-composition --middle">
                                <p>Шоколадный Фонтан</p>
                            </div>
                            <div class="menu-content-footer">
                                <div class="menu-price">6000 р.</div>
                                <div class="menu-button">
                                    <a href="#sign-in-form" class="menu-select-btn" data-form-val="48524">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.menu-block -->

                </div>
            </div>
        </div>
    </div>

    @component('components.additionally')
    @endcomponent

    <div id="sign-in-form" class="section section-sig-in" name="sign-in-form">
        @component('components.sign_in_form')
        @endcomponent
    </div>
@endsection
