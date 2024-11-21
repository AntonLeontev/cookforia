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

    public function teamBuilding()
    {
        return view('team-building', []);
    }

    public function appointment()
    {
        return view('appointment', []);
    }

    public function evening()
    {
        return view('evening', []);
    }

    public function forChildren()
    {
        return view('for-children', []);
    }

    public function individual()
    {
        return view('individual', []);
    }

    public function family()
    {
        return view('family', []);
    }

    public function forMan()
    {
        return view('for-man', []);
    }

    public function forWoman()
    {
        return view('for-woman', []);
    }

    public function teenager()
    {
        return view('teenager', []);
    }

    public function chef()
    {
        return view('chef', []);
    }

    public function creative()
    {
        return view('creative', []);
    }

    public function wine()
    {
        return view('wine', []);
    }

    public function quest()
    {
        return view('quest', []);
    }

    public function february()
    {
        return view('february', []);
    }

    public function valentinsDay()
    {
        return view('valentins-day', []);
    }

    public function march()
    {
        return view('march', []);
    }

    public function easter()
    {
        return view('easter', []);
    }

    public function vDay()
    {
        return view('v-day', []);
    }

    public function nature()
    {
        return view('nature', []);
    }

    public function group()
    {
        return view('group', []);
    }

    public function georgianCuisine()
    {
        return view('georgian-cuisine', []);
    }

    public function italianCuisine()
    {
        return view('italian-cuisine', []);
    }

    public function frenchCuisine()
    {
        return view('french-cuisine', []);
    }

    public function cakes()
    {
        return view('cakes', []);
    }

    public function pizza()
    {
        return view('pizza', []);
    }

    public function meat()
    {
        return view('meat', []);
    }

    public function khachapuri()
    {
        return view('khachapuri', []);
    }

    public function bbq()
    {
        return view('bbq', []);
    }

    public function sushi()
    {
        return view('sushi', []);
    }

    public function tomYum()
    {
        return view('tom-yum', []);
    }

    public function baking()
    {
        return view('baking', []);
    }

    public function bruschettas()
    {
        return view('bruschettas', []);
    }

    public function about()
    {
        return view('about', []);
    }

    public function certificate()
    {
        return view('certificate', []);
    }

    public function vyezdnojMk()
    {
        return view('vyezdnoj-mk', []);
    }

    public function buffetMenu()
    {
        return view('buffet-menu', []);
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
