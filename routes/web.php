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
        Route::get('/team-building', 'teamBuilding');
        Route::get('/appointment', 'appointment');
        Route::get('/evening', 'evening');
        Route::get('/for-children', 'forChildren');
        Route::get('/individual', 'individual');
        Route::get('/family', 'family');
        Route::get('/for-man', 'forMan');
        Route::get('/for-woman', 'forWoman');
        Route::get('/teenager', 'teenager');
        Route::get('/chef', 'chef');
        Route::get('/creative', 'creative');
        Route::get('/wine', 'wine');
        Route::get('/quest', 'quest');
        Route::get('/february', 'february');
        Route::get('/valentins-day', 'valentinsDay');
        Route::get('/march', 'march');
        Route::get('/easter', 'easter');
        Route::get('/v-day', 'vDay');
        Route::get('/nature', 'nature');
        Route::get('/group', 'group');
        Route::get('/georgian-cuisine', 'georgianCuisine');
        Route::get('/italian-cuisine', 'italianCuisine');
        Route::get('/french-cuisine', 'frenchCuisine');
        Route::get('/cakes', 'cakes');
        Route::get('/pizza', 'pizza');
        Route::get('/meat', 'meat');
        Route::get('/bbq', 'bbq');
        Route::get('/khachapuri', 'khachapuri');
        Route::get('/sushi', 'sushi');
        Route::get('/tom-yum', 'tomYum');
        Route::get('/baking', 'baking');
        Route::get('/bruschettas', 'bruschettas');
        Route::get('/about', 'about');
        Route::get('/certificate', 'certificate');
        Route::get('/vyezdnoj-mk', 'vyezdnojMk');
    });

Route::controller(SiginController::class)
    ->group(function () {
        // Route::post('/schedule/form', 'scheduleRequest')->name('schedule.request');
        Route::post('/main/form', 'mainRequest')->name('main.request');
        Route::post('/sign_in/form', 'signinRequest')->name('signin.request');
    });

Route::get('recipe', [RecipeFormController::class, 'show']);
Route::post('recipe', [RecipeFormController::class, 'handle']);
