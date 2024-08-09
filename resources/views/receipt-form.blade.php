@extends('layouts.app')

@section('og_title', 'Ознакомление с правилами безопасности')
@section('og_image', 'https://cookforia.ru/images/main-birthday-back.jpg')
@section('title', 'Ознакомление с правилами безопасности')

@section('robots', 'noindex, nofollow')



@section('content')
	<style>
		.container {
			font-size: 18px;
			font-family: "Gilroy Light";
		}
		.h1 {
			margin-top: 20px;
			text-align: center;
			font-family: "Gilroy Extra Bold";
  			font-size: 52px;
		}
		.h2 {
			text-align: center;
  			font-size: 34px;
			margin-bottom: 30px;
		}
		.date {
			margin-bottom: 30px;
		}
		.form {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			gap: 12px;
			margin: 30px 0;
		}

		.input__wrap {
			min-width: 300px;
			width: 50%;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: flex-start;
		}

		input[type="text"],
		input[type="email"],
		input[type="date"] {
			width: 100%;
		}

		.checkbox-label {
			width: 100%;
			cursor: pointer;
		}

		.par {
			width: 100%;
		}
		
	</style>

	<div class="section" style="background: #171717;">
        @component('components.header_menu')
        @endcomponent
    </div>
    <div class="section">
		<div class="container">
			<h1 class="h1">Ознакомление с правилами безопасности</h1>
			<h2 class="h2">Кулинарный мастер-класс</h2>
			<div class="studio">Студия: {{ $studio }}</div>
			<div class="date">Дата и время: {{ request()->get('date', '') }}</div>
			<p class="par">С правилами безопасности при проведении мастер-классов можете ознакомиться по ссылке: <a href="https://cookforia.ru/safetyrules.pdf" download>https://cookforia.ru/safetyrules.pdf</a>.</p>
			<form action="/recipe" method="post" class="form">
				@csrf
				<input type="hidden" name="id" value="{{ request('id', '') }}">
				<div class="input__wrap">
					<label for="surname">Фамилия</label>
					<input type="text" name="surname" id="surname" maxlength="50" required>
				</div>
				<div class="input__wrap">
					<label for="name">Имя</label>
					<input type="text" name="name" id="name" maxlength="50" required>
				</div>
				<div class="input__wrap">
					<label for="patronymic">Отчество</label>
					<input type="text" name="patronymic" id="patronymic" maxlength="50" required>
				</div>
				<div class="input__wrap">
					<label for="bday">Дата рождения</label>
					<input type="date" name="bday" id="bday" required>
				</div>

				<div class="">Если вы хотите получить рецепты блюд, которые Вы готовили на кулинарном мастер-классе, оставьте свой контактный email. Вместе с рецептом мы также направим Вам промокод со скидкой на наши услуги.</div>

				<div class="input__wrap">
					<label for="name">Email</label>
					<input type="email" name="email" maxlength="50" required>
				</div>

				<p class="par">Заполняя данную форму, Вы соглашаетесь с условиями <a target="_blank" href="https://cookforia.ru/policy.pdf?ver=20.09.2023">Политики в отношении обработки персональных данных</a>.</p>
				<p class="par">Мы <strong>не будем направлять</strong> Вам спам, уникальные предложения и какие-либо информационные рассылки от нашей студии. Единственное письмо, которое Вы получите от нас – с рецептами блюд и промокодом.</p>
				<p class="par">Тем не менее, если Вы хотите заблаговременно получить приглашение отметить свой день рождения у нас с дополнительной скидкой, укажите это в следующем поле:</p>
				<label class="checkbox-label">
					<input type="checkbox" name="notify">
					Направьте мне предложение о праздновании дня рождения с дополнительной скидкой
				</label>

				<button class="button button-solid">С правилами безопасности ознакомлен(а)</button>
			</form>
		</div>
	</div>
@endsection
