@extends('layouts.app')

@section('og_title', 'Кулинарный мастер-класс для мужчин')
@section('og_description', 'Запишитесь на кулинарный мастер-класс для мужчин! Узнайте секреты приготовления блюд под руководством шеф-повара, удивите своих близких кулинарными шедеврами.')
@section('og_image', 'https://cookforia.ru/images/gallery/evening/01.jpg')
@section('title', 'Кулинарный мастер-класс для мужчин')
@section('description', 'Запишитесь на кулинарный мастер-класс для мужчин! Узнайте секреты приготовления блюд под руководством шеф-повара, удивите своих близких кулинарными шедеврами.')
@section('keywords', 'кулинарный мастер-класс, корпоратив, тимбилдинг')

@section('content')
    <div class="section section-main section-main-pages section-main-man">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Кулинарный мастер-класс для мужчин</h1>
                <p>
                    <strong> Кулинарный мастер-класс для мужчин</strong> — возможность провести время в приятной
                    компании и научиться готовить изысканные блюда под руководством шеф-повара. Это необычный формат
                    досуга, который понравится не только талантливым кулинарам, но и тем, кто редко сталкивается с
                    приготовлением еды.
                    В кулинарной студии Cookforia каждый мужчина станет шеф-поваром на один вечер. Предлагаем большой
                    выбор рецептов на любой вкус, отдельную зону отдыха и бесплатные безалкогольные напитки.
                    Гарантируем, будет вкусно.


                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-how-much _custom">
        <div class="container">
            <div class="item-desc">
                <h3 class="text-center"><strong>Чем удивит мастер-класс в Cookforia?</strong></h3>
                <p class="large-text">Вкусными и сытными блюдами</p>
                <p class="large-text">Путь к сердцу мужчины лежит через вкусные блюда, которые мы собрали в наших меню.
                    Участники мастер-класса приготовят салаты, горячее и десерты своими руками. Наш шеф-повар раскроет
                    хитрости приготовления национальных блюд, покажет участникам, как правильно украшать и подавать
                    блюда к столу.</p>
                <p class="large-text">
                    Необычным форматом
                </p>
                <p class="large-text">
                    Кулинарный мастер-класс — альтернатива традиционному досугу для мужчин. Это необычный вариант для
                    проведения корпоратива, тимбилдинга или просто встречи старых друзей, которых объединяет интерес к
                    кулинарии. Мы подберем интересный формат для вашей компании в зависимости от целей мероприятия.
                </p>
                <p class="large-text">
                    Комфортной и уютной атмосферой
                </p>
                <p class="large-text">
                    В нашей просторной студии поместится много людей: от 2 до 50 человек. Кухня оборудована всем
                    необходимым инвентарем, а в отдельной зоне для отдыха участники смогут пообщаться и обменяться
                    впечатлениями. Студия оформлена в уютном стиле лофт, а всё пространство будет отведено только для
                    вашей компании.
                </p>
            </div>
            <div class="item-desc">
                <h3 class="text-center"><strong>Откройте для себя новые вкусы в Cookforia</strong></h3>
                <p class="large-text">Приготовьте блюда ресторанного уровня и повторите их дома!</p>
                <p class="large-text">Записывайтесь на кулинарный мастер-класс в студии Cookforia и устройте себе
                    настоящее гастрономическое путешествие. </p>

            </div>
        </div>
    </div>

    <div class="section section-schedule-gallery">
        <div class="container">
            <h2>Галерея</h2>
            <div class="schedule-gallery-container owl-carousel owl-theme">
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/birthday/1-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/1-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/1-690.webp"
                                media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/1-690.jpg"
                                media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/1-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/birthday/1-510.jpg" media="(max-width: 767px)">
                        <source srcset="/images/gallery/birthday/1-1110.webp" alt="День рождения">
                        <img src="/images/gallery/birthday/1-1110.jpg" alt="День рождения">
                    </picture>
                </div>


                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/birthday/5-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/5-690.webp"
                                media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/5-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/birthday/5-1110.webp" alt="День рождения">
                        <source srcset="/images/gallery/birthday/5-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/5-690.jpg"
                                media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/5-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/birthday/5-1110.jpg" alt="День рождения">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/birthday/6-1110.webp" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/6-690.webp"
                                media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/birthday/6-510.webp" media="(max-width: 767px)">
                        <source srcset="/images/gallery/birthday/6-1110.webp">
                        <source srcset="/images/gallery/birthday/6-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/birthday/6-690.jpg"
                                media="(min-width: 768px) and (max-width: 991px)">
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

    {{--    @component('components.additionally')--}}
    {{--    @endcomponent--}}
    <div class="section section-sig-in" name="sign-in-form" id="sign-in-form">
        @component('components.sign_in_form')
        @endcomponent
    </div>
    <section class="section section-seo">
        <div class="container">
            <div class="section-seo__inner seo-block">
                <div class="seo-block__item">
                    <div class="seo-block__title">
                        Кухни мира
                    </div>
                    <div class="seo-block__links">
                        <a href="/italian-cuisine">Итальянская кухня</a>
                        <a href="/georgian-cuisine">Грузинская кухня</a>
                        <a href="/french-cuisine">Французская кухня</a>
                    </div>
                </div>
                <div class="seo-block__item">
                    <div class="seo-block__title">
                        Лучшие блюда
                    </div>
                    <div class="seo-block__links">
                        <a href="/sushi">Cуши</a>
                        <a href="/bbq">Барбекю</a>
                        <a href="/tom-yum">Том ям</a>
                        <a href="/khachapuri">Хачапури</a>
                        <a href="/pizza">Пицца</a>
                        <a href="/bruschettas">Брускеты</a>
                    </div>
                </div>
                <div class="seo-block__item">
                    <div class="seo-block__title">
                        Тематические мастер классы
                    </div>
                    <div class="seo-block__links">
                        <a class="_active" href="/for-man">Кулинарный мастер-класс для мужчин</a>
                        <a href="/for-woman">Кулинарный мастер-класс для женщин</a>
                        <a href="/teenager">Кулинарный мастер-класс для подростков</a>
                        <a href="/chef">Кулинарный мастер-класс от шефа</a>
                        <a href="/creative">Творческий кулинарный мастер-класс</a>
                        <a href="/wine">Кулинарный мастер класс с вином</a>
                        <a href="/quest">Кулинарный квест</a>
                        <a href="/february">Кулинарный мастер-класс 23 февраля</a>
                        <a href="/valentins-day">Кулинарный мастер-класс 14 февраля</a>
                        <a href="/march">Кулинарный мастер-класс 8 Марта</a>
                        <a href="/v-day">Кулинарный мастер-класс 9 мая</a>
                        <a href="/easter">Кулинарный мастер-класс Пасха</a>
                        <a href="/nature">Кулинарный мастер-класс на природе</a>
                        {{--                    <a href="">Грузинская кухня</a>--}}
                        <a href="/group">Кулинарный мастер-класс групповой</a>
                        {{--                    <a href="">Итальянская кухня</a>--}}
                        <a href="/cakes">Кулинарный мастер-класс по тортам</a>
                        {{--                    <a href="">Французская кухня</a>--}}
                        <a href="/meat">Кулинарный мастер-класс по мясу</a>
                        <a href="/pizza">Кулинарный мастер-класс по пицце</a>
                        <a href="/bbq">Кулинарный мастер-класс по барбекю</a>
                        <a href="/sushi">Кулинарный мастер-класс по суши</a>
                        <a href="/khachapuri">Кулинарный мастер-класс по хачапури</a>
                        <a href="/tom-yum">Кулинарный мастер-класс по том ям</a>
                        <a href="/baking">Кулинарный мастер-класс по выпечке</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
