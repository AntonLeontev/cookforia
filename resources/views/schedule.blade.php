@extends('layouts.app')

@section('og_title', 'Распиание кулинарных мастер-классов')
@section('og_description', 'Кулинарные мастер-классы для небольших групп')
@section('og_image', '')
@section('title', 'Распиание кулинарных мастер-классов')
@section('description', 'Кулинарные мастер-классы для небольших групп')
@section('keywords', 'кулинарный мастер-класс')

@section('content')
    <div class="section section-main section-main-schedule">
        @component('components.header_menu')
        @endcomponent
        <div class="main-content">
            <div class="container">
                <h1>Кулинарные мастер-классы</h1>
                <p>
                    Проведите вечер с семьей или друзьями. Отметьте весело и необычно любой важный для вас праздник.
                    Устройте свидание при свечах. И, конечно, научитесь ЛЮБИТЬ ГОТОВИТЬ!
                </p>
            </div>
        </div>
        @component('components.main_form')
        @endcomponent
    </div>
    <div class="section section-pages-benefits">
        <div class="container">
            <h2>Расписание кулинарных
                мастер-классов</h2>
            <div class="pages-benefits-container">
                <div class="pages-benefit-item">
                    <div class="pages-benefits-item-image">
                        <img src="/images/icons/adult-and-kids.svg" alt="">
                    </div>
                    <div class="pages-benefits-item-header">
                        Сборная группа
                    </div>
                    <div class="pages-benefits-item-text">
                        Можно принять участие в мастер-классе небольшой группой и даже одному человеку
                    </div>
                </div>

                <div class="pages-benefit-item">
                    <div class="pages-benefits-item-image">
                        <img src="/images/icons/2-3-meals.svg" alt="">
                    </div>
                    <div class="pages-benefits-item-header">
                        Готовим 2-3 блюда
                        на каждом МК
                    </div>
                    <div class="pages-benefits-item-text">
                        Бесплатные безалкогольные
                        напитки в большом
                        количестве
                    </div>
                </div>

                <div class="pages-benefit-item">
                    <div class="pages-benefits-item-image">
                        <img src="/images/icons/easy-at-home.svg" alt="">
                    </div>
                    <div class="pages-benefits-item-header">
                        Легко повторить
                        дома
                    </div>
                    <div class="pages-benefits-item-text">
                        Бесплатные безалкогольные
                        напитки в большом
                        количестве
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-how-much">
        <div class="container">
            <h2>Стоимость мероприятия</h2>
            <h3 class="orange-header">от 25000 руб.</h3>
            <p style="text-align: center; margin-bottom: 0;">Стоимость организации мероприятия в декабре - уточняйте у менеджеров студии.</p>
            <p class="large-text">Стоимость зависит от выбранного меню. Цена в меню указана для одного участника.</p>
        </div>
    </div>
    <div class="section section-content-menu">
        <div class="container">
            <div class="content-menu-block">
                <h2>Мастер-классы для взрослых</h2>
                <p class="large-text">В каждом меню 3 блюда + бесплатные напитки</p>
                <div class="menu-container">
                    @foreach($mainMenu as $menuElement)
                        <div class="menu-block">
                            <div class="menu-block-header">
                                {{ $menuElement['name'] }}
                            </div>
                            <div class="menu-block-date">
                                {{ date('d.m.Y', $menuElement['date']) }} {{ $menuElement['beginTime'] }}
                                -{{ $menuElement['endTime'] }}
                            </div>
                            <div class="menu-content-block">
                                <div class="menu-content-images owl-carousel owl-theme">
                                    @foreach($menuElement['images'] as $image)
                                        <div class="item">
                                            <img src="{{$image}}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="menu-content-composition schedule-content-composition">
                                    @foreach($menuElement['composition'] as $meal)
                                        <div class="composition-element"> {{ $meal }} </div>
                                    @endforeach
                                </div>
                                <div class="menu-content-footer">
                                    <div class="menu-price">{{ $menuElement['price'] }} р.</div>
                                    <div class="menu-button">
										@if($menuElement['details'] != NULL)
                                        <a class="more" href="#" data-toggle="modal"
                                           data-target="#modal_{{ $menuElement['id'] }}">Подробнее</a>
										@endif
                                        <a href="#sign-in-form" class="lesson-select-btn"
                                           data-form-val="{{ $menuElement['id'] }}">Выбрать</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
						@if($menuElement['details'] != NULL)
                        <div class="modal fade" id="modal_{{ $menuElement['id'] }}" tabindex="-1" role="dialog"
                             aria-labelledby="modalLabel_{{ $menuElement['id'] }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body schedule-modal-body">
                                        <div class="schedule-modal-description">
                                            {{ $menuElement['details']['description']}}
                                        </div>
                                        <h2 class="schedule-modal-header">{{ $menuElement['details']['title']}}</h2>
                                        <div class="schedule-modal-text">
                                            @foreach($menuElement['details']['text'] as $line)
                                                {!! $line !!}
                                            @endforeach
                                        </div>
                                        <div class="schedule-modal-wait-text">Ждем вас! Все подробности по телефону
                                            студии.
                                        </div>
                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                </div>
                            </div>
                        </div>
						@endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{--    <div class="section section-content-menu content-menu-peach-back">--}}
    {{--        <div class="container">--}}
    {{--            <div class="content-menu-block">--}}
    {{--                <h2>Мастер-классы для детей</h2>--}}
    {{--                <p class="large-text">В каждом меню 2 блюда + напитки</p>--}}
    {{--                <div class="menu-container">--}}
    {{--                    @foreach($kidsMenu as $menuElement)--}}
    {{--                        <div class="menu-block">--}}
    {{--                            <div class="menu-block-header">--}}
    {{--                                {{ $menuElement['name'] }}--}}
    {{--                            </div>--}}
    {{--                            <div class="menu-content-block">--}}
    {{--                                <div class="menu-content-images owl-carousel owl-theme">--}}
    {{--                                    @foreach($menuElement['images'] as $image)--}}
    {{--                                        <div class="item">--}}
    {{--                                            <img src="{{$image}}" alt="">--}}
    {{--                                        </div>--}}
    {{--                                    @endforeach--}}
    {{--                                </div>--}}
    {{--                                <div class="menu-content-composition">--}}
    {{--                                    <ul>--}}
    {{--                                        @foreach($menuElement['composition'] as $meal)--}}
    {{--                                            <li>{{ $meal }}</li>--}}
    {{--                                        @endforeach--}}
    {{--                                    </ul>--}}
    {{--                                </div>--}}
    {{--                                <div class="menu-content-footer">--}}
    {{--                                    <div class="menu-price">{{ $menuElement['price'] }} р.</div>--}}
    {{--                                    <div class="menu-button">--}}
    {{--                                        <a href="#sign-in-form" class="lesson-select-btn"--}}
    {{--                                           data-form-val="{{ $menuElement['id'] }}">Выбрать</a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    @endforeach--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <div class="section section-schedule-also">
        <div class="container">
            <h2>Также вы можете провести
                у нас</h2>
            <div class="schedule-also-container">
                <div class="schedule-also-item">
                    <div class="schedule-also-image"><img src="/images/icons/birthday.svg" alt=""></div>
                    <div class="schedule-also-header">Дни рождения</div>
                </div>
                <div class="schedule-also-item">
                    <div class="schedule-also-image"><img src="/images/icons/corporate.svg" alt=""></div>
                    <div class="schedule-also-header">Корпоративы</div>
                </div>
                <div class="schedule-also-item">
                    <div class="schedule-also-image"><img src="/images/icons/hen-party.svg" alt=""></div>
                    <div class="schedule-also-header">Девичники</div>
                </div>
                <div class="schedule-also-item">
                    <div class="schedule-also-image"><img src="/images/icons/kids-holiday.svg" alt=""></div>
                    <div class="schedule-also-header">Детские праздники</div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-schedule-gallery">
        <div class="container">
            <h2>Посмотрите как проходят<br/>
                наши мастер-классы</h2>
            <div class="schedule-gallery-container owl-carousel owl-theme">
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/schedule/1-1110.avif" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/schedule/1-690.avif" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/schedule/1-510.avif" media="(max-width: 767px)">
                        <source srcset="/images/gallery/schedule/1-1110.avif">
                        <source srcset="/images/gallery/schedule/1-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/schedule/1-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/schedule/1-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/schedule/1-1110.jpg" alt="МАСТЕР-КЛАССЫ">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/schedule/2-1110.avif" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/schedule/2-690.avif" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/schedule/2-510.avif" media="(max-width: 767px)">
                        <source srcset="/images/gallery/schedule/2-1110.avif">
                        <source srcset="/images/gallery/schedule/2-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/schedule/2-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/schedule/2-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/schedule/2-1110.jpg" alt="МАСТЕР-КЛАССЫ">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/schedule/3-1110.avif" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/schedule/3-690.avif" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/schedule/3-510.avif" media="(max-width: 767px)">
                        <source srcset="/images/gallery/schedule/3-1110.avif">
                        <source srcset="/images/gallery/schedule/3-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/schedule/3-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/schedule/3-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/schedule/3-1110.jpg" alt="МАСТЕР-КЛАССЫ">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/schedule/4-1110.avif" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/schedule/4-690.avif" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/schedule/4-510.avif" media="(max-width: 767px)">
                        <source srcset="/images/gallery/schedule/4-1110.avif">
                        <source srcset="/images/gallery/schedule/4-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/schedule/4-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/schedule/4-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/schedule/4-1110.jpg" alt="МАСТЕР-КЛАССЫ">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <source srcset="/images/gallery/schedule/5-1110.avif" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/schedule/5-690.avif" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/schedule/5-510.avif" media="(max-width: 767px)">
                        <source srcset="/images/gallery/schedule/5-1110.avif">
                        <source srcset="/images/gallery/schedule/5-1110.jpg" media="(min-width: 1200px)">
                        <source srcset="/images/gallery/schedule/5-690.jpg" media="(min-width: 768px) and (max-width: 991px)">
                        <source srcset="/images/gallery/schedule/5-510.jpg" media="(max-width: 767px)">
                        <img src="/images/gallery/schedule/5-1110.jpg" alt="МАСТЕР-КЛАССЫ">
                    </picture>
                </div>
                <!-- <div class="item"><img src="/images/gallery/schedule/1.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/schedule/2.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/schedule/3.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/schedule/4.jpg" alt=""></div>
                <div class="item"><img src="/images/gallery/schedule/5.jpg" alt=""></div> -->
            </div>
        </div>
    </div>
    <div class="section section-sig-in" name="sign-in-form" id="sign-in-form">
        @component('components.sign_in_form')
        @endcomponent
{{--        <div class="sig-in-content-block">--}}
{{--            <div class="container">--}}
{{--                <h2>Запишитесь на мастер-класс</h2>--}}
{{--                <h3>Стандартный мастер-класс длится 3 часа. При бронировании необходимо указать дату и время начала--}}
{{--                    мероприятия.</h3>--}}

{{--                <div class="sig-in-form-container">--}}
{{--                    @if(Session::has('success'))--}}

{{--                        <div class="sig-in-form-success">--}}

{{--                            {{ Session::get('success') }}--}}

{{--                            @php--}}
{{--                                Session::forget('success');--}}
{{--                            @endphp--}}

{{--                        </div>--}}

{{--                    @endif--}}
{{--                    @if(Session::has('error'))--}}

{{--                        <div class="sig-in-form-error">--}}

{{--                            {{ Session::get('error') }}--}}

{{--                            @php--}}
{{--                                Session::forget('error');--}}
{{--                            @endphp--}}

{{--                        </div>--}}

{{--                    @endif--}}
{{--                    @if ($errors->any())--}}
{{--                        <div class="alert alert-danger">--}}
{{--                            <ul>--}}
{{--                                @foreach ($errors->all() as $error)--}}
{{--                                    <li>{{ $error }}</li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div><br/>--}}
{{--                    @endif--}}
{{--                    <form action="{{ route('schedule.request') }}" method="post">--}}
{{--                        @csrf--}}
{{--                        <input type="text" class="input input-text" name="name"--}}
{{--                               placeholder="Имя*" required>--}}
{{--                        <div class="select-wrapper">--}}
{{--                            <select name="lesson" id="" class="select lesson-select">--}}
{{--                                <option value="">Выберите занятие*</option>--}}
{{--                                @foreach($mainMenu as $menuElement)--}}
{{--                                    <option--}}
{{--                                        value="{{ $menuElement['id'] }}">{{ $menuElement['name'] }} {{ $menuElement['beginTime'] }}--}}
{{--                                        -{{ $menuElement['endTime'] }} {{ $weekDays[date('N', $menuElement['date'])] }} {{ date('d.m.Y', $menuElement['date']) }}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <input type="text" class="input input-text input-phone" name="phone"--}}
{{--                               placeholder="Номер телефона*" required>--}}
{{--                        --}}{{--                        <input type="number" class="input input-text" name="guest_count"--}}
{{--                        --}}{{--                               placeholder="Количество гостей">--}}
{{--                        <input type="submit" class="button button-solid" value="Отправить заявку">--}}
{{--                    </form>--}}
{{--                </div>--}}

{{--                <div class="sig-in-policy-text">--}}
{{--                    Нажимая на кнопку, вы даете согласие на обработку персональных данных и--}}
{{--                    соглашаетесь с <a href="policy.pdf">политикой конфиденциальности</a>.--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection
