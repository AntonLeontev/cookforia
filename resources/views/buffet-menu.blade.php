@extends('layouts.app')

@section('og_title', "Фуршетное меню КУЛИНАРНОЙ СТУДИИ Cookforia")
@section('og_description', 'Хотите удивить гостей изысканным фуршетом? В нашей кулинарной студии мы предлагаем яркое и разнообразное меню, которое станет настоящим украшением вашего мероприятия!')
@section('og_image', 'https://cookforia.ru/images/menu-back.jpg')
@section('title', 'Фуршетное меню КУЛИНАРНОЙ СТУДИИ Cookforia')
@section('description', 'Хотите удивить гостей изысканным фуршетом? В нашей кулинарной студии мы предлагаем яркое и разнообразное меню, которое станет настоящим украшением вашего мероприятия!')
@section('keywords', 'кулинарный мастер-класс, день рождения, корпоратив, девичник, мероприятие, праздник')

@section('content')
    <div class="section section-main section-main-buffet">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>фуршетное меню</h1>
                <p>
                    Хотите удивить гостей изысканным фуршетом? В нашей кулинарной студии мы предлагаем яркое и
                    разнообразное меню, которое станет настоящим украшением вашего мероприятия!
                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>
    <div class="section section-padding _slider-shadow">
        <div class="container">
            <div class="price-vyezdmk mt-md-5 mt-4 _slider-destroy">
                <div class="price-vyezdmk-item d-flex flex-column text-center">
                    <div class="price-vyezdmk-item__img">
                        <img class="ibg" src="/images/menu/buffet/01.webp" alt="Брускетта">
                    </div>
                    <div class="price-vyezdmk-item__body">
                        <div class="price-vyezdmk-item__title">
                            Брускетта
                        </div>
                        <div class="price-vyezdmk-item__text">
                            <p>с ростбифом, вяленым томатом и&nbsp;луковым мармеладом</p>
                            <p>Заказ от 5 закусок - 250&nbsp;руб./шт.</p>
                        </div>
                    </div>
                    <div class="price-vyezdmk-item__action">
                        <a class="button button-solid" href="/menu">выбрать</a>
                    </div>
                </div>
                <div class="price-vyezdmk-item d-flex flex-column text-center">
                    <div class="price-vyezdmk-item__img">
                        <img class="ibg" src="/images/menu/buffet/02.webp" alt="Брускетта">
                    </div>
                    <div class="price-vyezdmk-item__body">
                        <div class="price-vyezdmk-item__title">
                            Брускетта
                        </div>
                        <div class="price-vyezdmk-item__text">
                            <p>с салом и соусом Релиш</p>
                            <p>Заказ от 5 закусок - 200&nbsp;руб./шт.</p>
                        </div>
                    </div>
                    <div class="price-vyezdmk-item__action">
                        <a class="button button-solid" href="/menu">выбрать</a>
                    </div>
                </div>
                <div class="price-vyezdmk-item d-flex flex-column text-center">
                    <div class="price-vyezdmk-item__img">
                        <img class="ibg" src="/images/menu/buffet/03.webp" alt="Брускетта">
                    </div>
                    <div class="price-vyezdmk-item__body">
                        <div class="price-vyezdmk-item__title">
                            Брускетта
                        </div>
                        <div class="price-vyezdmk-item__text">
                            <p>с коппой, творожном кремом и&nbsp;томатами Черри</p>
                            <p>Заказ от 5 закусок - 250&nbsp;руб./шт.</p>
                        </div>
                    </div>
                    <div class="price-vyezdmk-item__action">
                        <a class="button button-solid" href="/menu">выбрать</a>
                    </div>
                </div>
                <div class="price-vyezdmk-item d-flex flex-column text-center">
                    <div class="price-vyezdmk-item__img">
                        <img class="ibg" src="/images/menu/buffet/04.webp" alt="Брускетта">
                    </div>
                    <div class="price-vyezdmk-item__body">
                        <div class="price-vyezdmk-item__title">
                            Брускетта
                        </div>
                        <div class="price-vyezdmk-item__text">
                            <p>с тигровой креветкой и&nbsp;кремом из&nbsp;авокадо</p>
                            <p>Заказ от 5 закусок - 250&nbsp;руб./шт.</p>
                        </div>
                    </div>
                    <div class="price-vyezdmk-item__action">
                        <a class="button button-solid" href="/menu">выбрать</a>
                    </div>
                </div>
                <div class="price-vyezdmk-item d-flex flex-column text-center">
                    <div class="price-vyezdmk-item__img">
                        <img class="ibg" src="/images/menu/buffet/05.webp" alt="Брускетта">
                    </div>
                    <div class="price-vyezdmk-item__body">
                        <div class="price-vyezdmk-item__title">
                            Брускетта Тапенада
                        </div>
                        <div class="price-vyezdmk-item__text">
                            <p>с вяленым томатом и&nbsp;каперсами</p>
                            <p>Заказ от 5 закусок - 200&nbsp;руб./шт.</p>
                        </div>
                    </div>
                    <div class="price-vyezdmk-item__action">
                        <a class="button button-solid" href="/menu">выбрать</a>
                    </div>
                </div>
                <div class="price-vyezdmk-item d-flex flex-column text-center">
                    <div class="price-vyezdmk-item__img">
                        <img class="ibg" src="/images/menu/buffet/06.webp" alt="Брускетта">
                    </div>
                    <div class="price-vyezdmk-item__body">
                        <div class="price-vyezdmk-item__title">
                            Брускетта
                        </div>
                        <div class="price-vyezdmk-item__text">
                            <p>с кремом из печеной паприки и&nbsp;ореховым соусом</p>
                            <p>Заказ от 5 закусок - 200&nbsp;руб./шт.</p>
                        </div>
                    </div>
                    <div class="price-vyezdmk-item__action">
                        <a class="button button-solid" href="/menu">выбрать</a>
                    </div>
                </div>
                <div class="price-vyezdmk-item d-flex flex-column text-center">
                    <div class="price-vyezdmk-item__img">
                        <img class="ibg" src="/images/menu/buffet/07.webp" alt="Брускетта">
                    </div>
                    <div class="price-vyezdmk-item__body">
                        <div class="price-vyezdmk-item__title">
                            Брускетта
                        </div>
                        <div class="price-vyezdmk-item__text">
                            <p>с лососем, творожным кремом и&nbsp;томатами Черри </p>
                            <p>Заказ от 5 закусок - 250&nbsp;руб./шт.</p>
                        </div>
                    </div>
                    <div class="price-vyezdmk-item__action">
                        <a class="button button-solid" href="/menu">выбрать</a>
                    </div>
                </div>
                <div class="price-vyezdmk-item d-flex flex-column text-center">
                    <div class="price-vyezdmk-item__img">
                        <img class="ibg" src="/images/menu/buffet/08.webp" alt="Брускетта">
                    </div>
                    <div class="price-vyezdmk-item__body">
                        <div class="price-vyezdmk-item__title">
                            Брускетта
                        </div>
                        <div class="price-vyezdmk-item__text">
                            <p>с домашней страчателлой и&nbsp;соусом песто </p>
                            <p>Заказ от 5 закусок - 200&nbsp;руб./шт.</p>
                        </div>
                    </div>
                    <div class="price-vyezdmk-item__action">
                        <a class="button button-solid" href="/menu">выбрать</a>
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
        //priceVyezdmkl
        function postsCarousel() {
            var checkWidth = $(window).width();
            var owlPost = $(".price-vyezdmk");
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

    });

</script>
