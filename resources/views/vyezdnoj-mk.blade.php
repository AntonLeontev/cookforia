@extends('layouts.app')

@section('og_title', "Выездные кулинарные мастер-классы")
@section('og_description', 'Кулинарная студия в Санкт-Петербурге. Меню на человека от 2000 руб. Бесплатные напитки.')
@section('og_image', 'https://cookforia.ru/images/menu-back.jpg')
@section('title', 'Подарочные сертификаты В КУЛИНАРНУЮ СТУДИЮ Cookforia')
@section('description', 'Выездной мастер-класс - это не просто  развлечение, а  отличный  способ  открыть для себя  новые вкусы и секреты кулинарии,  а  также  интересный  формат  для  корпоративных  мероприятий, дружеских  вечеров или  семейных  праздников.')
@section('keywords', 'кулинарный мастер-класс, день рождения, корпоратив, девичник, мероприятие, праздник')

@section('content')
    <div class="section section-main section-main-viezdnoy">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Выездные кулинарные мастер-классы</h1>
                <p>
                    Выездной мастер-класс - это не просто развлечение, а отличный способ открыть для себя новые вкусы и
                    секреты кулинарии, а&nbsp;также интересный формат для корпоративных мероприятий, дружеских вечеров
                    или семейных праздников.
                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-padding">
        <div class="container">
            <div class="certificate-about d-flex align-items-center flex-md-nowrap flex-wrap">
                <div class="certificate-about__text">
                    <div class="certificate-about__title">
                        <strong>Хотите сделать ваш праздник незабываемым?</strong>
                    </div>


                    <p>
                        Кулинарная студия <strong>Cookforia</strong> предлагает выездные мастер-классы, которые
                        превратят любое мероприятие -
                        от дня рождения до корпоратива - <strong>в увлекательное кулинарное приключение!</strong>
                    </p>

                    <p>
                        Мы привезем все необходимое <strong>прямо к вам</strong>: оборудование, ингредиенты и, конечно
                        же, <strong>опытных
                            шеф-поваров</strong>, которые проведут мастер-класс по любой кухне мира!
                    </p>

                    <p>
                        Хотите научиться готовить вкусные блюда Средиземноморья, погрузиться в ароматы Скандинавии,
                        овладеть
                        секретами кавказской кухни, попробовать экзотические блюда Паназии или Центральной Америки?
                    </p>

                    <p><strong> Мы сделаем это реальностью!</strong></p>

                    <p>Вам не нужно заботиться об организации, все, что вам потребуется - это столы, стулья и доступ к
                        электричеству.</p>

                    <p><strong>Cookforia - идеальное</strong> дополнение для дня рождения, тимбилдинга, девичника или
                        свадьбы.</p>
                </div>
                <div class="certificate-about__img _viezdnoy">
                    <div class="gallery-viezdnoy">
                        <div class="gallery-viezdnoy-item gallery-viezdnoy-item_01">
                            <picture>
                                <source srcset="/images/viezdnoy-mk/01.webp" type="image/webp">
                                <img src="images/viezdnoy-mk/01.jpg" alt="Выездные кулинарные мастер-классы"
                                     class="gallery-viezdnoy-img ibg">
                            </picture>
                        </div>
                        <div class="gallery-viezdnoy-item gallery-viezdnoy-item_02">
                            <picture>
                                <source srcset="/images/viezdnoy-mk/02.webp" type="image/webp">
                                <img src="images/viezdnoy-mk/02.jpg" alt="Выездные кулинарные мастер-классы"
                                     class="gallery-viezdnoy-img ibg">
                            </picture>
                        </div>
                        <div class="gallery-viezdnoy-item gallery-viezdnoy-item_03">
                            <picture>
                                <source srcset="/images/viezdnoy-mk/03.webp" type="image/webp">
                                <img src="images/viezdnoy-mk/03.jpg" alt="Выездные кулинарные мастер-классы"
                                     class="gallery-viezdnoy-img ibg">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-bottom">
        <div class="container">
            <div class="how d-md-flex justify-content-between flex-wrap">
                <div class="how-item text-center d-flex align-items-center flex-column">
                    <img src="images/icons/checked.svg" alt="Календарь - иконка" class="how-item__icon">
                    <div class="how-item__title">
                        Неповторимый опыт <br> на Вашей территории
                    </div>
                    <div class="how-item__text">
                        Ваши гости или сотрудники не только наслаждаются вкусной едой, но и учатся её создавать,
                        приобретая новые кулинарные навыки.
                    </div>
                </div>
                <div class="how-item text-center d-flex align-items-center flex-column">
                    <img src="images/icons/arrows.svg" alt="Календарь - иконка" class="how-item__icon">
                    <div class="how-item__title">
                        Полная <br> мобильность
                    </div>
                    <div class="how-item__text">
                        Мы привезем все необходимое оборудование и ингредиенты, вам нужно только предоставить место и
                        доступ к электричеству.
                    </div>
                </div>
                <div class="how-item text-center d-flex align-items-center flex-column">
                    <img src="images/icons/firework.svg" alt="Календарь - иконка" class="how-item__icon">
                    <div class="how-item__title">
                        Обучение <br> и развлечение на месте
                    </div>
                    <div class="how-item__text">
                        Откройте для себя уникальное кулинарное мероприятие прямо на вашем празднике или корпоративе. Мы
                        принесём всю магию кулинарии к вам!
                    </div>
                </div>
                <div class="how-item text-center d-flex align-items-center flex-column">
                    <img src="images/icons/chef-hat.svg" alt="Календарь - иконка" class="how-item__icon">
                    <div class="how-item__title">
                        Кухни мира у Вас <br> дома
                    </div>
                    <div class="how-item__text">
                        Опытные шеф-повара представят вам блюда средиземноморской, скандинавской, кавказской и других
                        кухонь мира.
                    </div>
                </div>
                <div class="how-item text-center d-flex align-items-center flex-column">
                    <img src="images/icons/file.svg" alt="Календарь - иконка" class="how-item__icon">
                    <div class="how-item__title">
                        Без лишних <br> забот
                    </div>
                    <div class="how-item__text">
                        Мы берем на себя все организационные вопросы, предоставляя вам возможность расслабиться и
                        наслаждаться мероприятием.
                    </div>
                </div>
                <div class="how-item text-center d-flex align-items-center flex-column">
                    <img src="images/icons/calendar_viezd.svg" alt="Календарь - иконка" class="how-item__icon">
                    <div class="how-item__title">
                        Идеальное дополнение <br> к любому событию
                    </div>
                    <div class="how-item__text">
                        Будь то день рождения, тимбилдинг, девичник или свадьба, наши мастер-классы сделают ваше событие
                        особенным.
                    </div>
                </div>
            </div>
            <div class="text-center mt-4 mt-md-5">
                <a class="button button-solid" href="#sign-in-form">отправить заявку!</a>
            </div>
        </div>
    </div>

    <div class="section section-bottom">
        <div class="container">
            <h2>Что нужно знать о выездном мастер-классе?</h2>
            <div class="what-know mt-4 mt-md-5">
                <p>
                    С нашим менеджером вы согласуете все необходимые детали. Благодаря авторским программам мы предложим
                    оригинальные идеи под ваше мероприятие. Вам останется:
                </p>
                <ul>
                    <li>уточнить базовые детали;</li>
                    <li>выбрать основное направление еды;</li>
                    <li>обговорить вопрос присутствия детей (для них может быть специальная программа);</li>
                    <li>оплатить наши услуги.</li>
                </ul>
                <p>В назначенный день и в договорное время мы приезжаем на объект, устанавливаем технику и
                    подготавливаем все нужное. В течение мастер-класса наши шеф-повара максимально развлекают и обучают
                    ваших гостей, накормив их вкусными блюдами.</p>
            </div>
            <div class="what-know-content mt-4 mt-md-5 d-flex">
                <div class="what-know-content__img">
                    <picture>
                        <source srcset="/images/what-know-img.webp" type="image/webp">
                        <img src="/images/what-know-img.jpg" alt="Сценарий праздника"
                             class="ibg">
                    </picture>
                </div>
                <div class="what-know-content__info info-know">
                    <div class="info-know__title">
                        Сценарий праздника
                    </div>
                    <div class="info-know__inner">
                        <div class="info-know__item d-flex flex-wrap flex-sm-nowrap">
                            <div class="info-know__detail d-flex flex-column">
                                <strong>30 мин</strong>
                                <div class="info-know__line"></div>
                            </div>
                            <div class="info-know__content d-flex flex-column">
                                <strong>Встреча гостей</strong>
                                <small>Лёгкий фуршет и напитки, общение в приятной обстановке</small>
                            </div>
                        </div>
                        <div class="info-know__item d-flex flex-wrap flex-sm-nowrap">
                            <div class="info-know__detail d-flex flex-column">
                                <strong>90 мин</strong>
                                <div class="info-know__line"></div>
                            </div>
                            <div class="info-know__content d-flex flex-column">
                                <strong>Кулинарный мастер-класс</strong>
                                <small>Знакомство с шеф-поваром мероприятия, кулинарный мастер-класс по&nbsp;приготовлению
                                    3
                                    блюд</small>
                            </div>
                        </div>
                        <div class="info-know__item d-flex flex-wrap flex-sm-nowrap">
                            <div class="info-know__detail d-flex flex-column">
                                <strong>30 мин</strong>
                                <div class="info-know__line"></div>
                            </div>
                            <div class="info-know__content d-flex flex-column">
                                <strong>Дегустация приготовленных блюд</strong>
                            </div>
                        </div>
                        <div class="info-know__item d-flex flex-wrap flex-sm-nowrap">
                            <div class="info-know__detail d-flex flex-column">
                                <strong>90 мин</strong>
                                <div class="info-know__line"></div>
                            </div>
                            <div class="info-know__content d-flex flex-column">
                                <strong>Общение или развлекательные шоу</strong>
                                <small>По желанию - шоу программы</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-schedule-gallery">
        <div class="container">
            <h2>что входит в стоимость <br> выездного мастер-класса</h2>
            <div class="my-md-5 my-4 about-benefits d-flex flex-wrap">
                <div class="about-benefits-item">
                    <div class="about-benefits-item__top d-flex align-items-center">
                        <img src="/images/icons/check.svg" alt="Icon">
                        <small>Приготовление трёх блюд ресторанного уровня на&nbsp;выбор</small>
                    </div>
                </div>
                <div class="about-benefits-item">
                    <div class="about-benefits-item__top d-flex align-items-center">
                        <img src="/images/icons/check.svg" alt="Icon">
                        <small> Работа профессионального шеф-повара и&nbsp;су-шефа</small>
                    </div>
                </div>
                <div class="about-benefits-item">
                    <div class="about-benefits-item__top d-flex align-items-center">
                        <img src="/images/icons/check.svg" alt="Icon">
                        <small>Качественные ингредиенты по Вашему меню и&nbsp;профессиональное оборудование</small>
                    </div>
                </div>
                <div class="about-benefits-item">
                    <div class="about-benefits-item__top d-flex align-items-center">
                        <img src="/images/icons/check.svg" alt="Icon">
                        <small>Организация мероприятия профессиональным ивент-менеджером</small>
                    </div>
                </div>
                <div class="about-benefits-item">
                    <div class="about-benefits-item__top d-flex align-items-center">
                        <img src="/images/icons/check.svg" alt="Icon">
                        <small> Закупка и доставка продуктов</small>
                    </div>
                </div>
                <div class="about-benefits-item">
                    <div class="about-benefits-item__top d-flex align-items-center">
                        <img src="/images/icons/check.svg" alt="Icon">
                        <small>Красивая сервировка столов</small>
                    </div>
                </div>
                <div class="about-benefits-item">
                    <div class="about-benefits-item__top d-flex align-items-center">
                        <img src="/images/icons/check.svg" alt="Icon">
                        <small>Уборка после мероприятия</small>
                    </div>
                </div>
                <div class="about-benefits-item">
                    <div class="about-benefits-item__top d-flex align-items-center">
                        <img src="/images/icons/check.svg" alt="Icon">
                        <small>Рецепты блюд и дипломы</small>
                    </div>
                </div>
            </div>
            <div class="schedule-gallery-container owl-carousel owl-theme">
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/about/01-1100.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/about/01-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/about/01-1100.webp">
                        <source srcset="/images/gallery/about/01-1100.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/about/01-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/corporate/01-1100.jpg" alt="Интерьеры студий">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/about/02-1100.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/about/02-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/about/02-1100.webp">
                        <source srcset="/images/gallery/about/02-1100.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/about/02-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/corporate/02-1100.jpg" alt="Интерьеры студий">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/about/03-1100.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/about/03-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/about/03-1100.webp">
                        <source srcset="/images/gallery/about/03-1100.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/about/03-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/corporate/03-1100.jpg" alt="Интерьеры студий">
                    </picture>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-padding _slider-shadow">
        <div class="container">
            <h2>Стоимость выездного мероприятия</h2>
            <div class="price-vyezdmk mt-md-5 mt-4 owl-carousel owl-theme">
                <div class="price-vyezdmk-item d-flex flex-column text-center">
                    <div class="price-vyezdmk-item__img">
                        <picture>
                            <source srcset="/images/price-vyezd-mk/01.webp" type="image/webp">
                            <img src="/images/price-vyezd-mk/01.jpg" alt="Фуршет от 950 руб.">
                        </picture>
                    </div>
                    <div class="price-vyezdmk-item__body">
                        <div class="price-vyezdmk-item__title">
                            Фуршет от&nbsp;950 руб.
                        </div>
                    </div>
                    <div class="price-vyezdmk-item__action">
                        <a class="button button-solid" href="/menu">посмотреть меню</a>
                    </div>
                </div>
                <div class="price-vyezdmk-item d-flex flex-column text-center">
                    <div class="price-vyezdmk-item__img">
                        <picture>
                            <source srcset="/images/price-vyezd-mk/02.webp" type="image/webp">
                            <img src="/images/price-vyezd-mk/02.jpg" alt="Меню “выездные праздники” - от 4400 руб.">
                        </picture>
                    </div>
                    <div class="price-vyezdmk-item__body">
                        <div class="price-vyezdmk-item__title">
                            Меню “выездные праздники” - от&nbsp;4400 руб.
                        </div>
                    </div>
                    <div class="price-vyezdmk-item__action">
                        <a class="button button-solid" href="/menu">посмотреть меню</a>
                    </div>
                </div>
                <div class="price-vyezdmk-item d-flex flex-column text-center">
                    <div class="price-vyezdmk-item__img">
                        <picture>
                            <source srcset="/images/price-vyezd-mk/03.webp" type="image/webp">
                            <img src="/images/price-vyezd-mk/03.jpg" alt="Меню “праздник у вас дома” - от 4900 руб.">
                        </picture>
                    </div>
                    <div class="price-vyezdmk-item__body">
                        <div class="price-vyezdmk-item__title">
                            Меню “праздник у вас дома” - от&nbsp;4900 руб.
                        </div>
                    </div>
                    <div class="price-vyezdmk-item__action">
                        <a class="button button-solid" href="/menu">посмотреть меню</a>
                    </div>
                </div>
            </div>
            <div class="text mt-3">
                <strong>Стоимость выездного кулинарного мастер-класса равна</strong>: цена меню*количество гостей,
                дополнительно
                рассчитываются технические расходы. Стоимость уже включает кулинарный мастер-класс под руководством
                шеф-повара, необходимое оборудование и инвентарь для мастер-класса, приготовление блюд на выбор. По
                вашему желанию мы пригласим фотографа, проведём викторину с подарками и покажем азотное шоу.
            </div>
        </div>
    </div>

    <div class="section section-bottom _slider-shadow">
        <div class="container">
            <h2 class="mt-2">Варианты выездных мероприятий</h2>
            <div data-showmore="items" data-showmore-media="767,min" class="block mt-md-5 mt-4">
                <ul data-showmore-content="1"
                    class="block__content additional-slider variants-parties _about-team">
                    <li>
                        <div class="item-variants">
                            <div class="item-variants__img">
                                <picture>
                                    <source srcset="/images/variants-vyezd-mk/01.webp" type="image/webp">
                                    <img class="ibg" src="/images/variants-vyezd-mk/01.jpg" alt="Гриль вечеринка">
                                </picture>
                            </div>
                            <div class="item-variants__body">
                                <div class="item-variants__title">
                                    Гриль вечеринка
                                </div>
                            </div>
                            <div class="price-vyezdmk-item__action">
                                <a class="button button-solid" href="#sign-in-form">отправить заявку</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-variants">
                            <div class="item-variants__img">
                                <picture>
                                    <source srcset="/images/variants-vyezd-mk/02.webp" type="image/webp">
                                    <img class="ibg" src="/images/variants-vyezd-mk/02.jpg" alt="Кулинарный батл">
                                </picture>
                            </div>
                            <div class="item-variants__body">
                                <div class="item-variants__title">
                                    Кулинарный батл
                                </div>
                            </div>
                            <div class="price-vyezdmk-item__action">
                                <a class="button button-solid" href="#sign-in-form">отправить заявку</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-variants">
                            <div class="item-variants__img">
                                <picture>
                                    <source srcset="/images/variants-vyezd-mk/03.webp" type="image/webp">
                                    <img class="ibg" src="/images/variants-vyezd-mk/03.jpg" alt="Шеф у вас дома">
                                </picture>
                            </div>
                            <div class="item-variants__body">
                                <div class="item-variants__title">
                                    Шеф у вас дома
                                </div>
                            </div>
                            <div class="price-vyezdmk-item__action">
                                <a class="button button-solid" href="#sign-in-form">отправить заявку</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-variants">
                            <div class="item-variants__img">
                                <picture>
                                    <source srcset="/images/variants-vyezd-mk/04.webp" type="image/webp">
                                    <img class="ibg" src="/images/variants-vyezd-mk/04.jpg" alt="праздник на природе">
                                </picture>
                            </div>
                            <div class="item-variants__body">
                                <div class="item-variants__title">
                                    праздник на природе
                                </div>
                            </div>
                            <div class="price-vyezdmk-item__action">
                                <a class="button button-solid" href="#sign-in-form">отправить заявку</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-variants">
                            <div class="item-variants__img">
                                <picture>
                                    <source srcset="/images/variants-vyezd-mk/01.webp" type="image/webp">
                                    <img class="ibg" src="/images/variants-vyezd-mk/01.jpg" alt="Image">
                                </picture>
                            </div>
                            <div class="item-variants__body">
                                <div class="item-variants__title">
                                    Гриль вечеринка
                                </div>
                            </div>
                            <div class="price-vyezdmk-item__action">
                                <a class="button button-solid" href="#sign-in-form">отправить заявку</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <button hidden data-showmore-button type="button" class="block__more form-btn">
                    <span>посмотреть всех</span>
                    <span>Скрыть</span>
                </button>
            </div>
        </div>
    </div>

    <div class="section section-additionally section_grey _slider-shadow">
        <div class="container">
            <h2 class="mt-2">Дополнительные услуги</h2>
            <div class="additionally mt-4 mt-md-5">
                <div class="additionally-item align-items-center d-flex justify-content-center ">
                    <div class="additionally-item__inner d-flex justify-content-center align-items-center flex-column">
                        <img src="images/icons/additionally/01.png" alt="icon" class="additionally-item__icon">
                        <strong>банкет</strong>
                        <small>от 3900 руб. за 1 гостя</small>
                    </div>
                </div>
                <div class="additionally-item align-items-center d-flex justify-content-center ">

                    <div class="additionally-item__inner d-flex justify-content-center align-items-center flex-column">
                        <img src="images/icons/additionally/02.png" alt="icon" class="additionally-item__icon">
                        <strong>фуршет</strong>
                        <small>от 1000 руб. за 1 гостя</small>
                    </div>
                </div>
                <div class="additionally-item align-items-center d-flex justify-content-center ">

                    <div class="additionally-item__inner d-flex justify-content-center align-items-center flex-column">
                        <img src="images/icons/additionally/03.png" alt="icon" class="additionally-item__icon">
                        <strong>официант</strong>
                        <small>5000 руб. за 3 часа</small>
                    </div>
                </div>
                <div class="additionally-item align-items-center d-flex justify-content-center ">

                    <div class="additionally-item__inner d-flex justify-content-center align-items-center flex-column">
                        <img src="images/icons/additionally/04.png" alt="icon" class="additionally-item__icon">
                        <strong>фотограф</strong>
                        <small>5000 руб. в час</small>
                    </div>
                </div>
                <div class="additionally-item align-items-center d-flex justify-content-center ">

                    <div class="additionally-item__inner d-flex justify-content-center align-items-center flex-column">
                        <img src="images/icons/additionally/05.png" alt="icon" class="additionally-item__icon">
                        <strong>ведущий</strong>
                        <small>от 35000 руб.</small>
                    </div>
                </div>
                <div class="additionally-item align-items-center d-flex justify-content-center ">

                    <div class="additionally-item__inner d-flex justify-content-center align-items-center flex-column">
                        <img src="images/icons/additionally/06.png" alt="icon" class="additionally-item__icon">
                        <strong>диджей</strong>
                        <small>8000 руб. в час</small>
                    </div>
                </div>
                <div class="additionally-item align-items-center d-flex justify-content-center ">

                    <div class="additionally-item__inner d-flex justify-content-center align-items-center flex-column">
                        <img src="images/icons/additionally/07.png" alt="icon" class="additionally-item__icon">
                        <strong>видеооператор</strong>
                        <small>от 20000 руб. в час</small>
                    </div>
                </div>
                <div class="additionally-item align-items-center d-flex justify-content-center ">

                    <div class="additionally-item__inner d-flex justify-content-center align-items-center flex-column">
                        <img src="images/icons/additionally/08.png" alt="icon" class="additionally-item__icon">
                        <strong>азотное шоу</strong>
                        <small>от 8000 руб.</small>
                    </div>
                </div>
                <div class="additionally-item align-items-center d-flex justify-content-center ">

                    <div class="additionally-item__inner d-flex justify-content-center align-items-center flex-column">
                        <img src="images/icons/additionally/09.png" alt="icon" class="additionally-item__icon">
                        <strong>Декор помещения</strong>
                        <small>от 5000 руб.</small>
                    </div>
                </div>
                <div class="additionally-item align-items-center d-flex justify-content-center ">

                    <div class="additionally-item__inner d-flex justify-content-center align-items-center flex-column">
                        <img src="images/icons/additionally/10.png" alt="icon" class="additionally-item__icon">
                        <strong>украшение зала шарами</strong>
                        <small>от 3000 руб.</small>
                    </div>
                </div>
                <div class="additionally-item align-items-center d-flex justify-content-center ">

                    <div class="additionally-item__inner d-flex justify-content-center align-items-center flex-column">
                        <img src="images/icons/additionally/11.png" alt="icon" class="additionally-item__icon">
                        <strong>цветочные композиции</strong>
                        <small>от 3500 руб. за букет</small>
                    </div>
                </div>
                <div class="additionally-item align-items-center  d-flex justify-content-center ">
                    <div class="additionally-item__inner d-flex justify-content-center align-items-center flex-column">
                        <img src="images/icons/additionally/11.png" alt="icon" class="additionally-item__icon">
                        <strong>Шоу программы</strong>
                        <small>от 3500 руб. за букет</small>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="section section-sig-in" name="sign-in-form" id="sign-in-form">
        @component('components.sign_in_form')
        @endcomponent
    </div>
