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

	@php
		$items = [
			[
				'title' => 'Брускетта',
				'text' => [
					'с печенью и икрой трески',
					'Заказ от 5 шт - 250&nbsp;руб./шт.',
				],
				'image' => '/images/menu/buffet/01.webp',
			],
			[
				'title' => 'Брускетта',
				'text' => [
					'с печеным перцем и ореховым соусом',
					'Заказ от 5 шт - 200&nbsp;руб./шт.',
				],
				'image' => '/images/menu/buffet/02.webp',
			],
			[
				'title' => 'Пицца',
				'text' => [
					'с ветчиной и грибами',
					'Заказ от 2 шт 30 см - 800&nbsp;руб./шт.',
				],
				'image' => '/images/menu/buffet/03.webp',
			],
			[
				'title' => 'Брускетта',
				'text' => [
					'с тигровой креветкой и соусом из авокадо',
					'Заказ от 5 закусок - 250&nbsp;руб./шт.',
				],
				'image' => '/images/menu/buffet/04.webp',
			],
			[
				'title' => 'Брускетта',
				'text' => [
					'с ростбифом, вяленым томатом и луковым мармеладом',
					'Заказ от 5 закусок - 250&nbsp;руб./шт.',
				],
				'image' => '/images/menu/buffet/05.webp',
			],
			[
				'title' => 'Брускетта',
				'text' => [
					'с домашней страчателлой и соусом песто',
					'Заказ от 5 закусок - 200&nbsp;руб./шт.',
				],
				'image' => '/images/menu/buffet/06.webp',
			],
			[
				'title' => 'Брускетта',
				'text' => [
					'с копой, творожным кремом и помидорками черри',
					'Заказ от 5 закусок - 250&nbsp;руб./шт.',
				],
				'image' => '/images/menu/buffet/07.webp',
			],
			[
				'title' => 'Брускетта',
				'text' => [
					'с лососем, творожным кремом и томатами черри',
					'Заказ от 5 закусок - 250&nbsp;руб./шт.',
				],
				'image' => '/images/menu/buffet/08.webp',
			],
			[
				'title' => 'Брускетта',
				'text' => [
					'с соусом топинада, вяленым томатом и каперсами',
					'Заказ от 5 закусок - 250&nbsp;руб./шт.',
				],
				'image' => '/images/menu/buffet/13.webp',
			],
			[
				'title' => 'Брускетта',
				'text' => [
					'с салом и соусом релиш',
					'Заказ от 5 закусок - 250&nbsp;руб./шт.',
				],
				'image' => '/images/menu/buffet/14.webp',
			],
			[
				'title' => 'Брускетта',
				'text' => [
					'с копченым угрем и салатом чука',
					'Заказ от 5 закусок - 250&nbsp;руб./шт.',
				],
				'image' => '/images/menu/buffet/16.webp',
			],
			[
				'title' => 'Брускетта',
				'text' => [
					'с ростбифом, вяленым томатом и луковым мармеладом',
					'Заказ от 5 закусок - 250&nbsp;руб./шт.',
				],
				'image' => '/images/menu/buffet/17.webp',
			],
			[
				'title' => 'Пицца',
				'text' => [
					'с ветчиной и грибами',
					'Заказ от 2 шт 30 см - 800&nbsp;руб./шт.',
				],
				'image' => '/images/menu/buffet/03.webp',
			],
			[
				'title' => 'Пицца',
				'text' => [
					'жульен с курицей',
					'Заказ от 2 шт 30 см - 800&nbsp;руб./шт.',
				],
				'image' => '/images/menu/buffet/09.webp',
			],
			[
				'title' => 'Пицца',
				'text' => [
					'пеперони',
					'Заказ от 2 шт 30 см - 800&nbsp;руб./шт.',
				],
				'image' => '/images/menu/buffet/10.webp',
			],
			[
				'title' => 'Пицца',
				'text' => [
					'маргарита',
					'Заказ от 2 шт 30 см - 800&nbsp;руб./шт.',
				],
				'image' => '/images/menu/buffet/11.webp',
			],
			[
				'title' => 'Пицца',
				'text' => [
					'цезарь с курицей',
					'Заказ от 2 шт 30 см - 800&nbsp;руб./шт.',
				],
				'image' => '/images/menu/buffet/12.webp',
			],
			[
				'title' => 'Пицца',
				'text' => [
					'жульен с курицей',
					'Заказ от 2 шт 30 см - 800&nbsp;руб./шт.',
				],
				'image' => '/images/menu/buffet/15.webp',
			],
			[
				'title' => 'Пицца',
				'text' => [
					'с курочкой и свежими томатами',
					'Заказ от 2 шт 30 см - 800&nbsp;руб./шт.',
				],
				'image' => '/images/menu/buffet/18.webp',
			],
		];
	@endphp

    <div class="section section-padding _slider-shadow">
        <div class="container">
            <div class="price-vyezdmk mt-md-5 mt-4 _slider-destroy">

				@foreach ($items as $item)
					<div class="price-vyezdmk-item d-flex flex-column text-center">
						<div class="price-vyezdmk-item__img">
							<img class="ibg" src="{{ $item['image'] }}" alt="Брускетта">
						</div>
						<div class="price-vyezdmk-item__body">
							<div class="price-vyezdmk-item__title">
								{{ $item['title'] }}
							</div>
							<div class="price-vyezdmk-item__text">
								@foreach ($item['text'] as $text)
									<p>{!! $text !!}</p>
								@endforeach
							</div>
						</div>
						<div class="price-vyezdmk-item__action">
							<a class="button button-solid" href="/menu">выбрать</a>
						</div>
					</div>
				@endforeach
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
