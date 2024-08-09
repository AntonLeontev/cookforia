@extends('layouts.app')

@section('og_title', "Контакты кулинарной студии 'Cookforia'")
@section('og_description', 'Кулинарная студия в Санкт-Петербурге. Меню на человека от 2000 руб. Бесплатные напитки.')
@section('og_image', 'https://cookforia.ru/images/menu-back.jpg')
@section('title', "Контакты кулинарной студии 'Cookforia'")
@section('description', 'Кулинарная студия в Санкт-Петербурге. Меню на человека от 2000 руб. Бесплатные напитки.')
@section('keywords', 'кулинарный мастер-класс, день рождения, корпоратив, девичник, мероприятие, праздник')

@section('content')
    <div class="section section-main section-main-pages">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Контакты</h1>
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

    @component('components.contacts')
    @endcomponent

    <div class="section section-sig-in" name="sign-in-form" id="sign-in-form">
        @component('components.sign_in_form')
        @endcomponent
    </div>
@endsection
