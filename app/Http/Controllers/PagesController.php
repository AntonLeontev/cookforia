<?php

namespace App\Http\Controllers;

use App\Services\MyClassApiService;

class PagesController extends Controller
{
    public function index()
    {
        return view('home', []);
    }

    public function catering()
    {
        return view('catering', []);
    }

    public function menu()
    {
        return view('menu', []);
    }

    public function kids()
    {
        return view('kids', []);
    }

    public function studiorental()
    {
        return view('studio-rental', []);
    }

    public function girls()
    {
        return view('girls', []);
    }

    public function corporate()
    {
        return view('corporate', []);
    }

    public function birthday()
    {
        return view('birthday', []);
    }

    public function schedule(MyClassApiService $myClassApiInstance)
    {
        $menu = $myClassApiInstance->getMenu();
        $weekDays = [1 => 'ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ', 'ВС'];

        return view('schedule', [
            'mainMenu' => $menu,
            'kidsMenu' => $menu,
            'weekDays' => $weekDays,
        ]);
    }

    public function contacts()
    {
        return view('contacts', []);
    }
}
