@extends('layouts.app')

@section('og_title', "Кулинарная студия 'Cookforia'")
@section('og_description', 'Кулинарная студия в Санкт-Петербурге. Меню на человека от 2000 руб. Бесплатные напитки.')
@section('og_image', 'https://cookforia.ru/images/menu-back.jpg')
@section('title', 'Кулинарная студия "Cookforia"')
@section('description', 'Кулинарная студия в Санкт-Петербурге. Меню на человека от 2000 руб. Бесплатные напитки.')
@section('keywords', 'кулинарный мастер-класс, день рождения, корпоратив, девичник, мероприятие, праздник')

@section('content')
    <div class="section section-main section-main-about">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>О студии Cookforia</h1>
                <p>
                    Cookforia - это не просто кулинарная студия, это пространство, где рождаются вкусные эмоции и
                    приятные воспоминания!
                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>
    <div class="section section-padding">
        <div class="container">
            <div class="about-logo">
                <div class="about-logo__img">
                    <img src="/images/logo-about.svg" alt="Кулинарная студия 'Cookforia'">
                </div>
                <div class="about-logo__content">
                    <p>
                        История кулинарной студии Cookforia началась с простой, но страстной идеи: создать место, где
                        люди смогут не просто научиться готовить, а окунуться в атмосферу настоящего кулинарного
                        праздника. Основатели студии, вдохновленные собственным опытом и любовью к гастрономии, мечтали
                        открыть двери в мир вкусов и ароматов для каждого желающего.
                    </p>
                    <p>
                        За время своего существования Cookforia превратилась в уютное и стильное пространство, где царит
                        атмосфера творчества и дружеского общения. Команда профессиональных поваров с удовольствием
                        делится своими знаниями и секретами, помогая гостям студии создавать настоящие кулинарные
                        шедевры.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-bottom">
        <div class="container">
            <h2>в нашей студии</h2>
            <div class="mt-md-5 mt-4 about-benefits d-flex flex-wrap">
                <div class="about-benefits-item">
                    <div class="about-benefits-item__top d-flex align-items-center">
                        <img src="/images/icons/check.svg" alt="Icon">
                        <strong>Любовь к кулинарии</strong>
                    </div>
                    <div class="about-benefits-item__body">
                        Мы верим, что приготовление еды - это настоящее искусство, доступное каждому.
                    </div>
                </div>
                <div class="about-benefits-item">
                    <div class="about-benefits-item__top d-flex align-items-center">
                        <img src="/images/icons/check.svg" alt="Icon">
                        <strong>Гостеприимство</strong>
                    </div>
                    <div class="about-benefits-item__body">
                        Наша студия - это место, где каждый гость чувствует себя желанным и особенным.
                    </div>
                </div>
                <div class="about-benefits-item">
                    <div class="about-benefits-item__top d-flex align-items-center">
                        <img src="/images/icons/check.svg" alt="Icon">
                        <strong>Качество</strong>
                    </div>
                    <div class="about-benefits-item__body">
                        Мы используем только свежие и качественные продукты, чтобы ваши блюда были не только вкусными,
                        но и полезными.
                    </div>
                </div>
                <div class="about-benefits-item">
                    <div class="about-benefits-item__top d-flex align-items-center">
                        <img src="/images/icons/check.svg" alt="Icon">
                        <strong>Творчество</strong>
                    </div>
                    <div class="about-benefits-item__body">
                        Мы поощряем кулинарные эксперименты и помогаем нашим гостям раскрыть свой творческий потенциал.
                    </div>
                </div>
                <div class="about-benefits-item">
                    <div class="about-benefits-item__top d-flex align-items-center">
                        <img src="/images/icons/check.svg" alt="Icon">
                        <strong>Радость общения</strong>
                    </div>
                    <div class="about-benefits-item__body">
                        Совместное приготовление еды - это отличный способ провести время с близкими и разделить радость
                        общения.
                    </div>
                </div>
                <div class="about-benefits-item">
                    <div class="about-benefits-item__top d-flex align-items-center">
                        <img src="/images/icons/check.svg" alt="Icon">
                        <strong>партнерство</strong>
                    </div>
                    <div class="about-benefits-item__body">
                        Мы с радостью сотрудничаем с интересными партнерами и развиваемся каждый день.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-padding section_grey">
        <div class="container">
            <div class="numbers d-flex flex-wrap">
                <div class="numbers__item d-flex">
                    <div class="numbers__item-block text-center d-flex flex-column align-items-center">
                        <strong class="mb-1">2400</strong>
                        Мы провели более 2400 праздников
                    </div>
                    <div class="numbers__item-block text-center d-flex flex-column align-items-center">
                        <strong class="mb-1">37400</strong>
                        У нас побывали более 37400 гостей
                    </div>
                </div>
                <div class="numbers__item d-flex">
                    <div class="numbers__item-block text-center d-flex flex-column align-items-center">
                        <strong class="mb-1">100</strong>
                        Мы работаем более, чем со 100 подрядчиками
                    </div>
                    <div class="numbers__item-block text-center d-flex flex-column align-items-center">
                        <strong class="mb-1">40</strong>
                        У нас работает 40 опытных сотрудников
                    </div>
                </div>
            </div>
            <div class="about-text">
                <p><strong>Cookforia</strong> - это не просто кулинарная студия, это место, где вкус встречается с
                    творчеством!
                </p>
                <p>В уютных залах в Санкт-Петербурге Вас ждут:</p>
                <ul>
                    <li>
                        Увлекательные кулинарные мастер-классы для всех возрастов.
                    </li>
                    <li>
                        Незабываемые корпоративные мероприятия, которые сплотят ваш коллектив.
                    </li>
                    <li>
                        Яркие и веселые детские праздники, которые запомнятся надолго.
                    </li>
                    <li>
                        Стильные и изысканные взрослые торжества.
                    </li>
                </ul>
                <p>
                    За плечами нашей команды - опыт работы в топовых ресторанных проектах и участие в популярных
                    телепередачах.
                    Наши шеф-повара и су-шефы - настоящие профессионалы своего дела, готовые поделиться с вами секретами
                    кулинарного мастерства.
                </p>
                <p>
                    А наши менеджеры по организации мероприятий позаботятся о том, чтобы каждый праздник был
                    исключительным и доставил массу удовольствия!
                </p>
            </div>
        </div>
    </div>
    <div class="section section-padding _team">
        <div class="container">
            <h2 class="mt-2">наша команда</h2>
            <div class='text-accent'>Знаете, кто стоит за созданием вашего вкусного праздника? Мы познакомим вас с&nbsp;профессионалами
                кулинарного искусства.
            </div>
            <div data-showmore="items" data-showmore-media="767,min" class="block mt-md-5 mt-4">
                <ul data-showmore-content="1" class="block__content additional-slider _about-team">
                    <li>
                        <div class="team-item d-flex flex-column">
                            <div class="team-item__img">
                                <picture>
                                    <source srcset="/images/team/01.webp">
                                    <img class="ibg" src="images/team/01.jpg" alt="Команда">
                                </picture>
                            </div>
                            <div class="team-item__body">
                                <div class="team-item__block">
                                    <div class="team-item__title">Имя_фамилия</div>
                                    <strong>Бренд шеф</strong>
                                </div>
                                <div class="team-item__block">
                                    <strong>Рабочий профиль:</strong>
                                    руководит разработкой новых меню в кулинарной студии Cookforia
                                </div>
                                <div class="team-item__block">
                                    <strong>Кулинарное прошлое:</strong>
                                    окончил Московскую государственную технологическую академию. Работал шефом в крупных
                                    ресторанах премиум класса более 10 лет. В течении 4-х лет преподавал в международной
                                    кулинарной студии. Сотрудничал с Шато дэ Вессель. В 2019 году присоединился к
                                    команде
                                    Cookforia
                                </div>
                                <div class="team-item__block">
                                    <blockquote>
                                        <strong> «Хорошие повара готовят по рецепту, а лучшие пишут их».</strong>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="team-item d-flex flex-column">
                            <div class="team-item__img">
                                <picture>
                                    <source srcset="/images/team/02.webp">
                                    <img class="ibg" src="images/team/02.jpg" alt="Команда">
                                </picture>
                            </div>
                            <div class="team-item__body">
                                <div class="team-item__block">
                                    <div class="team-item__title">Имя_фамилия</div>
                                    <strong>Бренд шеф</strong>
                                </div>
                                <div class="team-item__block">
                                    <strong>Рабочий профиль:</strong>
                                    руководит разработкой новых меню в кулинарной студии Cookforia
                                </div>
                                <div class="team-item__block">
                                    <strong>Кулинарное прошлое:</strong>
                                    окончил кулинарный техникум по специальности повар-кондитер. Работал шеф поваром на
                                    немецкой и итальянской кухне. В течение пяти лет преподавал в крупнейшей кулинарной
                                    студии России.
                                </div>
                                <div class="team-item__block">
                                    <blockquote>
                                        <strong> «Хорошие повара готовят по рецепту, а лучшие пишут их».</strong>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="team-item d-flex flex-column">
                            <div class="team-item__img">
                                <picture>
                                    <source srcset="/images/team/03.webp">
                                    <img class="ibg" src="images/team/03.jpg" alt="Команда">
                                </picture>
                            </div>
                            <div class="team-item__body">
                                <div class="team-item__block">
                                    <div class="team-item__title">Имя_фамилия</div>
                                    <strong>Бренд шеф</strong>
                                </div>
                                <div class="team-item__block">
                                    <strong>Рабочий профиль:</strong>
                                    руководит разработкой новых меню в кулинарной студии Cookforia
                                </div>
                                <div class="team-item__block">
                                    <strong>Кулинарное прошлое:</strong>
                                    начинала свой путь в аутентичной траттории. Влюблена в итальянскую кухню за особое
                                    внимание к традициям и блеск в глазах при создании кулинарных шедевров!
                                </div>
                                <div class="team-item__block">
                                    <blockquote>
                                        <strong> «Хорошие повара готовят по рецепту, а лучшие пишут их».</strong>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="team-item d-flex flex-column">
                            <div class="team-item__img">
                                <picture>
                                    <source srcset="/images/team/03.webp">
                                    <img class="ibg" src="images/team/03.jpg" alt="Команда">
                                </picture>
                            </div>
                            <div class="team-item__body">
                                <div class="team-item__block">
                                    <div class="team-item__title">Имя_фамилия</div>
                                    <strong>Бренд шеф</strong>
                                </div>
                                <div class="team-item__block">
                                    <strong>Рабочий профиль:</strong>
                                    руководит разработкой новых меню в кулинарной студии Cookforia
                                </div>
                                <div class="team-item__block">
                                    <strong>Кулинарное прошлое:</strong>
                                    начинала свой путь в аутентичной траттории. Влюблена в итальянскую кухню за особое
                                    внимание к традициям и блеск в глазах при создании кулинарных шедевров!
                                </div>
                                <div class="team-item__block">
                                    <blockquote>
                                        <strong> «Хорошие повара готовят по рецепту, а лучшие пишут их».</strong>
                                    </blockquote>
                                </div>
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
    <div class="section section-schedule-gallery">
        <div class="container">
            <h2>интерьеры студий</h2>
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
    <div class="section section-padding">
        <div class="container">
            <h2>нам доверяют свои мероприятия</h2>
            <div class="partners mt-md-5 mt-4">
                <div class="partners__img">
                    <img class="ibg" src="images/partners/01.svg" alt="Image">
                </div>
                <div class="partners__img">
                    <img class="ibg" src="images/partners/01.svg" alt="Image">
                </div>
                <div class="partners__img">
                    <img class="ibg" src="images/partners/01.svg" alt="Image">
                </div>
                <div class="partners__img">
                    <img class="ibg" src="images/partners/01.svg" alt="Image">
                </div>
                <div class="partners__img">
                    <img class="ibg" src="images/partners/01.svg" alt="Image">
                </div>
                <div class="partners__img">
                    <img class="ibg" src="images/partners/01.svg" alt="Image">
                </div>
                <div class="partners__img">
                    <img class="ibg" src="images/partners/01.svg" alt="Image">
                </div>
                <div class="partners__img">
                    <img class="ibg" src="images/partners/01.svg" alt="Image">
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
<script>
    document.addEventListener("DOMContentLoaded", function () {
        //additional
        function postsCarousel() {
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

        postsCarousel();
        $(window).resize(postsCarousel);

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
