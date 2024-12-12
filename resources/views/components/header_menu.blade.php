@use('Illuminate\Support\Carbon')
<div class="main-header">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <div class="header-logo">
                <a href="/"><img src="images/full_logo_white.svg" alt=""></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center main-header-nav-block" id="main-menu">
                <ul class="navbar-nav main-navbar">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link">
                            О нас
                        </a>
                    </li>
                    <li class="nav-item has-submenu">
                        <a class="nav-link" href="#">Услуги</a>
                        <div class="submenu-wrapper">
                            <ul class="submenu">
                                <li class="submenu__item has-submenu">
                                    <a class="submenu__link" href="#" data-parent="1">Мастер-классы</a>
                                </li>
                                <li class="submenu__item has-submenu">
                                    <a class="submenu__link" href="#" data-parent="2">Мероприятия</a>
                                </li>
                                <li class="submenu__item"><a class="submenu__link" href="/studio-rental">Аренда студии</a></li>
                                <li class="submenu__item"><a class="submenu__link" href="/catering">Кейтеринг</a></li>
                            </ul>
                            <div class="submenu-wrapper__content">
                                <ul class="submenu-two" data-da=".submenu__item:first-child, 992" data-submenu="1">
                                    <li class="submenu__item item-tippy">
                                        <a class="submenu__link" href="/individual"><span>Индивидуальный</span></a>
                                        <div class="item-tippy__content">
                                            Мастер-класс для вас/вашей компании отдельно
                                        </div>
                                    </li>
{{--                                    <li class="submenu__item item-tippy">--}}
{{--                                        <a class="submenu__link" href=""><span>Сборный</span></a>--}}
{{--                                        <div class="item-tippy__content">Сборная группа из 6-12 человек</div>--}}
{{--                                    </li>--}}
                                    <li class="submenu__item item-tippy">
                                        <a class="submenu__link" href="/vyezdnoj-mk"><span>Выездной</span></a>
                                        <div class="item-tippy__content">Проведение МК в любой локации</div>
                                    </li>
                                    <li class="submenu__item"><a class="submenu__link" href="/for-children">Мастер-класс для детей</a></li>
                                    <li class="submenu__item"><a class="submenu__link" href="/family">Семейный мастер-класс</a></li>
                                </ul>
                                <ul class="submenu-two" data-da=".submenu__item:nth-child(2), 992" data-submenu="2">
                                    <li class="submenu__item"><a class="submenu__link" href="/corporate">Корпоративы</a></li>
                                    <li class="submenu__item"><a class="submenu__link" href="/girls">Девичники</a></li>
                                    <li class="submenu__item"><a class="submenu__link" href="/birthday">Дни рождения</a></li>
                                    <li class="submenu__item"><a class="submenu__link" href="/kids">Детские праздники</a></li>
                                    <li class="submenu__item"><a class="submenu__link" href="/team-building">Тимбилдинг</a></li>
                                    <li class="submenu__item"><a class="submenu__link" href="/appointment">Свидание</a></li>
                                    <li class="submenu__item"><a class="submenu__link" href="/evening">Вечеринка</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/certificate">Сертификаты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/menu">Меню</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacts">Контакты</a>
                    </li>
                </ul>
                <div class="header-phone-block">
                    <a href="https://wa.me/79967794436">
                        <img src="/images/icons/soc-whatsapp.svg" alt="">
                    </a>
                    <a href="https://t.me/loft_cookforia">
                        <img src="/images/icons/soc-telegram.svg" alt="">
                    </a>

					@if(Carbon::parse('2024-12-13')->isPast())
						<a class="header-phone --desktop" href="tel:+78127678793">
							<span class="phone-content">+7 (812) 7678793</span>
						</a>
					@else
						<a class="header-phone --desktop" href="tel:+78122131417">
							<span class="phone-content">+7 (812) 2131417</span>
						</a>
					@endif
                    <script>
                        (function () {
                            document.addEventListener('DOMContentLoaded', function () {

                                let callTrackerScript = document.querySelector('[src^="https://cdn-ru.bitrix24.ru/b18339638/crm/tag/call.tracker.js"]');
                                // console.log(callTrackerScript != null)
                                // console.log(callTrackerScript)
                                if (callTrackerScript != null) {

                                    callTrackerScript.addEventListener('load', function () {
                                        correctPhone();
                                    })
                                } else {

                                    // window.addEventListener('load', function () {
                                    correctPhone();
                                    // })
                                }
                            })

                            function correctPhone() {

                                let nodePhone = document.querySelector('.header-phone');
                                let tel = nodePhone.href.split(':')[1];
                                let phoneContent = nodePhone.querySelector('.phone-content');


                                phoneContent.innerHTML = '';

                                phoneContent.textContent = tel;

                                let formatTel = tel.slice(0, 2) + " (" + tel.slice(2, 5) + ") " + tel.slice(5, 12);

                                phoneContent.textContent = formatTel;
                            }
                        })()
                    </script>
                </div>
                <div class="mobile-header-phone-block">

                    <a href="https://wa.me/79967794436">
                        <img src="/images/icons/soc-whatsapp.svg" alt="">
                    </a>
                    <a href="t.me/loft_cookforia">
                        <img src="/images/icons/soc-telegram.svg" alt="">
                    </a>
					@if(Carbon::parse('2024-12-13')->isPast())
						<a class="header-phone" id="header-phone_mobile" href="tel:+78127678793">+7 (812) 767-87-93</a>
					@else
						<a class="header-phone" id="header-phone_mobile" href="tel:+78122131417">+7 (812) 213-14-17</a>
					@endif
                    <div id="phone-captcha-container"></div>

                </div>
            </div>
        </div>
    </nav>
