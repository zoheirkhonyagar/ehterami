<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Slogan;
use Illuminate\Http\Request;
use App\Information;
use App\Quote;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $slogans = Slogan::all();
        $information = Information::find(1);
        $quotes = Quote::all();
        return view('main.main-page.index' , compact(['sliders','slogans','information','quotes']));
    }

    public function aboutUs()
    {
        $information = Information::find(1);
        return view('main.about-us.index', compact(['information']));
    }

    public function comingSoon()
    {
        return view('coming-soon.index');
    }
}
