@extends('layouts.app')

@section('og_title', "Кулинарная студия 'Cookforia'")
@section('og_description', 'Кулинарная студия в Санкт-Петербурге. Меню на человека от 2000 руб. Бесплатные напитки.')
@section('og_image', 'https://cookforia.ru/images/menu-back.jpg')
@section('title', 'Кулинарная студия "Cookforia"')
@section('description', 'Кулинарная студия в Санкт-Петербурге. Меню на человека от 2000 руб. Бесплатные напитки.')
@section('keywords', 'кулинарный мастер-класс, день рождения, корпоратив, девичник, мероприятие, праздник')

@section('content')
    <div class="section section-main section-main-home">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Кулинарная студия Cookforia</h1>
                <p>
                    Это место, где вы полюбите готовить и отлично проведете время с семьей или друзьями. За 3 часа вы
                    приготовите три блюда под руководством шеф-повара, а затем поужинаете блюдами собственного
                    приготовления за общим столом. В процесс приготовления будет вовлечен абсолютно каждый участник.
                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
        <div class="container">
            <div class="main-benefits">
                {{--                <div class="benefit-item">--}}
                {{--                    <img src="/images/icons/percent.svg" alt="">--}}
                {{--                    <p>Скидка 10% с ПН по ЧТ</p>--}}
                {{--                </div>--}}
                <div class="benefit-item">
                    <img src="/images/icons/3-dish.svg" alt="">
                    <p>3 блюда на гостя
                        и напитки</p>
                </div>
                <div class="benefit-item">
                    <img src="/images/icons/menu.svg" alt="">
                    <p>Разнообразное
                        меню</p>
                </div>
                <div class="benefit-item">
                    <img src="/images/icons/price.svg" alt="">
                    <p>Доступные
                        цены</p>
                </div>
                <div class="benefit-item">
                    <img height="65px" src="/images/icons/bottle.png" alt="bottle" style="width: auto;">
                    <p>Винная карта (Пробковый&nbsp;сбор)</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-master">
        <div class="container">
            <div class="section-master-content">
                <div class="master-content-left">
                    <h2>ПРОСТОРНЫЕ СТУДИИ</h2>
                    <p>Формат кулинарного мастер-класса подходит для любого мероприятия: день рождения, детский
                        праздник, девичник, корпоратив. На выбор гостей много вариантов меню. Просторная студия
                        оформлена в стиле лофт и оборудована всем необходимым. Места хватит даже для большой
                        компании! </p>
                </div>
                <div class="master-content-right">
                    <div class="master-links-block">
                        <a class="master-link master-link-1" href="/girls">
                            <picture>
                                <source srcset="/images/master-1.webp" type="image/webp">
                                <img src="/images/master-1.png" alt="">
                            </picture>
                            <div class="master-link-title">Девичники</div>
                        </a>
                        <a class="master-link master-link-2" href="/corporate">
                            <picture>
                                <source srcset="/images/master-2.webp" type="image/webp">
                                <img src="/images/master-2.png" alt="">
                            </picture>
                            <div class="master-link-title">Корпоративы</div>
                        </a>
                        <a class="master-link master-link-3" href="/kids">
                            <picture>
                                <source srcset="/images/master-3.webp" type="image/webp">
                                <img src="/images/master-3.png" alt="">
                            </picture>
                            <div class="master-link-title">Детские праздники</div>
                        </a>
                        <a class="master-link master-link-4" href="/birthday">
                            <picture>
                                <source srcset="/images/master-4.webp" type="image/webp">
                                <img src="/images/master-4.png" alt="">
                            </picture>
                            <div class="master-link-title">Дни рождения</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-menu">
        <div class="container">
            <h2>Основное меню</h2>
            <h3>В каждом меню 3 блюда + бесплатные напитки</h3>
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
                                    <img src="/images/menu/main/1/1.jpg"
                                         alt="Салат Цезарь с курицей и перепелиными яйцами">
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
                                    <img src="/images/menu/main/2/1.jpg"
                                         alt="Салат с тартаром из тунца, свежим манго и сливочным гуакамоле">
                                </picture>
                            </div>
                            <div class="item">
                                <picture>
                                    <source srcset="/images/menu/main/2/2.webp" type="image/webp">
                                    <img src="/images/menu/main/2/2.jpg"
                                         alt="Стейк из оленины с брусничным соусом и яблочным компоте">
                                </picture>
                            </div>
                            <div class="item">
                                <picture>
                                    <source srcset="/images/menu/main/2/3.webp" type="image/webp">
                                    <img src="/images/menu/main/2/3.jpg"
                                         alt="Нежнейший многослойный десерт — трайфл">
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
                                    <img src="/images/menu/main/3/1.webp" alt="Аджаб сандал">
                                </picture>
                            </div>
                            <div class="item">
                                <picture>
                                    <source srcset="/images/menu/main/3/2.webp" type="image/webp">
                                    <img src="/images/menu/main/3/2.webp"
                                         alt="Хачапури по аджарски">
                                </picture>
                            </div>
                            <div class="item">
                                <picture>
                                    <source srcset="/images/menu/main/3/3.webp" type="image/webp">
                                    <img src="/images/menu/main/3/3.webp"
                                         alt="Оджахури с говяжьей вырезкой и грибами в соусе наршараб">
                                </picture>
                            </div>
                            <div class="item">
                                <picture>
                                    <source srcset="/images/menu/main/3/4.webp" type="image/webp">
                                    <img src="/images/menu/main/3/4.webp" alt="Гозинак">
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
            </div>
            <div class="menu-buttons">
                <a class="button button-bordered" href="#">Записаться</a>
                <a class="button button-solid" href="/menu">Полное меню</a>
            </div>
        </div>
    </div>
    <div class="section section-additions">
        <div class="container">
            <h2>Приятные дополнения</h2>
            <div class="additions-container">
                <div class="additions-block">
                    <img src="/images/icons/clock.svg" alt="">
                    <div>Возможность
                        продления мероприятия
                    </div>
                </div>
                <div class="additions-block">
                    <img src="/images/icons/drinks.svg" alt="">
                    <div>Безлимитные безалкогольные
                        напитки
                    </div>
                </div>
                <div class="additions-block">
                    <img src="/images/icons/games.svg" alt="">
                    <div>Зона отдыха с кикером и playstation</div>
                </div>
                <div class="additions-block">
                    <img src="/images/icons/game-zone.svg" alt="">
                    <div>Игровая зона для детей</div>
                </div>
            </div>
            <p class="additions-text text-center">
                К вашим услугам: стильное и комфортное пространство для проведения мероприятия (кухонный остров со всем
                необходимым оборудованием и инвентарем), профессиональная команда (шеф-повар, ведущий, официанты,
                бармены), безлимитные безалкогольные напитки, возможность организации фуршета, разнообразное меню, зоны
                отдыха для взрослых и детей, азотное
                шоу.
            </p>
        </div>
    </div>
    <div class="section section-videos">
        <div class="container container-my">
            <h2>Наши кулинарные студии</h2>
            <div class="videos-container row">
                <style>
                    .image-stub-wrap {
                        position: relative;
                        width: 100% !important;
                        height: 392px !important;
                        overflow: hidden;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }

                    @media screen and (max-width: 500px) {
                        .image-stub-wrap {
                            height: 310px !important;
                        }
                    }

                    .image-stub {
                        width: 100% !important;
                        height: auto !important;
                    }

                    .image-stub__play-button {
                        position: absolute;
                        background: transparent;
                        left: 50%;
                        top: 50%;
                        width: 68px;
                        height: 48px;
                        margin-left: -34px;
                        margin-top: -24px;
                        padding: 0;
                        border: none;
                    }
                </style>
                <div class="videos-block col-lg-6">
                    <div class="image-stub-wrap">
                        <img class="image-stub"
                             src="https://i.mycdn.me/getVideoPreview?id=7772885748240&idx=1&type=39&tkn=aP_ikH3YK6Wb3QG5_zgxxrJhiZo&fn=vid_x"
                             alt="Санкт-Петербург, ул. Дыбенко, 8к1">
                        <button class="image-stub__play-button">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" x="0" y="0"
                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                 class=""><g>
                                    <path d="M187.368 146.928V355.8l195.624-104.432z" style="" fill="#ffffff"
                                          data-original="#ffffff" class="ytp-large-play-button-bg"></path>
                                    <path
                                        d="M256 .376C114.616.376 0 114.824 0 256s114.616 255.624 256 255.624S512 397.176 512 256 397.384.376 256 .376zm-71.504 146.552 195.624 104.44L184.496 355.8V146.928z"
                                        style="" fill="#FFB914" data-original="#FFB914" class=""></path>
                                </g></svg>
                        </button>
                    </div>
                    <iframe
                        hidden
                        data-src="https://vkvideo.ru/video_ext.php?oid=-191467492&id=456241383&hd=2&autoplay=1"
                        frameborder="0"
                        class="videos-block-iframe"
                        allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;"
                        allowfullscreen
                    ></iframe>
                    <div class="videos-bottom-text mb-4">
                        <img src="/images/videos-geo.png" alt="">
                        <div>Санкт-Петербург, ул. Дыбенко, 8к1</div>
                    </div>
                    <div class="widget-review">
                        <div style="width:100%;height:800px;overflow:hidden;position:relative;">
                            <iframe
                                style="width:100%;height:100%;border:1px solid #e6e6e6;border-radius:8px;box-sizing:border-box"
                                src="https://yandex.ru/maps-reviews-widget/29115594921?comments"></iframe>
                            <a href="https://yandex.by/maps/org/cookforia/29115594921/" target="_blank"
                               style="box-sizing:border-box;text-decoration:none;color:#b3b3b3;font-size:10px;font-family:YS Text,sans-serif;padding:0 20px;position:absolute;bottom:8px;width:100%;text-align:center;left:0;overflow:hidden;text-overflow:ellipsis;display:block;max-height:14px;white-space:nowrap;padding:0 16px;box-sizing:border-box">Cookforia
                                на карте Санкт‑Петербурга — Яндекс Карты</a></div>
                    </div>
                </div>
                <div class="videos-block  col-lg-6">
                    <div class="image-stub-wrap">
                        <img class="image-stub"
                             src="https://i.mycdn.me/getVideoPreview?id=7757304760849&idx=4&type=39&tkn=BJudjkMFlp-PFQYYBnbeCl5WnVc&fn=vid_x&quot"
                             alt="Санкт-Петербург, ул. Московский проспект 183-185">
                        <button class="image-stub__play-button">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" x="0" y="0"
                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                 class=""><g>
                                    <path d="M187.368 146.928V355.8l195.624-104.432z" style="" fill="#ffffff"
                                          data-original="#ffffff" class="ytp-large-play-button-bg"></path>
                                    <path
                                        d="M256 .376C114.616.376 0 114.824 0 256s114.616 255.624 256 255.624S512 397.176 512 256 397.384.376 256 .376zm-71.504 146.552 195.624 104.44L184.496 355.8V146.928z"
                                        style="" fill="#FFB914" data-original="#FFB914" class=""></path>
                                </g></svg>
                        </button>
                    </div>
                    <iframe
                        hidden
                        data-src="https://vk.com/video_ext.php?oid=-191467492&id=456241384&hd=2&autoplay=1"
                        frameborder="0"
                        class="videos-block-iframe"
                        allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;"
                        allowfullscreen
                    ></iframe>
                    <div class="videos-bottom-text mb-4">
                        <img src="/images/videos-geo.png" alt="">
                        <div>Санкт-Петербург, ул. Московский проспект 183-185</div>
                    </div>
                    <div class="widget-review">
                        <div style="width:100%;height:800px;overflow:hidden;position:relative;">
                            <iframe
                                style="width:100%;height:100%;border:1px solid #e6e6e6;border-radius:8px;box-sizing:border-box"
                                src="https://yandex.ru/maps-reviews-widget/74180715342?comments"></iframe>
                            <a href="https://yandex.by/maps/org/cookforia/74180715342/" target="_blank"
                               style="box-sizing:border-box;text-decoration:none;color:#b3b3b3;font-size:10px;font-family:YS Text,sans-serif;padding:0 20px;position:absolute;bottom:8px;width:100%;text-align:center;left:0;overflow:hidden;text-overflow:ellipsis;display:block;max-height:14px;white-space:nowrap;padding:0 16px;box-sizing:border-box">Cookforia
                                на карте Санкт‑Петербурга — Яндекс Карты</a></div>
                    </div>
                </div>
                <div class="videos-block mt-5  col-lg-6">
                    <div class="d-flex justify-content-between text-block align-items-center flex-wrap">
                        <div class="videos-bottom-text">
                            <img src="/images/videos-geo.png" alt="">
                            <div>Санкт-Петербург, ул. Ильюшина</div>
                        </div>
                    <strong>Открыта новая студия!</strong>
                    </div>
                </div>
                <div class="col-12">
                    <div id="sync1" class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="/images/gallery/home/new-studio/orig/01.webp" alt="Image" class="ibg">
                        </div>
                        <div class="item">
                            <img src="/images/gallery/home/new-studio/orig/02.webp" alt="Image" class="ibg">
                        </div>
                        <div class="item">
                            <img src="/images/gallery/home/new-studio/orig/03.webp" alt="Image" class="ibg">
                        </div>
                        <div class="item">
                            <img src="/images/gallery/home/new-studio/orig/04.webp" alt="Image" class="ibg">
                        </div>
                        <div class="item">
                            <img src="/images/gallery/home/new-studio/orig/05.webp" alt="Image" class="ibg">
                        </div>
                    </div>

                    <div id="sync2" class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="/images/gallery/home/new-studio/thumb/01.webp" alt="Image" class="ibg">
                        </div>
                        <div class="item">
                            <img src="/images/gallery/home/new-studio/thumb/02.webp" alt="Image" class="ibg">
                        </div>
                        <div class="item">
                            <img src="/images/gallery/home/new-studio/thumb/03.webp" alt="Image" class="ibg">
                        </div>
                        <div class="item">
                            <img src="/images/gallery/home/new-studio/thumb/04.webp" alt="Image" class="ibg">
                        </div>
                        <div class="item">
                            <img src="/images/gallery/home/new-studio/thumb/05.webp" alt="Image" class="ibg">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @component('components.contacts')
    @endcomponent
    <div class="section section-sig-in" name="sign-in-form" id="sign-in-form">
        @component('components.sign_in_form')
        @endcomponent
    </div>
@endsection
