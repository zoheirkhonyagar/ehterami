<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Slogan;
use Illuminate\Http\Request;
use App\Information;
use App\Quote;
use App\Medal;
use App\AboutUsHistory;

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
        $aboutUsHistory = AboutUsHistory::orderBy('id', 'desc')->first(); 
        $medals = Medal::all();
        return view('main.about-us.index' , compact(['information','medals','aboutUsHistory']));
    }

    public function comingSoon()
    {
        return view('coming-soon.index');
    }

    public function contactUs()
    {
        $information = Information::find(1);
        return view('main.contact-us.index' , compact(['information']));
    }

    public function news()
    {
        $information = Information::find(1);
        return view('main.news.index' , compact(['information']));
    }
}
