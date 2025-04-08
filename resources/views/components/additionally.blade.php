<div class="section section-content">
    <div class="container">
        <h2>Дополнительно</h2>
        <p class="large-text mb-md-5 mb-4">Если Вам необходимы дополнительные услуги, которых нет в списке позвоните нам
            и мы
            постараемся помочь.</p>
        <div class="additional-slider _additional">
            <div class="item">
                <div class="additional-item">
                    <div class="additional-item__img">
                        <picture>
                            <source srcset="/images/additionaly/01.webp">
                            <img class="ibg" src="/images/additionaly/01.jpg" alt="Продление мероприятия">
                        </picture>
                    </div>
                    <div class="additional-item__body">
                        <div class="additional-item__title">
                            продление мероприятия
                        </div>
                        <div class="additional-item__text">
                            <p>Стандартное время мероприятия - <strong>3 часа.</strong></p>
                            <p>
                                Если Вам кажется, что этого недостаточно&nbsp;и Вы хотите продлить мероприятие,
                                достаточно
                                сообщить об этом при записи.
                            </p>
                            <p>
                                <strong>1 час</strong> дополнительного времени - <strong> 6000 рублей.</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="additional-item">
                    <div class="additional-item__img">
                        <img class="ibg" src="/images/additionaly/02.webp" alt="фуршет">
                    </div>
                    <div class="additional-item__body">
                        <div class="additional-item__title">
                            фуршет
                        </div>
                        <a href="/buffet-menu" class="additional-item__link">
                            Посмотреть фуршетное меню
                        </a>
                        <ul>
                            <li>Нет привязки к количеству гостей</li>
                            <li>Просто выберете позицию из фуршетного меню</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="additional-item">
                    <div class="additional-item__img">
                        <img class="ibg" src="/images/additionaly/03.webp" alt="Сырная тарелка">
                    </div>
                    <div class="additional-item__body">
                        <div class="additional-item__title">
                            Сырная тарелка
                        </div>

                        <ul>
                            <li>
                                Ассорти из сыров 3 вида
                            </li>
                            <li>
                                Сыровяленая свинина
                            </li>
                            <li>
                                Виноград
                            </li>
                            <li>
                                Орехи
                            </li>
                        </ul>
                        <div class="additional-item__text">
                            <p>
                                Стоимость: <strong>600 руб./чел.</strong>
                            </p>
                            <p>
                                Минимальный заказ: <strong> 4800 рублей</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="additional-item">
                    <div class="additional-item__img">
                        <img class="ibg" src="/images/additionaly/04.webp" alt="мясная тарелка">
                    </div>
                    <div class="additional-item__body">
                        <div class="additional-item__title">
                            мясная тарелка
                        </div>

                        <ul>
                            <li>
                                Ростбиф
                            </li>
                            <li>
                                Сыровяленая свинина
                            </li>
                            <li>
                                Корнишоны
                            </li>
                            <li>
                                Каперсы
                            </li>
                            <li>
                                Луковый мармелад
                            </li>
                            <li>
                                Горчица
                            </li>
                        </ul>
                        <div class="additional-item__text">
                            <p>
                                Стоимость: <strong>600 руб./чел.</strong>
                            </p>
                            <p>
                                Минимальный заказ: <strong> 4800 рублей</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="additional-item">
                    <div class="additional-item__img">
                        <img class="ibg" src="/images/additionaly/05.webp" alt="Фруктовая тарелка">
                    </div>
                    <div class="additional-item__body">
                        <div class="additional-item__title">
                            Фруктовая тарелка
                        </div>
                        <div class="additional-item__text">
                            <p>
                                <strong>Сезонные фрукты</strong>
                            </p>
                            <p>
                                Стоимость: <strong>500 руб./чел.</strong>
                            </p>
                            <p>
                                Минимальный заказ: <strong> 4000 рублей</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="additional-item">
                    <div class="additional-item__img">
                        <img class="ibg" src="/images/additionaly/06.webp" alt="Дополнительное меню для мастер-классов">
                    </div>
                    <div class="additional-item__body">
                        <div class="additional-item__title">
                            Дополнительное меню для мастер-классов
                        </div>
                        <ul>
                            <li>
                                Чайник чая 500мл - 250р
                            </li>
                            <li>
                                Кофе: эспрессо/американо/капучино - 150р
                            </li>
                            <li>
                                Шоколадный фонтан с фруктами: 6000 руб. на 7 участников
                            </li>
                            <li>
                                Лимонад в ассортименте 0,33 - 250 руб.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                    margin: 20,
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
    });

</script>
