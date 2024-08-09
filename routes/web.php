<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\RecipeFormController;
use App\Http\Controllers\SiginController;

Route::controller(PagesController::class)
    ->group(function () {
        Route::get('/', 'index');
        Route::get('/menu', 'menu');
        Route::get('/catering', 'catering');
        Route::get('/kids', 'kids');
        Route::get('/girls', 'girls');
        Route::get('/corporate', 'corporate');
        Route::get('/birthday', 'birthday');
        Route::get('/contacts', 'contacts');
        Route::get('/schedule', 'schedule')->name('schedule');
        Route::get('/studio-rental', 'studiorental');
    });

Route::controller(SiginController::class)
    ->group(function () {
        Route::post('/schedule/form', 'scheduleRequest')->name('schedule.request');
        Route::post('/main/form', 'mainRequest')->name('main.request');
        Route::post('/sign_in/form', 'signinRequest')->name('signin.request');
    });

Route::get('recipe', [RecipeFormController::class, 'show']);
Route::post('recipe', [RecipeFormController::class, 'handle']);

Route::get('google/auth', function () {
    $clientId = config('services.google.client_id');
    $redirectUri = 'https://cookforia.ru/google/redirect';
    $scope = 'https://www.googleapis.com/auth/drive.file https://www.googleapis.com/auth/spreadsheets https://www.googleapis.com/auth/drive';

    $uri = "https://accounts.google.com/o/oauth2/v2/auth?client_id=$clientId&redirect_uri=$redirectUri&response_type=code&scope=$scope&access_type=offline";

    return redirect($uri);
});

Route::get('google/redirect', function () {
    if (! request('code')) {
        echo 'Ошибка: Не получен код';

        return;
    }

    $clientId = config('services.google.client_id');
    $clientSecret = config('services.google.client_secret');
    $redirectUri = 'https://cookforia.ru/google/redirect';
    $code = request('code');

    $url = "https://oauth2.googleapis.com/token?client_id=$clientId&client_secret=$clientSecret&code=$code&grant_type=authorization_code&redirect_uri=$redirectUri";

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);

    // Receive server response ...
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    curl_close($ch);

    $response = json_decode($response);

    echo 'Авторизация успешна! Передайте разработчику данные:';
    echo '<br>';
    echo '<br>';
    echo 'Access token: ';
    echo $response->access_token;
    echo '<br>';
    echo 'Refresh token: ';
    echo $response->refresh_token ?? '';
});