</div>
<script>
    class DynamicAdapt {
        constructor(type) {
            this.type = type
        }
        init() {

            this.оbjects = []
            this.daClassname = '_dynamic_adapt_'

            this.nodes = [...document.querySelectorAll('[data-da]')]


            this.nodes.forEach((node) => {
                const data = node.dataset.da.trim()
                const dataArray = data.split(',')
                const оbject = {}
                оbject.element = node
                оbject.parent = node.parentNode
                оbject.destination = document.querySelector(`${dataArray[0].trim()}`)
                оbject.breakpoint = dataArray[1] ? dataArray[1].trim() : '767'
                оbject.place = dataArray[2] ? dataArray[2].trim() : 'last'
                оbject.index = this.indexInParent(оbject.parent, оbject.element)
                this.оbjects.push(оbject)
            })

            this.arraySort(this.оbjects)


            this.mediaQueries = this.оbjects
                .map(({ breakpoint }) => `(${this.type}-width: ${breakpoint}px),${breakpoint}`)
                .filter((item, index, self) => self.indexOf(item) === index)


            this.mediaQueries.forEach((media) => {
                const mediaSplit = media.split(',')
                const matchMedia = window.matchMedia(mediaSplit[0])
                const mediaBreakpoint = mediaSplit[1]


                const оbjectsFilter = this.оbjects.filter(({ breakpoint }) => breakpoint === mediaBreakpoint)
                matchMedia.addEventListener('change', () => {
                    this.mediaHandler(matchMedia, оbjectsFilter)
                })
                this.mediaHandler(matchMedia, оbjectsFilter)
            })
        }

        mediaHandler(matchMedia, оbjects) {
            if (matchMedia.matches) {
                оbjects.forEach((оbject) => {
                    // оbject.index = this.indexInParent(оbject.parent, оbject.element);
                    this.moveTo(оbject.place, оbject.element, оbject.destination)
                })
            } else {
                оbjects.forEach(({ parent, element, index }) => {
                    if (element.classList.contains(this.daClassname)) {
                        this.moveBack(parent, element, index)
                    }
                })
            }
        }

        moveTo(place, element, destination) {
            element.classList.add(this.daClassname)
            if (place === 'last' || place >= destination.children.length) {
                destination.append(element)
                return
            }
            if (place === 'first') {
                destination.prepend(element)
                return
            }
            destination.children[place].before(element)
        }

        moveBack(parent, element, index) {
            element.classList.remove(this.daClassname)
            if (parent.children[index] !== undefined) {
                parent.children[index].before(element)
            } else {
                parent.append(element)
            }
        }

        indexInParent(parent, element) {
            return [...parent.children].indexOf(element)
        }

        arraySort(arr) {
            if (this.type === 'min') {
                arr.sort((a, b) => {
                    if (a.breakpoint === b.breakpoint) {
                        if (a.place === b.place) {
                            return 0
                        }
                        if (a.place === 'first' || b.place === 'last') {
                            return -1
                        }
                        if (a.place === 'last' || b.place === 'first') {
                            return 1
                        }
                        return 0
                    }
                    return a.breakpoint - b.breakpoint
                })
            } else {
                arr.sort((a, b) => {
                    if (a.breakpoint === b.breakpoint) {
                        if (a.place === b.place) {
                            return 0
                        }
                        if (a.place === 'first' || b.place === 'last') {
                            return 1
                        }
                        if (a.place === 'last' || b.place === 'first') {
                            return -1
                        }
                        return 0
                    }
                    return b.breakpoint - a.breakpoint
                })
                return
            }
        }
    }
    const da = new DynamicAdapt("max");
    da.init();
</script>
