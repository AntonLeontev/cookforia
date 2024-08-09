@extends('layouts.app')

@section('og_title', 'Кейтеринг')
@section('og_description', 'Кейтеринг')
@section('og_image', 'https://cookforia.ru/images/main-girls-back.jpg')
@section('title', 'Кейтеринг')
@section('description', 'Кейтеринг')
@section('keywords', 'Кейтеринг')

@section('content')
    <div class="section section-main section-main-catering">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Кейтеринг</h1>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>

    <div class="section section-content">
        <div class="container">
            <h2>Кейтеринг</h2>
            <p class="large-text">Дорогие друзья!</p>
            <p>Кулинарная студия Cookforia предлагает вам услуги кейтеринга на ваших мероприятиях:</p>
            <ul>
                <li>в Санкт-Петербурге и Ленинградской области</li>
                <li>Меню на ваш бюджет от нашего шеф-повара</li>
                <li>Мы поможем вам составить самое удачное сочетание блюд под необходимый формат мероприятия</li>
                <li>Доступные цены и большой выбор вкусных блюд</li>
                <li>Доставка и сервировка без опозданий и задержек</li>
                <li>Наш кейтеринг уже с опытом. Работаем с 2015 года и адаптируемся под любую площадку</li>
                <li>Любой формат: барбекю, свадьба, фуршет, кофе-брейк, банкет, детский праздник, мастер-классы для
                    детей и взрослых. От небольших семейных праздников до масштабных мероприятий
                </li>
            </ul>
        </div>
    </div>

    <div class="section section-sig-in" name="sign-in-form" id="sign-in-form">
        @component('components.sign_in_form')
        @endcomponent
    </div>
@endsection