@endsection
<script>
    document.addEventListener("DOMContentLoaded", function () {
        //additional
        function postsCarousel() {
            var checkWidth = $(window).width();
            var owlPost = $(".how");
            if (checkWidth > 767) {
                if (typeof owlPost.data('owl.carousel') != 'undefined') {
                    owlPost.data('owl.carousel').destroy();
                }
                owlPost.removeClass('owl-carousel owl-theme');
            } else if (checkWidth < 768) {
                owlPost.addClass('owl-carousel owl-theme');
                owlPost.owlCarousel({
                    items: 1,
                    slideSpeed: 500,
                    animateOut: 'fadeOut',
                    touchDrag: true,
                    mouseDrag: false,
                    autoplay: true,
                    margin: 50,
                    autoplaySpeed: 8000,
                    autoHeight: true,
                    autoplayTimeout: 8000,
                    dots: true,
                    loop: true
                });
            }
        }

        postsCarousel();
        $(window).resize(postsCarousel);


        const images = document.querySelectorAll('.gallery-viezdnoy-item');

        images.forEach((img, index) => {
            img.addEventListener('mouseenter', function () {
                images.forEach(otherImg => {
                    if (otherImg !== img) {
                        otherImg.style.zIndex = '2';
                    }
                });
                img.style.zIndex = '3';
                if (index === 0) {
                    images[2].style.zIndex = '1'; // Поднимаем нижнюю картинку на передний план при наведении на первую
                }
            });
        });

        //priceVyezdmkl
        function priceVyezdmkl() {
            var owlPost = $(".price-vyezdmk");
            owlPost.owlCarousel({
                items: 3,
                slideSpeed: 800,
                touchDrag: true,
                mouseDrag: true,
                margin: 30,
                autoHeight: true,
                dots: false,
                loop: false,
                responsive: {
                    // breakpoint from 0 up
                    320: {
                        items: 1,
                        dots: true,
                    },

                    // breakpoint from 480 up
                    480: {
                        items: 1.3,
                        loop: true,
                        dots: true,
                    },
                    // breakpoint from 480 up
                    768: {
                        items: 2,
                        dots: true,
                    },
                    // breakpoint from 768 up
                    1200: {
                        items: 3,
                    }
                }
            });

        }

        priceVyezdmkl();

//variantsCarousel
        function variantsCarousel() {
            var checkWidth = $(window).width();
            var owlPost = $(".additional-slider");
            if (checkWidth > 767) {
                if (typeof owlPost.data('owl.carousel') != 'undefined') {
                    owlPost.data('owl.carousel').destroy();
                }
                owlPost.removeClass('owl-carousel owl-theme');
            } else if (checkWidth < 768) {
                owlPost.addClass('owl-carousel owl-theme');
                owlPost.owlCarousel({
                    items: 1,
                    slideSpeed: 500,
                    animateOut: 'fadeOut',
                    touchDrag: true,
                    mouseDrag: false,
                    autoplay: true,
                    margin: 50,
                    autoplaySpeed: 8000,
                    autoHeight: true,
                    autoplayTimeout: 8000,
                    dots: true,
                    loop: true
                });
            }
        }

        variantsCarousel();
        $(window).resize(variantsCarousel);
//additionally
        function additionallyCarousel() {
            var checkWidth = $(window).width();
            var owlPost = $(".additionally");
            if (checkWidth > 767) {
                if (typeof owlPost.data('owl.carousel') != 'undefined') {
                    owlPost.data('owl.carousel').destroy();
                }
                owlPost.removeClass('owl-carousel owl-theme');
            } else if (checkWidth < 768) {
                owlPost.addClass('owl-carousel owl-theme');
                owlPost.owlCarousel({
                    items: 1,
                    slideSpeed: 500,
                    animateOut: 'fadeOut',
                    touchDrag: true,
                    mouseDrag: false,
                    autoplay: true,
                    margin: 50,
                    autoplaySpeed: 8000,
                    autoHeight: true,
                    autoplayTimeout: 8000,
                    dots: true,
                    loop: true
                });
            }
        }

        additionallyCarousel();
        $(window).resize(additionallyCarousel);

        function showMore() {
            window.addEventListener("load", function (e) {
                const showMoreBlocks = document.querySelectorAll('[data-showmore]');
                let showMoreBlocksRegular;
                let mdQueriesArray;
                if (showMoreBlocks.length) {

// Получение обычных объектов
                    showMoreBlocksRegular = Array.from(showMoreBlocks).filter(function (item, index, self) {
                        return !item.dataset.showmoreMedia;
                    });

// Инициализация обычных объектов
                    showMoreBlocksRegular.length ? initItems(showMoreBlocksRegular) : null;

                    document.addEventListener("click", showMoreActions);
                    window.addEventListener("resize", showMoreActions);


// Получение объектов с медиа-запросами
                    mdQueriesArray = dataMediaQueries(showMoreBlocks, "showmoreMedia");
                    if (mdQueriesArray && mdQueriesArray.length) {
                        mdQueriesArray.forEach(mdQueriesItem => {
                            // Подія
                            mdQueriesItem.matchMedia.addEventListener("change", function () {
                                initItems(mdQueriesItem.itemsArray, mdQueriesItem.matchMedia);
                            });
                        });
                        initItemsMedia(mdQueriesArray);
                    }
                }

                function initItemsMedia(mdQueriesArray) {
                    mdQueriesArray.forEach(mdQueriesItem => {
                        initItems(mdQueriesItem.itemsArray, mdQueriesItem.matchMedia);
                    });
                }

                function initItems(showMoreBlocks, matchMedia) {
                    showMoreBlocks.forEach(showMoreBlock => {
                        initItem(showMoreBlock, matchMedia);
                    });
                }

                function initItem(showMoreBlock, matchMedia = false) {
                    showMoreBlock = matchMedia ? showMoreBlock.item : showMoreBlock;
                    let showMoreContent = showMoreBlock.querySelectorAll('[data-showmore-content]');
                    let showMoreButton = showMoreBlock.querySelectorAll('[data-showmore-button]');
                    showMoreContent = Array.from(showMoreContent).filter(item => item.closest('[data-showmore]') === showMoreBlock)[0];
                    showMoreButton = Array.from(showMoreButton).filter(item => item.closest('[data-showmore]') === showMoreBlock)[0];
                    const hiddenHeight = getHeight(showMoreBlock, showMoreContent);
                    if (matchMedia.matches || !matchMedia) {
                        if (hiddenHeight < getOriginalHeight(showMoreContent)) {
                            _slideUp(showMoreContent, 0, showMoreBlock.classList.contains('_showmore-active') ? getOriginalHeight(showMoreContent) : hiddenHeight);
                            showMoreButton.hidden = false;
                        } else {
                            _slideDown(showMoreContent, 0, hiddenHeight);
                            showMoreButton.hidden = true;
                        }
                    } else {
                        _slideDown(showMoreContent, 0, hiddenHeight);
                        showMoreButton.hidden = true;
                    }
                }

                function getHeight(showMoreBlock, showMoreContent) {
                    let hiddenHeight = 0;
                    const showMoreType = showMoreBlock.dataset.showmore ? showMoreBlock.dataset.showmore : 'size';
                    const rowGap = parseFloat(getComputedStyle(showMoreContent).rowGap) ? parseFloat(getComputedStyle(showMoreContent).rowGap) : 0;
                    if (showMoreType === 'items') {
                        const showMoreTypeValue = showMoreContent.dataset.showmoreContent ? showMoreContent.dataset.showmoreContent : 3;
                        const showMoreItems = showMoreContent.children;
                        for (let index = 1; index < showMoreItems.length; index++) {
                            const showMoreItem = showMoreItems[index - 1];
                            const marginTop = parseFloat(getComputedStyle(showMoreItem).marginTop) ? parseFloat(getComputedStyle(showMoreItem).marginTop) : 0;
                            const marginBottom = parseFloat(getComputedStyle(showMoreItem).marginBottom) ? parseFloat(getComputedStyle(showMoreItem).marginBottom) : 0;
                            hiddenHeight += showMoreItem.offsetHeight + marginTop;
                            if (index == showMoreTypeValue) break;
                            hiddenHeight += marginBottom;
                        }
                        rowGap ? hiddenHeight += (showMoreTypeValue - 1) * rowGap : null;
                    } else {
                        const showMoreTypeValue = showMoreContent.dataset.showmoreContent ? showMoreContent.dataset.showmoreContent : 150;
                        hiddenHeight = showMoreTypeValue;
                    }
                    return hiddenHeight;
                }

                function getOriginalHeight(showMoreContent) {
                    let parentHidden;
                    let hiddenHeight = showMoreContent.offsetHeight;
                    showMoreContent.style.removeProperty('height');
                    if (showMoreContent.closest(`[hidden]`)) {
                        parentHidden = showMoreContent.closest(`[hidden]`);
                        parentHidden.hidden = false;
                    }
                    let originalHeight = showMoreContent.offsetHeight;
                    parentHidden ? parentHidden.hidden = true : null;
                    showMoreContent.style.height = `${hiddenHeight}px`;
                    return originalHeight;
                }

                function showMoreActions(e) {
                    const targetEvent = e.target;
                    const targetType = e.type;
                    if (targetType === 'click') {
                        if (targetEvent.closest('[data-showmore-button]')) {
                            const showMoreButton = targetEvent.closest('[data-showmore-button]');
                            const showMoreBlock = showMoreButton.closest('[data-showmore]');
                            const showMoreContent = showMoreBlock.querySelector('[data-showmore-content]');
                            const showMoreSpeed = showMoreBlock.dataset.showmoreButton ? showMoreBlock.dataset.showmoreButton : '500';
                            const hiddenHeight = getHeight(showMoreBlock, showMoreContent);
                            if (!showMoreContent.classList.contains('_slide')) {
                                showMoreBlock.classList.contains('_showmore-active') ? _slideUp(showMoreContent, showMoreSpeed, hiddenHeight) : _slideDown(showMoreContent, showMoreSpeed, hiddenHeight);
                                showMoreBlock.classList.toggle('_showmore-active');
                            }
                        }
                    } else if (targetType === 'resize') {
                        showMoreBlocksRegular && showMoreBlocksRegular.length ? initItems(showMoreBlocksRegular) : null;
                        mdQueriesArray && mdQueriesArray.length ? initItemsMedia(mdQueriesArray) : null;
                    }
                }
            });
        }

        showMore();

        function dataMediaQueries(array, dataSetValue) {

// Получение объектов с медиа-запросами
            const media = Array.from(array).filter(function (item, index, self) {
                if (item.dataset[dataSetValue]) {
                    return item.dataset[dataSetValue].split(",")[0];
                }
            });

// Инициализация объектов с медиа-запросами
            if (media.length) {
                const breakpointsArray = [];
                media.forEach(item => {
                    const params = item.dataset[dataSetValue];
                    const breakpoint = {};
                    const paramsArray = params.split(",");
                    breakpoint.value = paramsArray[0];
                    breakpoint.type = paramsArray[1] ? paramsArray[1].trim() : "max";
                    breakpoint.item = item;
                    breakpointsArray.push(breakpoint);
                });

// Получаем уникальные брейкпоинты
                let mdQueries = breakpointsArray.map(function (item) {
                    return '(' + item.type + "-width: " + item.value + "px)," + item.value + ',' + item.type;
                });
                mdQueries = uniqArray(mdQueries);
                const mdQueriesArray = [];

                if (mdQueries.length) {

// Работаем с каждым брейкпоинтом
                    mdQueries.forEach(breakpoint => {
                        const paramsArray = breakpoint.split(",");
                        const mediaBreakpoint = paramsArray[1];
                        const mediaType = paramsArray[2];
                        const matchMedia = window.matchMedia(paramsArray[0]);

// Объекты с необходимыми условиями
                        const itemsArray = breakpointsArray.filter(function (item) {
                            if (item.value === mediaBreakpoint && item.type === mediaType) {
                                return true;
                            }
                        });
                        mdQueriesArray.push({
                            itemsArray,
                            matchMedia
                        })
                    });
                    return mdQueriesArray;
                }
            }
        }

        let _slideDown = (target, duration = 500, showmore = 0) => {
            if (!target.classList.contains('_slide')) {
                target.classList.add('_slide');
                target.hidden = target.hidden ? false : null;
                showmore ? target.style.removeProperty('height') : null;
                let height = target.offsetHeight;
                target.style.overflow = 'initial';
                target.style.height = showmore ? `${showmore}px` : `0px`;
                target.style.paddingTop = 0;
                target.style.paddingBottom = 0;
                target.style.marginTop = 0;
                target.style.marginBottom = 0;
                target.offsetHeight;
                target.style.transitionProperty = "height, margin, padding";
                target.style.transitionDuration = duration + 'ms';
                target.style.height = height + 'px';
                target.style.removeProperty('padding-top');
                target.style.removeProperty('padding-bottom');
                target.style.removeProperty('margin-top');
                target.style.removeProperty('margin-bottom');
                window.setTimeout(() => {
                    target.style.removeProperty('height');
                    target.style.removeProperty('overflow');
                    target.style.removeProperty('transition-duration');
                    target.style.removeProperty('transition-property');
                    target.classList.remove('_slide');
                    // Створюємо подію
                    document.dispatchEvent(new CustomEvent("slideDownDone", {
                        detail: {
                            target: target
                        }
                    }));
                }, duration);
            }
        }
        let _slideUp = (target, duration = 500, showmore = 0) => {
            if (!target.classList.contains('_slide')) {
                target.classList.add('_slide');
                target.style.transitionProperty = 'height, margin, padding';
                target.style.transitionDuration = duration + 'ms';
                target.style.height = `${target.offsetHeight}px`;
                target.offsetHeight;
                target.style.overflow = 'initial';
                target.style.height = showmore ? `${showmore}px` : `0px`;
                target.style.paddingTop = 0;
                target.style.paddingBottom = 0;
                target.style.marginTop = 0;
                target.style.marginBottom = 0;
                window.setTimeout(() => {
                    target.hidden = !showmore ? true : false;
                    !showmore ? target.style.removeProperty('height') : null;
                    target.style.removeProperty('padding-top');
                    target.style.removeProperty('padding-bottom');
                    target.style.removeProperty('margin-top');
                    target.style.removeProperty('margin-bottom');
                    !showmore ? target.style.removeProperty('overflow') : null;
                    target.style.removeProperty('transition-duration');
                    target.style.removeProperty('transition-property');
                    target.classList.remove('_slide');
                    // Створюємо подію
                    document.dispatchEvent(new CustomEvent("slideUpDone", {
                        detail: {
                            target: target
                        }
                    }));
                }, duration);
            }
        }

        function uniqArray(array) {
            return array.filter(function (item, index, self) {
                return self.indexOf(item) === index;
            });
        }
    });

</script>
